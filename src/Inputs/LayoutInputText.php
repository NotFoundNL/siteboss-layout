<?php

namespace App\Services\AutoLayout\Inputs;

class LayoutInputText extends AbstractInput
{
    protected string $type = 'InputText';

    protected string $value = '';

    public function setDescription($description): self
    {
        $this->properties->description = $description;

        return $this;
    }
}
