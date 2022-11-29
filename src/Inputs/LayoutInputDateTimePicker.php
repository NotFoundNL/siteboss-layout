<?php

namespace NotFound\Layout\Inputs;

class LayoutInputDateTimePicker extends AbstractInput
{
    protected string $type = 'InputDateTimePicker';

    protected string $value = '';

    public function setValue(mixed $value): self
    {
        $this->value = $value;

        return $this;
    }
}
