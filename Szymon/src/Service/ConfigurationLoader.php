<?php declare(strict_types=1);

namespace App\Service;

use App\ValueObject\Route;
use Exception;

class ConfigurationLoader
{
    /**
     * @param string $path
     * @return Route[]
     * @throws Exception
     */
    public static function load(string $path): array
    {
        if (!file_exists($path)) {
            throw new Exception('Route configuration files not found!');
        }

        $json = file_get_contents($path);
        $array = json_decode($json, true, 512, JSON_THROW_ON_ERROR);

        $routes = [];
        foreach ($array as $each) {
            $routes[] = self::createRouteFromArray($each);
        }

        return $routes;
    }

    private static function createRouteFromArray(array $array): Route
    {
        $route = new Route();
        $route->setName($array['name'])
              ->setPath($array['path'])
              ->setController($array['controller'])
              ->setMethod($array['method']);

        return $route;
    }
}
