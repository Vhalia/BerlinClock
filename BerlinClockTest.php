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

    public function testTranslateToBerlinClockTime_Given0minShouldReturnLightsOff() {
        $expectedTable = [""];

        $actualTable = $this->berlinClock->translateToBerlinClockTime(0);

        $this->assertEquals($expectedTable, $actualTable);
    }

    public function testTranslateToBerlinClock_Given1minShouldReturnFirstLightOn(){
        $expectedTable = ["y"];

        $actualTable = $this->berlinClock->translateToBerlinClockTime(1);

        $this->assertEquals($expectedTable, $actualTable);
    }



}
