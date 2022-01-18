<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE );
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num=substr_count($host,'/');
$path  = explode('/', $host)[$num];

//...code

if ($path == '' OR $path == 'index.php' OR $path == 'home') {

    $response = Controller::productList();
}
elseif ($path == 'add-product') {

    $response = Controller::addProductForm();
}

elseif ($path == 'mass-delete') {

    $response = Controller::massDeleteResult();

}

else {

    $response = Controller::error404();
}




?>