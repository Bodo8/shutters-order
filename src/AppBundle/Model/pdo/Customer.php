<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 30.10.2018
 * Time: 19:28
 */

namespace AppBundle\Model\pdo;


class Customer
{
    private $idCustomer;
    private $date;
    private $name;
    private $address;
    private $telephone;
    private $mail;

    /**
     * Customer constructor.
     * @param $idCustomer - id consumer.
     * @param $date - date.
     * @param $name - name of the consumer.
     * @param $address - address of the consumer.
     * @param $telephone - telephone of the consumer.
     * @param $mail - mail of the consumer.
     */
    public function __construct(int $idCustomer, \DateTime $date, string $name, $address, string $telephone, string $mail)
    {
        $this->idCustomer = $idCustomer;
        $this->date = $date;
        $this->name = $name;
        $this->address = $address;
        $this->telephone = $telephone;
        $this->mail = $mail;
    }

    public function getIdCustomer(): int
    {
        return $this->idCustomer;
    }

    public function setIdCustomer(int $idCustomer): void
    {
        $this->idCustomer = $idCustomer;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address): void
    {
        $this->address = $address;
    }

    public function getTelephone(): string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    public function getMail(): string
    {
        return $this->mail;
    }

    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    public function __toString()
    {
        $description = "( id: " . $this->getIdCustomer();
        $description .= ", date: " . $this->getDate()->format("Y-m-d H:i:s");
        $description .= ", name: " . $this->getName();
        $description .= ", address: " . $this->getAddress();
        $description .= ", telephone: " . $this->getTelephone();
        $description .= ", mail: " . $this->getMail();
        return $description;
    }

}

$custom = new Customer(1, new \DateTime()
    , "Aga", "Akacjowa 15"
    , "555 555", "mail@com");

echo($custom);
