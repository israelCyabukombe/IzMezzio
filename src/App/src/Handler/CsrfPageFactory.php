<?php

declare(strict_types=1);

namespace App\Handler;

use Mezzio\Template\TemplateRendererInterface;
use Psr\Container\ContainerInterface;

class CsrfPageFactory
{
    public function __invoke(ContainerInterface $container) : CsrfPage
    {
        return new CsrfPage($container->get(TemplateRendererInterface::class));
    }
}
