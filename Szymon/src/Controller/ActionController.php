<?php declare(strict_types=1);

namespace App\Controller;

/**
 * ActionController
 */
class ActionController extends AbstractController
{
    public function index(): string
    {
        return $this->render('index.html.twig', ['title' => 'Jakiś tytuł', 'content' => 'treść']);
    }

    public function otherMethod(): string
    {
        return 'Działa 2!';
    }
}
