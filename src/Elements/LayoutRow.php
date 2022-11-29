<?php

namespace NotFound\Layout\Elements;

class LayoutRow extends AbstractContainer
{
    public function __construct()
    {
        parent::__construct(type: 'Row');
    }

    public function addWidget(LayoutWidget $widget)
    {
        $this->items->add($widget->build());
    }

    public function addForm(LayoutForm $form)
    {
        $this->items->add($form->build());
    }

    public function addButton(LayoutButton $layoutButton)
    {
        $this->items->add($layoutButton->build());
    }
}
