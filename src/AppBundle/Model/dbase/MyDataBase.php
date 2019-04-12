<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 30.10.2018
 * Time: 23:07
 */

namespace AppBundle\Model\dbase;


use AppBundle\Model\pdo\Order;

interface MyDataBase
{
    public function addOrder(Order $order);

    public function getAllOrder();

    public function deleteOrder(Order $order);

}