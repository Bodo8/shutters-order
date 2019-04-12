<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 31.10.2018
 * Time: 06:32
 */

namespace Tests\AppBundle\Model\Generators;


use AppBundle\Model\pdo\Order;

class OrderGenerator
{
    public static function generateOneOrder()
    {
        $shutters = ShuttersGenerator::generateShutters();
        $customer = CustomerGenerator::generateCustomers();
        $order = new Order(1, new \DateTime(), $customer, $shutters
            , 2, 254, "no", "new");
        return $order;
    }

}