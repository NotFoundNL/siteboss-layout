<?php

namespace App\Services\AutoLayout\Elements\Table;

/**
 * LayoutTableColumn
 *
 * Created a new header UI element for tables. Can only be added to LayoutTableRow.
 */
class LayoutTableColumn
{
    public function __construct(
        public string $value,
        public string $type = 'text',
        public object $properties = new \stdClass(),
    ) {
        return $this;
    }

    public function makeRouterButton(string $to): self
    {
        $this->type = 'InputButton';
        $this->properties->link = $to;

        return $this;
    }

    public function makeLinkButton(string $to): self
    {
        $this->type = 'InputButton';
        $this->properties->href = $to;

        return $this;
    }

    public function makeDownloadButton(string $action): self
    {
        $this->type = 'InputButton';
        $this->properties->action = $action;

        return $this;
    }
}
