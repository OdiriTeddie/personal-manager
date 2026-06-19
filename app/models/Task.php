<?php

class Task
{
    public function __construct(private PDO $pdo)
    {
    }

    public function allForUser(int $userId): array
    {
        $statement = $this->pdo->prepare("
            SELECT *
            FROM tasks
            WHERE user_id = :user_id
            ORDER BY created_at DESC
        ");

        $statement->execute([
            'user_id' => $userId,
        ]);

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findForUser(int $taskId, int $userId): ?array
    {
        $statement = $this->pdo->prepare("
            SELECT *
            FROM tasks
            WHERE id = :id
              AND user_id = :user_id
            LIMIT 1
        ");

        $statement->execute([
            'id' => $taskId,
            'user_id' => $userId,
        ]);

        $task = $statement->fetch(PDO::FETCH_ASSOC);

        return $task ?: null;
    }

    public function create(int $userId, array $data): int
    {
        $statement = $this->pdo->prepare("
            INSERT INTO tasks (title, description, priority, due_date, created_at, user_id)
            VALUES (:title, :description, :priority, :due_date, :created_at, :user_id)
        ");

        $statement->execute([
            'title' => $data['title'],
            'description' => $data['description'],
            'priority' => $data['priority'],
            'due_date' => $data['due_date'],
            'created_at' => date('Y-m-d H:i:s'),
            'user_id' => $userId,
        ]);

        return (int) $this->pdo->lastInsertId();
    }

    public function update(int $taskId, int $userId, array $data): bool
    {
        $statement = $this->pdo->prepare("
            UPDATE tasks
            SET title = :title,
                description = :description,
                priority = :priority,
                due_date = :due_date
            WHERE id = :id
              AND user_id = :user_id
        ");

        $statement->execute([
            'title' => $data['title'],
            'description' => $data['description'],
            'priority' => $data['priority'],
            'due_date' => $data['due_date'],
            'id' => $taskId,
            'user_id' => $userId,
        ]);

        return $statement->rowCount() > 0;
    }

    public function delete(int $taskId, int $userId): bool
    {
        $statement = $this->pdo->prepare("
            DELETE FROM tasks
            WHERE id = :id
              AND user_id = :user_id
        ");

        $statement->execute([
            'id' => $taskId,
            'user_id' => $userId,
        ]);

        return $statement->rowCount() > 0;
    }
}
