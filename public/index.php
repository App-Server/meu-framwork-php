<?php
require_once __DIR__ . '/../vendor/autoload.php';

// 1. Carrega as variáveis do .env primeiro de tudo
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// 2. Configura a exibição de erros baseada no .env
if (($_ENV['APP_DEBUG'] ?? 'false') === 'true') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
}

// 3. Carrega as rotas e a lógica do App
$routes = require_once __DIR__ . '/../routes/web.php';

// Captura a URL (ajustado para aceitar tanto local quanto Railway/Apache)
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = ($url !== '/') ? rtrim($url, '/') : '/';

if (array_key_exists($url, $routes)) {
    [$controllerName, $method] = explode('@', $routes[$url]);
    $controllerClass = "App\\Controllers\\" . $controllerName;

    if (class_exists($controllerClass)) {
        $controller = new $controllerClass();
        $controller->$method();
    } else {
        die("Erro: Classe $controllerClass não encontrada.");
    }
} else {
    http_response_code(404);
    echo "Página não encontrada (404)";
}