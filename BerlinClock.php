<?php


class BerlinClock
{
    public function translateToBerlinClockTime(int $min) {
        $per1min = $this->translatePerOneMin($min);
        $per5min = $this->translatePerFiveMin($min);
        $berlinClock = [$per1min, $per5min];
        return $berlinClock;
    }

    public function translatePerOneMin(int $min) {
        $per1min = [" ", " ", " ", " "];
        $modulo = $min%5;
        for($i=0; $i<$modulo; $i++){
            $per1min[$i]= "y";
        }
        return $per1min;
    }

    public function translatePerFiveMin(int $min) {
        $per5min = [" "];
        if ($min === 5 || $min === 6) {
            $per5min = ["y"];
        }
        return $per5min;
    }
}