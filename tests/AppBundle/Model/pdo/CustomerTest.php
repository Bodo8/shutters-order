<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 30.10.2018
 * Time: 19:34
 */

declare(strict_types=1);

namespace AppBundle\Model\pdo;

use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{

    public function testCreateCustomer()
    {
        $expectedName = "Aga";
        $custom = new Customer(1, new \DateTime()
            , "Aga", "Akacjowa 15"
            , "555 555", "mail@com");
        $actualName = $custom->getName();
        $this->assertEquals($expectedName, $actualName);

    }
}
