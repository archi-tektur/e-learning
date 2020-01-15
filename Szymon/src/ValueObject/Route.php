<?php declare(strict_types=1);

namespace App\ValueObject;

/**
 * Represents each route saved in routing.json
 */
class Route
{
    private string $name;
    private string $path;
    private string $controller;
    private string $method;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Route
    {
        $this->name = $name;
        return $this;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): Route
    {
        $this->path = $path;
        return $this;
    }

    public function getController(): string
    {
        return $this->controller;
    }

    public function setController(string $controller): Route
    {
        $this->controller = $controller;
        return $this;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $index): Route
    {
        $this->method = $index;
        return $this;
    }
}
