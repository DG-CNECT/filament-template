<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum SystemStatus: string implements HasLabel
{
    case ON_MARKET = "on_market";
    case IN_SERVICE = "in_service";
    case OUT_OF_SERVICE = "out_of_service";
    case RECALLED = "recalled";

    public function getLabel(): ?string
    {

        return match ($this) {
            self::ON_MARKET => 'On Market',
            self::IN_SERVICE => 'In Service',
            self::OUT_OF_SERVICE => 'Out of Service',
            self::RECALLED => 'Recalled',
        };
    }
}
