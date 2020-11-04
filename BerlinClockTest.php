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
        $expectedTable = ["y", " ", " ", " ", " ", " ", " ", " ", " ", " ", " "];

        $actualTable = $this->berlinClock->translatePerFiveMin(5);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerFiveMin_Given6minShouldReturn1LittleYellowLightOn(){
        $expectedTable = ["y", " ", " ", " ", " ", " ", " ", " ", " ", " ", " "];

        $actualTable = $this->berlinClock->translatePerFiveMin(6);

        $this->assertEquals($expectedTable, $actualTable);

    }

    public function testTranslatePerOneMin_Given6minShouldReturn1LittleYellowLightOn(){
        $expectedTable = ["y", " ", " ", " "];

        $actualTable = $this->berlinClock->translatePerOneMin(6);

        $this->assertEquals($expectedTable, $actualTable);

    }

    public function testTranslatePerFiveMin_Given10minShouldReturn2LittleYellowLightsOn() {
        $expectedTable = ["y", "y", " ", " ", " ", " ", " ", " ", " ", " ", " "];

        $actualTable = $this->berlinClock->translatePerFiveMin(10);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerFiveMin_Given15minShouldReturn2LittleYellowAnd1littleRedLightsOn() {
        $expectedTable = ["y", "y", "r", " ", " ", " ", " ", " ", " ", " ", " "];

        $actualTable = $this->berlinClock->translatePerFiveMin(15);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerFiveMin_Given30minShouldReturn4LittleYellowAnd2LittleRedLightsOn() {
        $expectedTable = ["y", "y", "r", "y", "y", "r", " ", " ", " ", " ", " "];

        $actualTable = $this->berlinClock->translatePerFiveMin(30);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerFiveMin_Given55minShouldReturn8LittleYellowAnd3LittleRedLightsOn(){
        $expectedTable = ["y", "y", "r", "y", "y", "r", "y", "y", "r", "y", "y"];

        $actualTable = $this->berlinClock->translatePerFiveMin(55);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerFiveMin_Given59minShouldReturn8LittleYellowAnd3LittleRedLightsOn(){
        $expectedTable = ["y", "y", "r", "y", "y", "r", "y", "y", "r", "y", "y"];

        $actualTable = $this->berlinClock->translatePerFiveMin(59);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerOneHour_Given1hShouldReturn1LowRedLightOn(){
        $expectedTable = ["r", " ", " ", " "];

        $actualTable = $this->berlinClock->translatePerOneHour(1);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePeOneHour_Given2hShouldReturn2LowRedLightsOn() {
        $expectedTable = ["r", "r", " ", " "];

        $actualTable = $this->berlinClock->translatePerOneHour(2);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerOneHour_Given4hShouldReturn4LowRedLightsOn() {
        $expectedTable = ["r", "r", "r", "r"];

        $actualTable = $this->berlinClock->translatePerOneHour(4);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerFiveHour_Given5hShouldReturn1HighRedLightOn() {
        $expectedTable = ["r", " ", " ", " "];

        $actualTable = $this->berlinClock->translatePerFiveHour(5);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerFiveHour_Given6hShouldReturn1HighRedLightOn() {
        $expectedTable = ["r", " ", " ", " "];

        $actualTable = $this->berlinClock->translatePerFiveHour(6);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerOneHour_Given6hShouldReturn1LowRedLightOn() {
        $expectedTable = ["r", " ", " ", " "];

        $actualTable = $this->berlinClock->translatePerOneHour(6);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerFiveHour_Given10hShouldReturn2HighRedLightsOn() {
        $expectedTable = ["r", "r", " ", " "];

        $actualTable = $this->berlinClock->translatePerFiveHour(10);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerFiveHour_Given20hShouldReturn4HighRedLightsOn() {
        $expectedTable = ["r", "r", "r", "r"];

        $actualTable = $this->berlinClock->translatePerFiveHour(20);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslatePerFiveHour_Given23hShouldReturn4HighRedLightsOn() {
        $expectedTable = ["r", "r", "r", "r"];

        $actualTable = $this->berlinClock->translatePerFiveHour(23);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslateSeconds_Given1sShouldReturnRedLightOff() {
        $expectedTable = [" "];

        $actualTable = $this->berlinClock->translateSeconds(1);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslateSeconds_Given2sShouldReturnRedLightOn() {
        $expectedTable = ["r"];

        $actualTable = $this->berlinClock->translateSeconds(2);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslateSeconds_Given3sShouldReturnRedLightOn() {
        $expectedTable = [" "];

        $actualTable = $this->berlinClock->translateSeconds(3);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslateToBerlinClockTime_Given0h0min0sShouldReturnAllLightsOff() {
        $seconds = ["r "];
        $per5h = [" ", " ", " ", " "];
        $per1h = [" ", " ", " ", " "];
        $per5min = [" ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " "];
        $per1min = [" ", " ", " ", " "];
        $expectedTable = [$seconds, $per5h, $per1h, $per5min, $per1min];

        $actualTable = $this->berlinClock->translateToBerlinClockTime(0,0,0);

        $this->assertEquals($expectedTable, $actualTable);
    }

}
