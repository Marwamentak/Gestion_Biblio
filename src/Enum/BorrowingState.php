<?php

namespace App\Enum;

enum BorrowingState: string
{
    case EN_COURS = 'en cours';
    case RENDU = 'rendu';
}
