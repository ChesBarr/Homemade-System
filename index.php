<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$routes = require __DIR__ . '/routes/web.php';
    
if (isset($routes[$uri])) {
  require __DIR__ . '/' . $routes[$uri];
} else {
  http_response_code(404);
  echo "404 - Page Not Found";
}
