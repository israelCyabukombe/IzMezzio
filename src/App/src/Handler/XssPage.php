<?php

declare(strict_types=1);

namespace App\Handler;

use App\Handler\Form\AddComment;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Laminas\Diactoros\Response\HtmlResponse;
use Mezzio\Template\TemplateRendererInterface;

class XssPage implements RequestHandlerInterface
{
    /**
     * @var TemplateRendererInterface
     */
    protected $renderer;

    /**
     * @var AddComment
     */
    protected $commentForm;

    /**
     * XssPage constructor.
     *
     * @param TemplateRendererInterface $renderer
     * @param AddComment                $commentForm
     */
    public function __construct(
        TemplateRendererInterface $renderer,
        AddComment $commentForm
    ){
        $this->renderer    = $renderer;
        $this->commentForm = $commentForm;
    }

    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        // Do some work...
        // Render and return a response:
        return new HtmlResponse($this->renderer->render(
            'app::xss-page',
            [
                'title' => 'XSS Demo',
                'commentForm' => $this->commentForm,
            ] // parameters to pass to template
        ));
    }
}
