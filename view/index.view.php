<?php
/*
*Sukurkite klase Computer, kuri turi sias savybes:
*CPU
*RAM
*HDD
*
*Klases pagringu sukurkite du objektus ir ivseskit info apie juos
*
*/


use ESHOP\Product;
use ESHOP\Food;
use ESHOP\Computer;
use ESHOP\Calculator;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $productOne = new Food(1, 'Batonas', 1.15, 20, 'C', '2023-12-12');
    $productOne->addUserReview('Skanus batonas');
    Food::generateProductList($productOne->getProduct());


    $computerOne = new Computer(77, 'Lenovo', 799, 12, 'Ryzen', '16GB', 'Ultrastar4TB');
    $computerOne->addUserReview('Galingas kompas');
    Computer::generateProductList($computerOne->getProduct());

    echo Calculator::sum(100, 47, 23);




    ?>
</body>

</html>