<?php

class AuthController
{
    public function __construct(
        private AuthService $authService,
        private string $viewsPath
    ) {
    }

    public function showRegister(): void
    {
        require $this->viewsPath . '/auth/register.php';
    }

    public function register(): void
    {
        $result = $this->authService->register($_POST);

        if ($result['errors']) {
            $_SESSION['errors'] = $result['errors'];
            $_SESSION['old'] = $result['old'];
            $this->redirect('/register');
        }

        unset($_SESSION['old']);
        $_SESSION['success'] = 'Account created successfully. You can now sign in.';
        $this->redirect('/login');
    }

    public function showLogin(): void
    {
        require $this->viewsPath . '/auth/login.php';
    }

    public function login(): void
    {
        $result = $this->authService->login($_POST);

        if ($result['errors']) {
            $_SESSION['errors'] = $result['errors'];
            $_SESSION['old'] = $result['old'];
            $this->redirect('/login');
        }

        session_regenerate_id(true);

        $_SESSION['user'] = [
            'id' => $result['user']['id'],
            'full_name' => $result['user']['full_name'],
            'email' => $result['user']['email'],
        ];

        unset($_SESSION['old']);
        $this->redirect('/dashboard');
    }

    private function redirect(string $path): never
    {
        header("Location: $path");
        exit;
    }
}
