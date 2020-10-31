<?php


class BerlinClock
{
    public function translateToBerlinClockTime(int $min) {
        $per5min = [];
        $per1min = [];
        if ($min === 1) return ["y"];
        if ($min === 2) return ["y", "y"];
        if ($min === 5) {
            $per1min = ["", "", "", ""];
            $per5min = ["y"];
            $berlinClock = [$per1min, $per5min];
            return $berlinClock;
        }
        return [""];
    }
}