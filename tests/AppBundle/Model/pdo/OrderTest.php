<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 30.10.2018
 * Time: 19:41
 */

declare(strict_types=1);

namespace AppBundle\Model\pdo;

use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{

    public function testCreateShutters()
    {
        $expectedAmount = 562;
        $shutter1 = new Shutters("lamel2", 20, 30, 17);
        $shutter2 = new Shutters("lamel3", 45, 60, 19);
        $shuttersTab[0] = $shutter1;
        $shuttersTab[1] = $shutter2;

        $customer = new Customer(1, new \DateTime()
            , "Aga", "Akacjowa 15"
            , "555 555", "mail@com");

        $order = new Order(1, new \DateTime(), $customer, $shuttersTab
            , 5, 562, "brak", "nowe");
        echo $order;
        $actualAmount = $order->getAmount();
        $this->assertEquals($expectedAmount, $actualAmount);

    }
}
