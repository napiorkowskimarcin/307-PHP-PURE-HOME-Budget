<?php

function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

class Data 
{
    
    public static function totalHealthy($array){
    $arr = array_column($array, 'healthyFood');
    return array_reduce($arr, "sum");
    }
    public static function totalUnhealthy($array){
    $arr = array_column($array, 'unhealthyFood');
    return array_reduce($arr, "sum");
    }
    public static function totalFarmacy($array){
    $arr = array_column($array, 'farmacy');
    return array_reduce($arr, "sum");
    }
    public static function totalHousehold($array){
    $arr = array_column($array, 'household');
    return array_reduce($arr, "sum");
    }
    public static function totalClothing($array){
    $arr = array_column($array, 'clothing');
    return array_reduce($arr, "sum");
    }
    public static function totalTotal($array){
    return array_reduce($array, "sum");
    }

}

    

return new Data();
?>