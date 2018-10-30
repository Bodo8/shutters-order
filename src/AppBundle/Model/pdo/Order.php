<?php
/**
 * Created by PhpStorm.
 * User: btroj
 * Date: 30.10.2018
 * Time: 19:32
 */

namespace AppBundle\Model\pdo;


class Order
{

    private $id;
    private $date;
    private $customer;
    private $shutters;
    private $amount;
    private $paymentStatus;
    private $completedStatus;

    /**
     * Order constructor.
     * @param $id - id of the order.
     * @param $date - date.
     * @param $customer - consumer data from the Consumer.class.
     * @param array $shutters -
     * @param $amount
     * @param $paymentStatus
     * @param $completedStatus
     */
    public function __construct(int $id, \DateTime $date, Customer $customer,
                                array $shutters, float $amount,
                                string $paymentStatus, string $completedStatus)
    {
        $this->id = $id;
        $this->date = $date;
        $this->customer = $customer;
        $this->shutters = $shutters;
        $this->amount = $amount;
        $this->paymentStatus = $paymentStatus;
        $this->completedStatus = $completedStatus;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    public function getShutters(): array
    {
        return $this->shutters;
    }

    public function setShutters(array $shutters): void
    {
        $this->shutters = $shutters;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function getPaymentStatus(): string
    {
        return $this->paymentStatus;
    }

    public function setPaymentStatus(string $paymentStatus): void
    {
        $this->paymentStatus = $paymentStatus;
    }

    public function getCompletedStatus(): string
    {
        return $this->completedStatus;
    }

    public function setCompletedStatus(string $completedStatus): void
    {
        $this->completedStatus = $completedStatus;
    }

    public function __toString()
    {
        $description = "( id: " . $this->getId();
        $description .= ", date: " . $this->getDate()->format("Y-m-d H:i:s");
        $description .= ", customer: " . $this->getCustomer();
        foreach ($this->getShutters() as $key => $shutter) {
            $description .= ", shutters: " . $shutter;
        }
        $description .= ", amount: " . $this->getAmount();
        $description .= ", payment status: " . $this->getPaymentStatus();
        $description .= ", completed status " . $this->getCompletedStatus();
        return $description;
    }
}
