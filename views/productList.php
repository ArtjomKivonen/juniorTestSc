<?php
ob_start();

$title = "Product List";
$buttons = "
<button class='btn btn-success btn-sm'>
    <a href='./add-product'>ADD</a>
</button>
<button type='submit' form='product_list' name='delete' class='btn btn-danger btn-sm' id='massDelete'>MASS DELETE</button>
";

// query products
$database = new Database();
$stmt = $database->getAll();
$num = $stmt->rowCount();
echo '<form id="product_list" method="post">';
echo '<div class="row">';

if ($num>0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $product = new $type($sku, $name, $price, $size, $weight, $height, $width, $length, $type);
        echo var_dump($product);
        $insert_props = array('sku', 'name', 'price', 'size', 'weight', 'height', 'width', 'length', 'type');
        $values = array();
        foreach($insert_props as $prop){
            if(array_key_exists($prop, get_object_vars($product))){
                array_push($values, ("$"."product->get".ucfirst($prop)."()"));
            }
            else{
                array_push($values, null);
            }
        }
        var_dump($values);

        echo '<div class="col-md-3" id="'.$product->getSku().'">';
        echo '<div class="p-card bg-white p-2 rounded px-3">';
        echo '<input name="checkbox[]" type="checkbox" class=".delete-checkbox" value="'.$product->getSku().'">';
        echo '<div class="product_props">';
        echo "<h5>".$product->getSku()."</h5>";
        echo "<h5>".$product->getName()."</h5>";
        $product->printExtra();
        echo "</div>";
        echo "</div>";
        echo "</div>";

    }
} else {
    echo "<div class='alert alert-info'>No products found.</div>";
}

echo "</div>";
echo '</form>';

$content = ob_get_clean();
include "views/layout.php";

