<?php
session_start();
include_once 'inc/database.php';



//..........
include_once 'models/model.php';
include_once 'models/Product.php';
include_once 'models/DVD.php';
include_once 'models/Furniture.php';
include_once 'models/Book.php';
include_once 'models/ProductDetector.php';
include_once 'models/ProductAttributesViewer.php';
include_once 'models/deleteProduct.php';
include_once 'models/add.php';


//...................
include_once 'controllers/controller.php';
//.......................
include_once 'routing/routing.php';


echo $response;

?>