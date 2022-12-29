<?php

namespace common\helpers;

class MenuHelpers
{
    public static function academicCouncil(): array
    {
        return [
            2, 25, 26, 52, 53, 66, 67,
            68, 69, 70, 71, 179, 183, 196, 229, 233
        ];
    }

    public static function scientificAndInnovative(): array
    {
        return [
            120, 121, 123,
            124, 130,
            125, 131, 132,
            126, 127, 129
        ];
    }

    public static function spiritualAndEducational(): array
    {
        return [
            8, 9, 10, 11, 14
        ];
    }

    public static function International(): array
    {
        return [
            60, 116, 117, 119, 133, 175, 176
        ];
    }

    public static function financial(): array
    {
        return [
            51, 74, 75, 76, 77, 173, 178, 180
        ];
    }
}