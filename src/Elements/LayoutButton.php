<?php

namespace App\Services\AutoLayout\Elements;

class LayoutButton extends AbstractLayout
{
    public function __construct(string $title)
    {
        parent::__construct(type: 'Button');

        $this->properties->title = $title;
    }
}
