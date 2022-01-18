<?php

class ProductValidator
{
    private $validators = [
        'dvd' => 'DVDValidator',
        'book' => 'BookValidator',
        'furniture' => 'FurnitureValidator',
        'none' => 'NoneValidator'
    ];
    private $productType = '';
    public static function productValidation($sku, $name, $price, $productType, $validators){
        $validatorClass = $validators[$productType];
        $validator = new productValidator();
        $validator->validateForm();
    }
    function validateForm($sku, $name, $price, $dvd_size = null, $book_weight = null, $height = null, $width = null, $length = null){

    }

}

?>