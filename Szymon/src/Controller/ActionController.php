<?php declare(strict_types=1);

namespace App\Controller;

/**
 * ActionController
 */
class ActionController
{
    public function index(): string
    {
        return 'Działa!';
    }

    public function otherMethod(): string
    {
        return 'Działa 2!';
    }
}
