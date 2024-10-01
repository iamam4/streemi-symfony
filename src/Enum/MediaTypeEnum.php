<?php

declare(strict_types=1);
namespace App\Enum;

enum MediaTypeEnum: string
{
    case IMAGE = 'image';
    case VIDEO = 'video';
    case AUDIO = 'audio';
}