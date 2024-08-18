<?php

namespace App\Enums;

enum Roles:string
{

    case ADMIN = 'admin';
    case BASIC = 'basic';
    case PREMIUM = 'premium';
}
