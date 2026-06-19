<?php

class TaskService
{
    public function __construct(private Task $task)
    {
    }

    public function getAllForUser(int $userId): array
    {
        return $this->task->allForUser($userId);
    }

    public function findForUser(int $taskId, int $userId): ?array
    {
        return $this->task->findForUser($taskId, $userId);
    }

    public function create(int $userId, array $input): array
    {
        [$data, $errors] = $this->validate($input);

        if ($errors) {
            return ['errors' => $errors, 'data' => $data];
        }

        $taskId = $this->task->create($userId, $data);

        return ['errors' => [], 'data' => $data, 'task_id' => $taskId];
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

        $this->task->update($taskId, $userId, $data);

        return ['errors' => [], 'data' => $data];
    }

    public function delete(int $taskId, int $userId): bool
    {
        return $this->task->delete($taskId, $userId);
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
