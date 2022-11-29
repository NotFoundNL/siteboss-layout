<?php

namespace App\Services\AutoLayout\Elements;

/**
 * Creates a new layout element. Layout elements are all UI
 * elements possible in the Nuxt frontend.
 */
abstract class AbstractLayout
{
    public function __construct(
        public object $properties = new \stdClass(),
        protected string $type = '',
    ) {
    }

    public function type(): string
    {
        return $this->type;
    }

    public function build(): object
    {
        return (object) [
            'type' => $this->type,
            'properties' => $this->properties,
        ];
    }
}
