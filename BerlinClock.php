<?php


class BerlinClock
{
    public function translateToBerlinClockTime(int $min) {
        $per5min = [];
        $per1min = $this->translatePerOneMin($min);
        if ($min === 5) {
            $per5min = ["y"];
        }
        $berlinClock = [$per1min, $per5min];
        return $berlinClock;
    }

    public function translatePerOneMin(int $min) {
        $per1min = [" ", " ", " ", " "];
        if ($min === 1) $per1min = ["y", " ", " ", " "];
        if ($min === 2) $per1min =  ["y", "y", " ", " "];
        return $per1min;
    }
}