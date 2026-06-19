<?php

class AuthService
{
    public function __construct(private User $user)
    {
    }

    public function login(array $input): array
    {
        $email = strtolower(trim($input['email'] ?? ''));
        $password = $input['password'] ?? '';
        $errors = [];

        if ($email === '') {
            $errors[] = 'Email is required';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Email is invalid';
        }

        if ($password === '') {
            $errors[] = 'Password is required';
        }

        if ($errors) {
            return ['errors' => $errors, 'old' => ['email' => $email], 'user' => null];
        }

        $user = $this->user->findByEmail($email);

        if (!$user || !password_verify($password, $user['password'])) {
            return [
                'errors' => ['Invalid login credentials'],
                'old' => ['email' => $email],
                'user' => null,
            ];
        }

        return ['errors' => [], 'old' => [], 'user' => $user];
    }

    public function register(array $input): array
    {
        $data = [
            'full_name' => trim($input['full_name'] ?? ''),
            'email' => strtolower(trim($input['email'] ?? '')),
            'password' => $input['password'] ?? '',
            'password_confirmation' => $input['password_confirmation'] ?? '',
        ];

        $errors = [];

        if ($data['full_name'] === '') {
            $errors[] = 'Full name is required';
        }

        if ($data['email'] === '') {
            $errors[] = 'Email is required';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Email is invalid';
        }

        if ($data['password'] === '') {
            $errors[] = 'Password is required';
        } elseif (strlen($data['password']) < 5) {
            $errors[] = 'Password length must be at least 5 characters';
        }

        if ($data['password'] !== $data['password_confirmation']) {
            $errors[] = 'Passwords do not match';
        }

        if (!$errors && $this->user->findByEmail($data['email'])) {
            $errors[] = 'Email already exists';
        }

        $old = [
            'full_name' => $data['full_name'],
            'email' => $data['email'],
        ];

        if ($errors) {
            return ['errors' => $errors, 'old' => $old, 'user_id' => null];
        }

        $userId = $this->user->create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
        ]);

        return ['errors' => [], 'old' => [], 'user_id' => $userId];
    }
}
