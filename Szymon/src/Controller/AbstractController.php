<?php declare(strict_types=1);

namespace App\Controller;

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

/**
 * AbstractController
 */
class AbstractController
{
    private Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader($this->getTemplatePaths());
        $this->twig = new Environment($loader);
    }

    /**
     * @param string $templateName
     * @param array  $variables
     * @return string
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function render(string $templateName, array $variables): string
    {
        $template = $this->twig->load($templateName);
        return $template->render($variables);
    }

    private function getTemplatePaths(): string
    {
        return dirname(__DIR__) . '/../templates';
    }
}
