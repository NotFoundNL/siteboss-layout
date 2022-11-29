<?php

namespace App\Services\AutoLayout\Inputs;

class LayoutInputTextArea extends AbstractInput
{
    protected string $type = 'InputTextArea';

    protected string $value = '';

    public function setDescription($description): self
    {
        $this->properties->description = $description;

        return $this;
    }
}
