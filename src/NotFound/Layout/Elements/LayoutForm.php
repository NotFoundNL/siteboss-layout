<?php

namespace NotFound\Layout\Elements;

use NotFound\Layout\Enums\LayoutRequestMethod;
use NotFound\Layout\Inputs\AbstractInput;

/**
 * LayoutForm
 */
class LayoutForm extends AbstractContainer
{
    public function __construct(string $url)
    {
        parent::__construct(type: 'Form');

        $this->properties->url = $url;
        $this->properties->method = LayoutRequestMethod::POST;
    }

    public function setMethod(LayoutRequestMethod $method)
    {
        $this->properties->method = $method;
    }

    public function addButton(LayoutButton $btn)
    {
        $this->items->add($btn->build());
    }

    public function addText(LayoutText $text)
    {
        $this->items->add($text->build());
    }

    public function addInput(AbstractInput $input): void
    {
        $this->items->add($input->build());
    }

    public function addTitle(LayoutTitle $title)
    {
        $title->setSize(4);
        $title->setUnderline();
        $this->items->add($title->build());
    }

    // TODO: think of better solution some time
    public function addComponent($component): void
    {
        $this->items->add($component->buildAutoLayoutClass());
    }
}
