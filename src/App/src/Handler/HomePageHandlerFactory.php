<?php

declare(strict_types=1);

namespace App\Handler;

use Mezzio\Router\RouterInterface;
use Mezzio\Template\TemplateRendererInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Class HomePageHandlerFactory
 * @package App\Handler
 */
class HomePageHandlerFactory
{
    public function __invoke(ContainerInterface $container) : RequestHandlerInterface
    {

        return new HomePageHandler(
            $container->get(RouterInterface::class),
            $container->get(TemplateRendererInterface::class)
        );
    }
}
