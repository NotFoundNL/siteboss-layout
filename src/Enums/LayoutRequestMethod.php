<?php

namespace App\Services\AutoLayout\Enums;

enum LayoutRequestMethod: string
{
    case POST = 'POST';
    case GET = 'GET';
    case PUT = 'PUT';
    case DELETE = 'DELETE';
}
