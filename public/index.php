<?php 

session_start();

// require_once __DIR__ . '/../config/database.php';


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod === 'POST' && isset($_POST['_method'])){
    $requestMethod = strtoupper($_POST['_method']);
}


if($uri === '/'){
    require_once __DIR__ . '/../app/views/home.php';
} elseif($uri === '/register' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    require_once __DIR__ . '/../app/views/auth/register.php';
}elseif($uri === '/register' && $_SERVER['REQUEST_METHOD'] === 'POST'){
 require_once __DIR__ . '/../app/controllers/RegisterController.php';
}elseif($uri === '/login' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    require_once __DIR__ . '/../app/views/auth/login.php';
}elseif($uri === '/login' && $_SERVER['REQUEST_METHOD'] === 'POST'){
 require_once __DIR__ . '/../app/controllers/LoginController.php';
} elseif($uri === '/dashboard'){
    require_once __DIR__ . '/../app/views/dashboard.php';
} elseif($uri === '/dashboard/tasks'){
    require_once __DIR__ . '/../app/controllers/tasks/TaskIndexController.php';
} elseif($uri === '/dashboard/tasks/create' && $_SERVER['REQUEST_METHOD'] === 'GET'){
    require_once __DIR__ . '/../app/views/tasks/create.php';
} elseif($uri === '/dashboard/tasks/create' && $_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once __DIR__ . '/../app/controllers/tasks/CreateTaskController.php';
} elseif(preg_match('#^/dashboard/tasks/(\d+)/edit$#', $uri, $matches) && $_SERVER['REQUEST_METHOD'] === 'GET'){
    $taskId = $matches[1];
    require_once __DIR__ . '/../app/views/tasks/edit.php';
} elseif(preg_match('#^/dashboard/tasks/(\d+)/edit$#', $uri, $matches) && $requestMethod === 'PATCH'){
    $taskId = $matches[1];
    require_once __DIR__ . '/../app/controllers/tasks/UpdateTaskController.php';
}  elseif(preg_match('#^/dashboard/tasks/(\d+)/delete$#', $uri, $matches) && $_SERVER['REQUEST_METHOD'] === 'GET'){
    $taskId = $matches[1];
    require_once __DIR__ . '/../app/controllers/tasks/DeleteTaskViewController.php';
}elseif(preg_match('#^/dashboard/tasks/(\d+)/delete$#', $uri, $matches) && $requestMethod === 'DELETE'){
    $taskId = $matches[1];
    require_once __DIR__ . '/../app/controllers/tasks/DeleteTaskController.php';
} elseif($uri === '/dashboard/notes'){
    require_once __DIR__ . '/../app/views/notes/index.php';
} elseif($uri === '/dashboard/notes/create'){
    require_once __DIR__ . '/../app/views/notes/create.php';
} elseif($uri === '/dashboard/notes/edit'){
    require_once __DIR__ . '/../app/views/notes/edit.php';
} elseif($uri === '/dashboard/notes/show'){
    require_once __DIR__ . '/../app/views/notes/show.php';
} elseif($uri === '/dashboard/notes/delete'){
    require_once __DIR__ . '/../app/views/notes/delete.php';
} elseif($uri === '/dashboard/categories'){
    require_once __DIR__ . '/../app/views/categories/index.php';
} elseif($uri === '/dashboard/settings'){
    require_once __DIR__ . '/../app/views/settings/index.php';
}else {
    http_response_code(404);
    echo '404 - Page not found';
}
