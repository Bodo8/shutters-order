<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 30.10.2018
 * Time: 23:09
 */

namespace AppBundle\Model\dbase\impl;


use AppBundle\Model\dbase\MyDataBase;
use AppBundle\Model\pdo\Order;

class InMemory implements MyDataBase
{
    private $ordersTab = [];

    public function addOrder(Order $order)
    {
//        $idOrder = (int)$order->getId();
//        $this->ordersTab[$idOrder] = $order;
        $this->ordersTab[] = $order;
    }

    public function getAllOrder(): array
    {
        return $this->ordersTab;
    }

    public function deleteOrder(Order $order)
    {
//        $idOrder = (int)$order->getId();
//        $this->ordersTab[$idOrder];
        unset($this->ordersTab, $order);
    }
}