<?php

declare(strict_types=1);

namespace App\Handler\Form;

use Laminas\Form\Form;
use Laminas\InputFilter\InputFilterProviderInterface;

/**
 * Class AddComment
 *
 * @author Israel Cyabukombe <israel.cyabu93@gmail.com>
 * @package App\Handler\Form
 */
class AddComment extends Form implements InputFilterProviderInterface
{
    public function init() : void
    {
        $this->setName('comment_form');
        $this->setAttribute('method', 'POST');

        $this->add(
            [
                'name' => 'fullName',
                'type' => 'text',
                'attributes' => [
                    'class' => 'form-control',
                ],
                'options' => [
                    'label' => 'Enter your name',
                ],
            ]
        );
        $this->add(
            [
                'name' => 'comment',
                'type' => 'textarea',
                'attributes' => [
                    'class' => 'form-control',
                ],
                'options' => [
                    'label' => 'Enter comment',
                ],
            ]
        );
        parent::init(); // TODO: Change the autogenerated stub
    }

    /**
     * @inheritDoc
     *
     * @see InputFilterProviderInterface::getInputFilterSpecification()
     */
    public function getInputFilterSpecification() : array
    {
        return [
            [
                'name' => 'name',
                'required' => 'true'
            ],
            [
                'name' => 'comment',
                'require' => 'true'
            ],

        ];
    }
}