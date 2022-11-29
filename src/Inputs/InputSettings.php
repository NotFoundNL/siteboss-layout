<?php

namespace App\Services\AutoLayout\Inputs;

class InputSettings
{
    public static function getTypes(): array
    {
        return [
            'checkbox' => 'Checkbox',
            'text' => 'Text',
            'email' => 'Email',
        ];
    }
}
