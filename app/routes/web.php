<?php

$appPath = dirname(__DIR__);
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'POST' && isset($_POST['_method'])) {
    $requestMethod = strtoupper($_POST['_method']);
}

$taskController = null;

if (str_starts_with($uri, '/dashboard/tasks')) {
    require_once dirname($appPath) . '/config/database.php';
    require_once $appPath . '/services/TaskService.php';
    require_once $appPath . '/controllers/TaskController.php';

    $taskService = new TaskService($pdo);
    $taskController = new TaskController($taskService, $appPath . '/views');
}

if ($uri === '/') {
    require_once $appPath . '/views/home.php';
} elseif ($uri === '/register' && $requestMethod === 'GET') {
    require_once $appPath . '/views/auth/register.php';
} elseif ($uri === '/register' && $requestMethod === 'POST') {
    require_once $appPath . '/controllers/RegisterController.php';
} elseif ($uri === '/login' && $requestMethod === 'GET') {
    require_once $appPath . '/views/auth/login.php';
} elseif ($uri === '/login' && $requestMethod === 'POST') {
    require_once $appPath . '/controllers/LoginController.php';
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
