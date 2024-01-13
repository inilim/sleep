<?php

namespace Inilim\Sleep;

class Sleep
{
    public static function seconds(int $v): void
    {
        sleep($v);
    }

    public static function rand_seconds(int $min, int $max): void
    {
        self::seconds(mt_rand($min, $max));
    }

    public static function milliseconds(int $v): void
    {
        usleep((1000 * $v));
    }

    public static function rand_milliseconds(int $min, int $max): void
    {
        self::milliseconds(mt_rand($min, $max));
    }
}
