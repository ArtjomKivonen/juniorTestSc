<?php
if(isset($_POST['save'])){
    echo "save";
    Database::addProduct();
}
?>
