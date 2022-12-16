<?php

namespace NotFound\Layout\Inputs;

class LayoutInputText extends AbstractInput
{
    protected string $type = 'InputText';

    protected string $value = '';

    public function setEndpoint(string $endPoint): self
    {
        $this->properties->endPoint = $endPoint;

        return $this;
    }

    public function getAjaxDataPost(): array
    {
        return [
            'location' => 'test.jpg',
        ];
    }
}
