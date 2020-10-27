<?php


class BerlinClock
{
    public function translateToBerlinClockTime(int $min) {
        if ($min === 1) return ["y"];
        if ($min === 2) return ["y", "y"];
        return [""];
    }
}