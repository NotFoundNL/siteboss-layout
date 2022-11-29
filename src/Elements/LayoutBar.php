<?php

namespace App\Services\AutoLayout\Elements;

class LayoutBar extends AbstractContainer
{
    public function __construct()
    {
        parent::__construct(type: 'Bar');
    }

    public function addBarButton(LayoutBarButton $btn)
    {
        $this->items->add($btn->build());
    }

    public function addPager(LayoutPager $pager)
    {
        $this->items->add($pager->build());
    }

    public function addSearchBox(LayoutSearchBox $searchBox)
    {
        $this->items->add($searchBox->build());
    }

    public function addText(LayoutText $text)
    {
        $this->items->add($text->build());
    }
}
