<?php declare(strict_types=1);

namespace App\Service;

use App\ValueObject\Route;
use Exception;

/**
 * Routing
 */
class Routing
{
    /** @var Route[] */
    private array $routes;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        $this->routes = ConfigurationLoader::load($this->getConfigPath());
    }

    private function getConfigPath(): string
    {
        return dirname(__DIR__) . '/../config/routing.json';
    }

    /**
     * @param string $path
     * @return Route|null
     * @throws Exception
     */
    public function matchRoute(string $path): Route
    {
        /** @var Route $each */
        $route = array_values(array_filter($this->routes, fn($each) => $each->getPath() === $path));


        if (count($route) < 1) {
            throw new Exception('Route not found.');
        }

        if (count($route) > 1) {
            throw new Exception('More than one route matches path.');
        }

        return $route[0];
    }

    /**
     * @param Route $route
     * @throws Exception
     */
    public function launch(Route $route): void
    {
        $controllersNamespace = '\\App\\Controller\\';
        $controllerName = $controllersNamespace . $route->getController();
        $methodName = $route->getMethod();

        if (!class_exists($controllerName)) {
            throw new Exception(sprintf('Controller class %s not found.', $controllerName));
        }

        if (!method_exists($controllerName, $methodName)) {
            throw new Exception(sprintf('Method %s in %s not found.', $methodName, $controllerName));
        }

        $instance = new $controllerName();
        echo $instance->$methodName();
    }
}
