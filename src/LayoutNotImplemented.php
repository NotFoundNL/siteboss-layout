<?php

namespace App\Services\AutoLayout;

use App\Services\AutoLayout\Inputs\AbstractInput;

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
