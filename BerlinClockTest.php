<?php

require 'vendor/autoload.php';
require 'BerlinClock.php';
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    private $berlinClock;

    public function setUp(): void
    {
        $this->berlinClock = new BerlinClock();
    }

    public function testTranslatePerOneMin_Given0minShouldReturnLightsOff() {
        $expectedTable = [" ", " ", " ", " "];

        $actualTable = $this->berlinClock->translatePerOneMin(0);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerOneMin_Given1minShouldReturnFirstLightOn(){
        $expectedTable = ["y", " ", " ", " "];

        $actualTable = $this->berlinClock->translatePerOneMin(1);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerOneMin_Given2minShouldReturn2LightsOn() {
        $expectedTable = ["y", "y", " ", " "];

        $actualTable = $this->berlinClock->translatePerOneMin(2);

        $this->assertEquals($expectedTable, $actualTable);
    }




    public function testTranslatePerFiveMin_Given5minShouldReturn1littleYellowLightOn() {
        $expectedTable = ["y"];

        $actualTable = $this->berlinClock->translatePerFiveMin(5);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerFiveMin_Given6minShouldReturn1LittleYellowLightOn(){
        $expectedTable = ["y"];

        $actualTable = $this->berlinClock->translatePerFiveMin(6);

        $this->assertEquals($expectedTable, $actualTable);

    }

    public function testTranslatePerOneMin_Given6minShouldReturn1LittleYellowLightOn(){
        $expectedTable = ["y", " ", " ", " "];

        $actualTable = $this->berlinClock->translatePerOneMin(6);

        $this->assertEquals($expectedTable, $actualTable);

    }

    public function testTranslatePerFiveMin_Given10minShouldReturn2LittleYellowLightsOn() {
        $expectedTable = ["y", "y"];

        $actualTable = $this->berlinClock->translatePerFiveMin(10);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerFiveMin_Given15minShouldReturn2LittleYellowAnd1littleRedLightsOn() {
        $expectedTable = ["y", "y", "r"];

        $actualTable = $this->berlinClock->translatePerFiveMin(15);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerFiveMin_Given30minShouldReturn4LittleYellowAnd2LittleRedLightsOn() {
        $expectedTable = ["y", "y", "r", "y", "y", "r"];

        $actualTable = $this->berlinClock->translatePerFiveMin(30);

        $this->assertEquals($expectedTable, $actualTable);
    }

}
