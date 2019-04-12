<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 31.10.2018
 * Time: 06:29
 */

namespace Tests\AppBundle\Model\Generators;


use AppBundle\Model\pdo\Shutters;

class ShuttersGenerator
{

    public static function generateShutters(): array
    {
        $shutter1 = new Shutters("lamel2", 20, 30, 17);
        $shutter2 = new Shutters("lamel3", 45, 60, 19);
        $shuttersTab[0] = $shutter1;
        $shuttersTab[1] = $shutter2;
        return $shuttersTab;
    }
}