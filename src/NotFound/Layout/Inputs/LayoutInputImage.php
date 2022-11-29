<?php

namespace NotFound\Layout\Inputs;

class LayoutInputImage extends AbstractInput
{
    protected string $type = 'InputImage';

    protected ?object $value;

    public function setValue($value): self
    {
        if (!is_object($value)) {
            $this->abortLogSetValueError('LayoutInputImage', 'object', $value);
        }
        $this->value = $value;

        return $this;
    }
}
