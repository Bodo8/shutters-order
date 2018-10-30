<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 30.10.2018
 * Time: 19:31
 */

namespace AppBundle\Model\pdo;


class Shutters
{

    private $name;
    private $sideA;
    private $sideB;
    private $price;

    /**
     * Shutters constructor.
     * @param $name - name of the type of window shutter.
     * @param $sideA - length of the first side of the shutter in millimeters
     * @param $sideB - length of the second side of the shutter in millimeters.
     * @param $price - price per square meter of window shutter.
     */
    public function __construct($name, $sideA, $sideB, $price)
    {
        $this->name = $name;
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getSideA(): int
    {
        return $this->sideA;
    }

    public function setSideA($sideA): void
    {
        $this->sideA = $sideA;
    }

    public function getSideB(): int
    {
        return $this->sideB;
    }


    public function setSideB($sideB): void
    {
        $this->sideB = $sideB;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function __toString()
    {
        $description = "( name: " . $this->getName() . ", ";
        $description .= "sideA: " . $this->getSideA() . ", ";
        $description .= "sideB: " . $this->getSideB() . ", ";
        $description .= "price: " . $this->getPrice() . ") ";
        return $description;
    }


}

$shutters = new Shutters("lamel", 20,
    50, 30);
echo $shutters;
