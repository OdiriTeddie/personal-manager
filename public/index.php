<?php 

// require_once __DIR__ . '/../config/database.php';


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


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
}
 else {
    http_response_code(404);
    echo '404 - Page not found';
}