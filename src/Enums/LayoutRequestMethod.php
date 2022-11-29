<?php

namespace NotFound\Layout\Enums;

enum LayoutRequestMethod: string
{
    case POST = 'POST';
    case GET = 'GET';
    case PUT = 'PUT';
    case DELETE = 'DELETE';
}
