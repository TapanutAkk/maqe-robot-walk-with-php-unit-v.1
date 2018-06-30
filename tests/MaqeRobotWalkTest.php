<?php

namespace Net;

use PHPUnit\Framework\TestCase;

class MaqeRobotWalkTest extends TestCase
{

    public function testWalk_GivenWalkdingOrders1_ExpectWalkCorrect()
    {

        $walkingOrders = 'W5RW5RW2RW1R';
        $maqeRobot = new MaqeRobot($walkingOrders);
        $maqeRobotWalk = $maqeRobot->walk();
        $this->assertEquals($maqeRobotWalk, 'X: 4 Y: 3 Direction: North');

    }

    public function testWalk_GivenWalkdingOrders2_ExpectWalkCorrect()
    {

        $walkingOrders = 'RRW11RLLW19RRW12LW1';
        $maqeRobot = new MaqeRobot($walkingOrders);
        $maqeRobotWalk = $maqeRobot->walk();
        $this->assertEquals($maqeRobotWalk, 'X: 7 Y: -12 Direction: South');

    }

    public function testWalk_GivenWalkdingOrders3_ExpectWalkCorrect()
    {

        $walkingOrders = 'LLW100W50RW200W10';
        $maqeRobot = new MaqeRobot($walkingOrders);
        $maqeRobotWalk = $maqeRobot->walk();
        $this->assertEquals($maqeRobotWalk, 'X: -210 Y: -150 Direction: West');

    }

    public function testWalk_GivenWalkdingOrders4_ExpectWalkCorrect()
    {

        $walkingOrders = 'LLLLLW99RRRRRW88LLLRL';
        $maqeRobot = new MaqeRobot($walkingOrders);
        $maqeRobotWalk = $maqeRobot->walk();
        $this->assertEquals($maqeRobotWalk, 'X: -99 Y: 88 Direction: East');

    }

    public function testWalk_GivenWalkdingOrders5_ExpectWalkCorrect()
    {

        $walkingOrders = 'W55555RW555555W444444W1';
        $maqeRobot = new MaqeRobot($walkingOrders);
        $maqeRobotWalk = $maqeRobot->walk();
        $this->assertEquals($maqeRobotWalk, 'X: 1000000 Y: 55555 Direction: East');

    }

}