<?php

namespace NotFound\Layout\Elements;

class LayoutPager extends AbstractLayout
{
    public function __construct(int $totalItems)
    {
        parent::__construct(type: 'Pager');

        $this->properties->totalItems = $totalItems;
    }
}
