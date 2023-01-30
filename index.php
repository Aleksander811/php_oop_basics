<?php

class User{
    public $name;              // Object property
    public $email;
    public $role;


// Seteris tai metodas, kuris priskiria reiksmes objekto ypatybems

public function addUserInfo($name, $email, $role){   // Seteris
    $this->name = $name;
    $this->email = $email;
    $this->role = $role;
}

// Geteris tai metodas, kuris grazina objekto ypatybiu reiksmes

public function getUserInfo(){   // Geteris
    return [
        $this->name,
        $this->email,
        $this->role
    ];
}

}
// #1 object
$userOne = new User();         // New object instance
$userOne->addUserInfo('John', 'john@hotmail.com', 'admin'); // cia yra budas kaip galima prideti vienoje eiluteje
var_dump($userOne);


// #2 object
$userTwo = new User();         // New object instance
$userTwo->name = "Karolis";    // Property value
$userTwo->email = "karolis@gmail.com";
$userTwo->role = "client";
$userTwo->name = "Tadas";
var_dump($userTwo);
var_dump($userTwo->getUserInfo());


/*
*Sukurti 3 objektus su siomis savybemis:
*id
*pavadinimas
*kaina
*kiekis
*
*Isveskite kiekvienos prekes kiekio ir kainos suma
*pvz.:
*telefonas - 23,00(kiekis*kaina)
*
*/
<?php
 
class Product{
    public $id; // Object property
    public $title;
    public $price;
    public $count;
    public $userReview;
 
    // Constructor
 
    public function __construct($id, $title, $price, $count){
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->count = $count;
    }
 
    // Seteris, tai metodas, kuris priskiria reiksmes objekto ypatybems
 
    public function addUserReview($review){
        $this->userReview = $review;
    }
 
    // Geteris, tai metodas, kuris grazina objekto ypatybiu reiksmes
 
    public function getProduct(){
        return [
            $this->title,
            $this->price*$this->count
        ];
    }
 
    public function generateProductList($data){
        echo "<ul>";
        foreach ($data as $item) {
            echo "<li> $item</li>";
        }
        echo "</ul>";
    }
 
 
}
 
 
/*
 * Sukurti 3 objektus su šiomis savybėmis:
 * id
 * pavadinimas
 * kaina
 * kiekis
 *
 * Išveskite kiekvienos prekės kiekio ir kainos sumą.
 * pvz.:
 * Telefonas - 23,00 (kiekis*kaina)
 *
 *
 *
 * */
 
$productOne = new Product(1,'Telefonas',12356.56,12);
$productOne->addUserReview('Geras telefonas');
$productOne->generateProductList($productOne->getProduct());
?>











