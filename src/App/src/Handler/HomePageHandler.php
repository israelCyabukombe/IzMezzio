<?php

declare(strict_types=1);

namespace App\Handler;

use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\Response\JsonResponse;
use Mezzio\LaminasView\LaminasViewRenderer;
use Mezzio\Plates\PlatesRenderer;
use Mezzio\Router;
use Mezzio\Template\TemplateRendererInterface;
use Mezzio\Twig\TwigRenderer;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Mezzio\Router\RouterInterface;

/**
 * Class HomePageHandler
 * @package App\Handler
 */
class HomePageHandler implements RequestHandlerInterface
{
    /** @var RouterInterface */
    private $router;

    /** @var TemplateRendererInterface */
    private $template;

    /**
     * HomePageHandler constructor.
     *
     * @param RouterInterface $router
     * @param TemplateRendererInterface|null $template
     */
    public function __construct(
        RouterInterface $router,
        TemplateRendererInterface $template
    ) {
        $this->router        = $router;
        $this->template      = $template;
    }
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        if ($this->template === null) {
            return new JsonResponse([
                'welcome' => 'Congratulations! You have installed the mezzio skeleton application.',
                'docsUrl' => 'https://docs.mezzio.dev/mezzio/',
            ]);
        }

        $data = [];
        $data = ['title' => 'Learn a little about Web Vulnerabilities'];
        return new HtmlResponse($this->template->render('app::home-page', $data));
    }
}
