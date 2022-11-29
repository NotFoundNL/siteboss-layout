<?php

namespace App\Services\AutoLayout\Elements;

class LayoutTabs extends AbstractContainer
{
    public function __construct()
    {
        parent::__construct(type: 'Tabs');
        $this->properties->padding = false;
    }

    public function addPadding()
    {
        $this->properties->padding = true;
    }

    public function addTab(LayoutTab $tab)
    {
        $this->items->add($tab->build());

        return $this;
    }
}
