<?php

namespace App\Enums;

use App\Traits\HasDropdowns;

enum QRCodeTypes: string
{
    use HasDropdowns;

    case Url = 'url';
    case Email = 'email';
    case Phone = 'phone';
    case SMS = 'sms';
    case WIFI = 'wifi';
    case Geo = 'geo';
    case vCard = 'vcard';
    case MeCard = 'meCard';
    case Bitcoin = 'bitcoin';
    case Paypal = 'paypal';
    case Ethereum = 'ethereum';
    case Other = 'other';

}
