<?php

namespace NotFound\Layout\Elements;

class LayoutTab extends AbstractLayout
{
    public function __construct(string $title, string $link)
    {
        parent::__construct(type: 'Tab');

        $this->properties->title = $title;
        $this->properties->link = $link;
    }
}
