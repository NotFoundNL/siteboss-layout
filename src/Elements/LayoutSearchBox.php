<?php

namespace App\Services\AutoLayout\Elements;

class LayoutSearchBox extends AbstractLayout
{
    public function __construct(string $placeholder)
    {
        parent::__construct(type: 'SearchBox');

        $this->properties->placeholder = $placeholder;
    }
}
