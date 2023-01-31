<?php
namespace ESHOP;

class Food extends Product{
    private $vitamins;
    private $valid;

    public function __construct($id, $title, $price, $count, $vitamins, $valid)
    {
        parent::__construct($id, $title, $price, $count);

        $this->vitamins=$vitamins;
        $this->valid=$valid;     
    }

    public function getProduct()
    {
        $data = parent::getProduct();
        $data[]=$this->vitamins;
        $data[]=$this->valid;

        return $data;
    }
}