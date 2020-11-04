<?php


class BerlinClock
{
    public function translateToBerlinClockTime(int $min, int $hour) {
        $per1min = $this->translatePerOneMin($min);
        $per5min = $this->translatePerFiveMin($min);
        $per1h = $this->translatePerOneHour($hour);
        $berlinClock = [$per1min, $per5min, $per1h];
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

    public function translatePerOneHour(int $hour){
        if($hour === 1) return ["r"];
    }
}