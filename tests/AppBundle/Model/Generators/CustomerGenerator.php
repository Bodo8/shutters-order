<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 31.10.2018
 * Time: 06:25
 */

namespace Tests\AppBundle\Model\Generators;


use AppBundle\Model\pdo\Customer;

class CustomerGenerator
{
    public static function generateCustomers(): Customer
    {
        return $customer = new Customer(1, new \DateTime()
            , "Aga", "Akacjowa 15"
            , "555 555", "mail@com");
    }

}