<?php


class BerlinClock
{
    public function translateToBerlinClockTime(int $min, int $hour) {
        $per1min = $this->translatePerOneMin($min);
        $per5min = $this->translatePerFiveMin($min);
        $per1h = $this->translatePerOneHour($hour);
        $per5h = $this->translatePerFiveHour($hour);
        $berlinClock = [$per5h, $per1h, $per5min, $per1min];
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
        $per5min = [" ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " "];
        $test = floor($min / 5);
        for($i = 0; $i < $test;$i++) {
            if ($i%3 == 2) $per5min[$i] = "r";
            else $per5min[$i] = "y";
        }
        return $per5min;
    }

    public function translatePerOneHour(int $hour)
    {
        $per1hour = [" ", " ", " ", " "];
        $modulo = $hour%5;
        for ($i = 0; $i < $modulo; $i++) {
            $per1hour[$i] = "r";
        }
        return $per1hour;
    }

    public function translatePerFiveHour(int $hour) {
        if ($hour === 5 || $hour === 6) return ["r"];
        if ($hour === 10) return ["r", "r"];

    }
}