<?php

require 'vendor/autoload.php';
require 'BerlinClock.php';
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{
    public function testTranslateToBerlinClockTimeGiven0minShouldReturnLightsOff() {
        $berlinClock = new BerlinClock();
        $expectedTable = [""];

        $actualTable = $berlinClock->translateToBerlinClockTime(0);

        $this->assertEquals($expectedTable, $actualTable);
    }
}
