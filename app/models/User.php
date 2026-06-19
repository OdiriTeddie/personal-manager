<?php

class User
{
    public function __construct(private PDO $pdo)
    {
    }

    public function findByEmail(string $email): ?array
    {
        $statement = $this->pdo->prepare("
            SELECT *
            FROM users
            WHERE email = :email
            LIMIT 1
        ");

        $statement->execute([
            'email' => $email,
        ]);

        $user = $statement->fetch(PDO::FETCH_ASSOC);

        return $user ?: null;
    }

    public function create(array $data): int
    {
        $statement = $this->pdo->prepare("
            INSERT INTO users (full_name, email, password)
            VALUES (:full_name, :email, :password)
        ");

        $statement->execute([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        return (int) $this->pdo->lastInsertId();
    }
}
