<?php

$appPath = dirname(__DIR__);
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'POST' && isset($_POST['_method'])) {
    $requestMethod = strtoupper($_POST['_method']);
}

$taskController = null;
$authController = null;

if (in_array($uri, ['/login', '/register'], true)) {
    require_once dirname($appPath) . '/config/database.php';
    require_once $appPath . '/models/User.php';
    require_once $appPath . '/services/AuthService.php';
    require_once $appPath . '/controllers/AuthController.php';

    $userModel = new User($pdo);
    $authService = new AuthService($userModel);
    $authController = new AuthController($authService, $appPath . '/views');
}

if (str_starts_with($uri, '/dashboard/tasks')) {
    require_once dirname($appPath) . '/config/database.php';
    require_once $appPath . '/models/Task.php';
    require_once $appPath . '/services/TaskService.php';
    require_once $appPath . '/controllers/TaskController.php';

    $taskModel = new Task($pdo);
    $taskService = new TaskService($taskModel);
    $taskController = new TaskController($taskService, $appPath . '/views');
}

if ($uri === '/') {
    require_once $appPath . '/views/home.php';
} elseif ($uri === '/register' && $requestMethod === 'GET') {
    $authController->showRegister();
} elseif ($uri === '/register' && $requestMethod === 'POST') {
    $authController->register();
} elseif ($uri === '/login' && $requestMethod === 'GET') {
    $authController->showLogin();
} elseif ($uri === '/login' && $requestMethod === 'POST') {
    $authController->login();
} elseif ($uri === '/dashboard') {
    require_once $appPath . '/views/dashboard.php';
} elseif ($uri === '/dashboard/tasks') {
    $taskController->index();
} elseif ($uri === '/dashboard/tasks/create' && $requestMethod === 'GET') {
    $taskController->create();
} elseif ($uri === '/dashboard/tasks/create' && $requestMethod === 'POST') {
    $taskController->store();
} elseif (preg_match('#^/dashboard/tasks/(\d+)/edit$#', $uri, $matches) && $requestMethod === 'GET') {
    $taskController->edit((int) $matches[1]);
} elseif (preg_match('#^/dashboard/tasks/(\d+)/edit$#', $uri, $matches) && $requestMethod === 'PATCH') {
    $taskController->update((int) $matches[1]);
} elseif (preg_match('#^/dashboard/tasks/(\d+)/delete$#', $uri, $matches) && $requestMethod === 'GET') {
    $taskController->delete((int) $matches[1]);
} elseif (preg_match('#^/dashboard/tasks/(\d+)/delete$#', $uri, $matches) && $requestMethod === 'DELETE') {
    $taskController->destroy((int) $matches[1]);
} elseif ($uri === '/dashboard/notes') {
    require_once $appPath . '/views/notes/index.php';
} elseif ($uri === '/dashboard/notes/create' && $requestMethod === 'GET') {
    require_once $appPath . '/views/notes/create.php';
} elseif ($uri === '/dashboard/notes/create' && $requestMethod === 'POST') {
    require_once $appPath . '/controllers/notes/CreateNoteController.php';
} elseif ($uri === '/dashboard/notes/edit') {
    require_once $appPath . '/views/notes/edit.php';
} elseif ($uri === '/dashboard/notes/show') {
    require_once $appPath . '/views/notes/show.php';
} elseif ($uri === '/dashboard/notes/delete') {
    require_once $appPath . '/views/notes/delete.php';
} elseif ($uri === '/dashboard/categories') {
    require_once $appPath . '/views/categories/index.php';
} elseif ($uri === '/dashboard/settings') {
    require_once $appPath . '/views/settings/index.php';
} else {
    http_response_code(404);
    echo '404 - Page not found';
}
