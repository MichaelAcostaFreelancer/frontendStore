<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = trim($uri, '/');
$file = $uri === '' ? 'index' : $uri;
$path = __DIR__ . '/../' . $file . '.php';

// Cambiar el directorio de trabajo a la raíz del proyecto
// para que los includes relativos sigan funcionando igual
chdir(__DIR__ . '/..');

if (file_exists($path)) {
    require $path;
} else {
    http_response_code(404);
    echo '404 Not Found';
}