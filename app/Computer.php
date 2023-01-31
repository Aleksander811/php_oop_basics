<?php


namespace ESHOP;

class Computer extends Product
{
    private $CPU;
    private $RAM;
    private $HDD;

    public function __construct($id, $title, $price, $count, $CPU, $RAM, $HDD)
    {
        parent::__construct($id, $title, $price, $count);

        $this->CPU = $CPU;
        $this->RAM = $RAM;
        $this->HDD = $HDD;
    }
    public function getProduct()
    {
        $data = parent::getProduct();
        $data[] = $this->CPU;
        $data[] = $this->RAM;
        $data[] = $this->HDD;

        return $data;
    }
}
