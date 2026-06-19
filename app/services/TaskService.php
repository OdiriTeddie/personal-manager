<?php

class TaskService
{
    public function __construct(private PDO $pdo)
    {
    }

    public function getAllForUser(int $userId): array
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

    public function create(int $userId, array $input): array
    {
        [$data, $errors] = $this->validate($input);

        if ($errors) {
            return ['errors' => $errors, 'data' => $data];
        }

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

        return ['errors' => [], 'data' => $data];
    }

    public function update(int $taskId, int $userId, array $input): array
    {
        if (!$this->findForUser($taskId, $userId)) {
            return ['errors' => ['Task not found'], 'data' => []];
        }

        [$data, $errors] = $this->validate($input);

        if ($errors) {
            return ['errors' => $errors, 'data' => $data];
        }

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

        return ['errors' => [], 'data' => $data];
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

    private function validate(array $input): array
    {
        $data = [
            'title' => trim($input['title'] ?? ''),
            'description' => trim($input['description'] ?? ''),
            'priority' => $input['priority'] ?? '',
            'due_date' => null,
        ];

        $errors = [];

        if ($data['title'] === '') {
            $errors[] = 'Title is required';
        }

        if ($data['description'] === '') {
            $errors[] = 'Description is required';
        }

        if (!in_array($data['priority'], ['low', 'medium', 'high'], true)) {
            $errors[] = 'Priority is invalid';
        }

        $dueDateInput = trim($input['due_date'] ?? '');

        if ($dueDateInput !== '') {
            $date = DateTime::createFromFormat('Y-m-d', $dueDateInput);

            if (!$date || $date->format('Y-m-d') !== $dueDateInput) {
                $errors[] = 'Due date is invalid';
            } else {
                $data['due_date'] = $date->format('Y-m-d');
            }
        }

        return [$data, $errors];
    }
}
