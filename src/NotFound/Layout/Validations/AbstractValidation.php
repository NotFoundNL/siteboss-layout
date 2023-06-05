<?php

namespace NotFound\Layout\Validations;

abstract class AbstractValidation
{
    public function __construct(
        protected $input,
    ) {
    }

    abstract public function validate($newValue);
}
