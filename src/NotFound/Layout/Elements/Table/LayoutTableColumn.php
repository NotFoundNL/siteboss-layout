<?php

namespace NotFound\Layout\Elements\Table;

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

    public function makeLinkButton(string $to, $external = false): self
    {
        $this->type = 'InputButton';
        $this->properties->link = $to;
        $this->properties->external = $external;

        return $this;
    }

    public function makeDownloadButton(string $action): self
    {
        $this->type = 'InputButton';
        $this->properties->action = $action;

        return $this;
    }
}
