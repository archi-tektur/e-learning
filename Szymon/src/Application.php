<?php declare(strict_types=1);

namespace App;

use App\Service\Routing;

/**
 * Application
 */
class Application
{
    private Routing $router;

    public function __construct()
    {
        $this->router = new Routing();
    }

    /**
     * @throws Exception
     */
    public function run()
    {
        $route = $this->router->matchRoute($_SERVER['REQUEST_URI']);
        $this->router->launch($route);
    }
}
