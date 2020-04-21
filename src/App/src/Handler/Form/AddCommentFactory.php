<?php

namespace App\Handler\Form;

class AddCommentFactory
{

    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        $form  = new AddComment();
        $form->init();

        return $form;
    }

}