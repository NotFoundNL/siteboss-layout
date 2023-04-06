<?php

namespace NotFound\Layout\Inputs;

class LayoutInputSlider extends AbstractInput
{
    protected string $type = 'InputSlider';

    protected string $value = '';

    public function setMin(int $min): self
    {
        $this->properties->minValue = $min;

        return $this;
    }

    public function setMax(int $max): self
    {
        $this->properties->maxValue = $max;

        return $this;
    }
}
