<?php
namespace App\Core;

class Router {
    private $routes = [];

    public function add($method, $path, $controller, $controllerMethod) {
        $this->routes[] = [
            'method' => strtoupper($method), // Assure que la méthode est en majuscule (GET, POST)
            'path' => trim($path, '/'), // Retire les slashes de début et de fin
            'controller' => $controller,
            'controllerMethod' => $controllerMethod
        ];
    }

    public function run() {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        foreach ($this->routes as $route) {
            if ($route['method'] === $method) {
                // Convertir {id} en regex (\d+)
                $pattern = preg_replace('/\{([^\/]+)\}/', '(\d+)', $route['path']);

                if (preg_match("#^$pattern$#", $uri, $matches)) {
                    array_shift($matches); // Supprime l'URL complète capturée
                    $controllerClass = $route['controller'];
                    if (!class_exists($controllerClass)) {
                        throw new \Exception("Controller class $controllerClass not found.");
                    }

                    $controller = new $controllerClass();
                    $controllerMethod = $route['controllerMethod'];

                    if (!method_exists($controller, $controllerMethod)) {
                        throw new \Exception("Method $controllerMethod not found in $controllerClass.");
                    }

                    return $controller->$controllerMethod(...$matches);
                }
            }
        }

        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
        exit();
    }
}
