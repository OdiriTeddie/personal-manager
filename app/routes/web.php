<?php

$appPath = dirname(__DIR__);
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'POST' && isset($_POST['_method'])) {
    $requestMethod = strtoupper($_POST['_method']);
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
    require_once $appPath . '/controllers/tasks/TaskIndexController.php';
} elseif ($uri === '/dashboard/tasks/create' && $requestMethod === 'GET') {
    require_once $appPath . '/views/tasks/create.php';
} elseif ($uri === '/dashboard/tasks/create' && $requestMethod === 'POST') {
    require_once $appPath . '/controllers/tasks/CreateTaskController.php';
} elseif (preg_match('#^/dashboard/tasks/(\d+)/edit$#', $uri, $matches) && $requestMethod === 'GET') {
    $taskId = $matches[1];
    require_once $appPath . '/views/tasks/edit.php';
} elseif (preg_match('#^/dashboard/tasks/(\d+)/edit$#', $uri, $matches) && $requestMethod === 'PATCH') {
    $taskId = $matches[1];
    require_once $appPath . '/controllers/tasks/UpdateTaskController.php';
} elseif (preg_match('#^/dashboard/tasks/(\d+)/delete$#', $uri, $matches) && $requestMethod === 'GET') {
    $taskId = $matches[1];
    require_once $appPath . '/controllers/tasks/DeleteTaskViewController.php';
} elseif (preg_match('#^/dashboard/tasks/(\d+)/delete$#', $uri, $matches) && $requestMethod === 'DELETE') {
    $taskId = $matches[1];
    require_once $appPath . '/controllers/tasks/DeleteTaskController.php';
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
