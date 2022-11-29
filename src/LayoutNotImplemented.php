<?php

namespace NotFound\Layout;

use NotFound\Layout\Inputs\AbstractInput;

class LayoutNotImplemented extends AbstractInput
{
    protected string $type = 'NotImplemented';

    protected string $value = '';

    protected bool $useDefaultStorageMechanism = false;

    public function setOriginalType(string $type): self
    {
        $this->properties->type = $type;

        return $this;
    }
}
