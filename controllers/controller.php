<?php

class Controller{

    public static function productList() {
//        $products = Model::getProducts();
        include_once('views/productList.php');
    }

    public static function addProductForm() {
//
        include_once('views/addProduct.php');
    }
    public static function addProductResult() {

//        $result = Model::addProduct();
        include_once('views/addProduct.php');
    }
    public static function massDeleteResult() {

        $result = Database::massDelete();
        include_once('views/productList.php');
    }

}


?>