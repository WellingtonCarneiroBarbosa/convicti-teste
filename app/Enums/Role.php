<?php

namespace App\Enums;

enum Role: string
{
    case MAIN_DIRECTOR_ROLE = 'MAIN_DIRECTOR';
    case SUB_DIRECTOR_ROLE  = 'SUB_DIRECTOR';
    case MANAGER_ROLE       = 'MANAGER';
    case SELLER_ROLE        = 'SELLER';
}
