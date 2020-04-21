<?php

declare(strict_types=1);

namespace App\Handler;

use App\Handler\Form\AddComment;
use Mezzio\Template\TemplateRendererInterface;
use Psr\Container\ContainerInterface;

/**
 * Class XssPageFactory
 * @package App\Handler
 */
class XssPageFactory
{
    /**
     * @param ContainerInterface $container
     * @return XssPage
     */
    public function __invoke(ContainerInterface $container) : XssPage
    {
        return new XssPage(
            $container->get(TemplateRendererInterface::class),
            $container->get(AddComment::class)
        );
    }
}
