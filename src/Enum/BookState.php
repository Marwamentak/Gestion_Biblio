<?php

namespace App\Enum;

enum BookState: string
{
    case DISPONIBLE = 'disponible';
    case EMPRUNTE = 'emprunté';
}
