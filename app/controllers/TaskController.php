<?php

class TaskController
{
    public function __construct(
        private TaskService $taskService,
        private string $viewsPath
    ) {
    }

    public function index(): void
    {
        $tasks = $this->taskService->getAllForUser($this->userId());

        require $this->viewsPath . '/tasks/index.php';
    }

    public function create(): void
    {
        require $this->viewsPath . '/tasks/create.php';
    }

    public function store(): void
    {
        $result = $this->taskService->create($this->userId(), $_POST);

        if ($result['errors']) {
            $_SESSION['errors'] = $result['errors'];
            $_SESSION['old'] = $result['data'];
            $this->redirect('/dashboard/tasks/create');
        }

        unset($_SESSION['old']);
        $_SESSION['success'] = 'Task created successfully';
        $this->redirect('/dashboard/tasks');
    }

    public function edit(int $taskId): void
    {
        $task = $this->taskService->findForUser($taskId, $this->userId());

        if (!$task) {
            $this->notFound();
        }

        require $this->viewsPath . '/tasks/edit.php';
    }

    public function update(int $taskId): void
    {
        $result = $this->taskService->update($taskId, $this->userId(), $_POST);

        if ($result['errors']) {
            $_SESSION['errors'] = $result['errors'];
            $_SESSION['old'] = $result['data'];
            $this->redirect("/dashboard/tasks/$taskId/edit");
        }

        unset($_SESSION['old']);
        $_SESSION['success'] = 'Task updated successfully';
        $this->redirect('/dashboard/tasks');
    }

    public function delete(int $taskId): void
    {
        $task = $this->taskService->findForUser($taskId, $this->userId());

        if (!$task) {
            $this->notFound();
        }

        require $this->viewsPath . '/tasks/delete.php';
    }

    public function destroy(int $taskId): void
    {
        if (!$this->taskService->delete($taskId, $this->userId())) {
            $this->notFound();
        }

        $_SESSION['success'] = 'Task deleted successfully';
        $this->redirect('/dashboard/tasks');
    }

    private function userId(): int
    {
        if (empty($_SESSION['user']['id'])) {
            $this->redirect('/login');
        }

        return (int) $_SESSION['user']['id'];
    }

    private function redirect(string $path): never
    {
        header("Location: $path");
        exit;
    }

    private function notFound(): never
    {
        http_response_code(404);
        echo 'Task not found';
        exit;
    }
}
