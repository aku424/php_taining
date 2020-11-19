<?php 
    function calPriceIncludedTax($price){
        $taxRate = 1.1;
        return $price * $taxRate;
    }
    function displayPrice($price){
        $includedPrice = calPriceIncludedTax($price);
        return $includedPrice."円";
    }
    // function calPriceIncludedTax($price){
    //     $taxRate = 1.2;
    //     $includedPrice = $price * $taxRate;
    //     return $includedPrice."円";
    // }
?>