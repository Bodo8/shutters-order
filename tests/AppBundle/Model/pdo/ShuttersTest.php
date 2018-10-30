<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 30.10.2018
 * Time: 19:38
 */

namespace AppBundle\Model\pdo;

use PHPUnit\Framework\TestCase;

class ShuttersTest extends TestCase
{

    public function testCreateShutters()
    {
        $expectedName = "lamel2";
        $shutter1 = new Shutters("lamel2", 20, 30, 17);
        $actualName = $shutter1->getName();
        $this->assertEquals($expectedName, $actualName);

    }
}
