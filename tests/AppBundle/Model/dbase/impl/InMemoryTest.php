<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 31.10.2018
 * Time: 06:22
 */

namespace AppBundle\Model\dbase\impl;

use PHPUnit\Framework\TestCase;
use Tests\AppBundle\Model\Generators\OrderGenerator;

class InMemoryTest extends TestCase
{
    private $order;
    private $inMemory;

    public function setUp()
    {
        $this->inMemory = new InMemory();
        $this->order = OrderGenerator::generateOneOrder();
    }

    public function testDeleteOrder()
    {
        $actualSize = (int)0;

    }

    public function testAddOrder()
    {
        $expectedOrder = $this->order;
        $inMemoryTest = $this->inMemory;
        $inMemoryTest->addOrder($expectedOrder);
        $ordersTab = $inMemoryTest->getAllOrder();
        $actualOrder = $ordersTab[0];
        $this->assertEquals($expectedOrder, $actualOrder);


    }

    public function testGetAllOrder()
    {

    }
}
