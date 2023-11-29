<?php

namespace App\Enums;

use App\Traits\HasDropdowns;

enum QRCodeStyles : string
{
    use HasDropdowns;

    case Dot = 'dot';
    case Rounded = 'rounded';

    case Square = 'square';


}
