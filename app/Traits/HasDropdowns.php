<?php

namespace App\Traits;

trait HasDropdowns
{

    public static function getDropdownOptions(): array
    {
        return array_reduce(
            self::cases(),
            function ($carry, $case) {
                $carry[$case->value] = $case->name;
                return $carry;
            }
        );
    }
}
