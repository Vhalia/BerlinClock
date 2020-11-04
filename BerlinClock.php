<?php


class BerlinClock
{
    /**
     * @param DateTime $date hh:mm:ss
     * @return 2d array of lights
     */
    public function translateToBerlinClockTime(DateTime $date) {
        $dateTime = $date->format("H:i:s");
        $hour = substr($dateTime, 0, 2);
        $min = substr($dateTime, 3, 2);
        $sec = substr($dateTime, 6, 2);
        $per1min = $this->translatePerOneMin($min);
        $per5min = $this->translatePerFiveMin($min);
        $per1h = $this->translatePerOneHour($hour);
        $per5h = $this->translatePerFiveHour($hour);
        $sec = $this->translateSeconds($sec);
        $berlinClock = [$sec, $per5h, $per1h, $per5min, $per1min];
        $this->displayBerlinClockTime($berlinClock);
        return $berlinClock;
    }

    public function displayBerlinClockTime($berlinClock) {
        for($i = 0 ; $i < sizeof($berlinClock); $i++) {
            print "\n";
            for($j = 0; $j < sizeof($berlinClock[$i]); $j++) {
                print ($berlinClock[$i][$j]);
            }
        }
    }

    public function translatePerOneMin(int $min) {
        $per1min = ["O", "O", "O", "O"];
        $modulo = $min%5;
        for($i=0; $i<$modulo; $i++){
            $per1min[$i]= "y";
        }
        return $per1min;
    }

    public function translatePerFiveMin(int $min) {
        $per5min = ["O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O"];
        $test = floor($min / 5);
        for($i = 0; $i < $test;$i++) {
            if ($i%3 == 2) $per5min[$i] = "r";
            else $per5min[$i] = "y";
        }
        return $per5min;
    }

    public function translatePerOneHour(int $hour)
    {
        $per1h = ["O", "O", "O", "O"];
        $modulo = $hour%5;
        for ($i = 0; $i < $modulo; $i++) {
            $per1h[$i] = "r";
        }
        return $per1h;
    }

    public function translatePerFiveHour(int $hour) {
        $per5h = ["O", "O", "O", "O"];
        $test = floor($hour/5);
        for($i =0; $i< $test; $i++){
            $per5h[$i] = "r";
        }
        return $per5h;
    }

    public function translateSeconds(int $sec){
        if($sec%2 != 0) return ["O"];
        else return ["r"];
    }
}