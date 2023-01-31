<?php

namespace ESHOP;

class Product
{
    protected $id;        // Object property
    protected $title;
    protected $price;
    protected $count;
    protected $userReview;

    // Constructor

    public function __construct($id, $title, $price, $count)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->count = $count;
    }

    // Seteris, tai metodas, kuris priskiria reiksmes objekto ypatybems

    public function addUserReview($review)
    {
        $this->userReview = $review;
    }

    // Geteris, tai metodas, kuris grazina objekto ypatybiu reiksmes

    public function getProduct()
    {
        return [
            $this->title,
            $this->price * $this->count,
            $this->userReview,
        ];
    }

    static public function generateProductList($data)
    {
        echo "<ul>";
        foreach ($data as $item) {
            echo "<li> $item</li>";
        }
        echo "</ul>";
    }
}
