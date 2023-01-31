<?php

namespace ESHOP;

class Calculator{
    static public function sum(...$params){
        return array_sum($params);
    }
}