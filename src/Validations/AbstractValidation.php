<?php

namespace NotFound\Layout\Validations;

use App\Services\Assets\Components\AbstractComponent;

abstract class AbstractValidation
{
    public function __construct(
        protected AbstractComponent $input,
    ) {
    }

    abstract public function validate($newValue);
}
