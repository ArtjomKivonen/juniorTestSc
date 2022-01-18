<?php
ob_start();
$title = "Add Product";
$buttons = "
<button name='save' type='submit' form='product_form' class='btn btn-primary btn-sm '>SAVE
</button>
<button class='btn btn-secondary btn-sm '>
    <a href='./'>CANCEL</a>
</button>
";
?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="post" id="product_form">
                    <div class="alert alert-danger" role="alert" id="message" style="display: none;">

                    </div>
                    <div class="form-group">
                        <label for="sku">SKU</label>
                        <input type="text" class="form-control" name="sku" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" step="0.01" class="form-control" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Product Type</label>
                        <select class="form-control" id="productType" name="type" required>
                            <option value="" selected disabled hidden>Please select product type</option>
                            <option value='DVD'>DVD</option>
                            <option value='Book'>Book</option>
                            <option value='Furniture'>Furniture</option>
                        </select>
                    </div>
                    <div class="form-group" id="attributes">
                    </div>
                </form>
            </div>
        </div>
    </div>

<!--<form id="product-form" action="" method="post">-->
<!---->
<!--    <table class='table table-hover table-responsive table-bordered'>-->
<!---->
<!--        <tr>-->
<!--            <td>SKU</td>-->
<!--            <td><input id="sku" type='text' name='sku' class='form-control'></td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td>Name</td>-->
<!--            <td><input id="name" type='text' name='name' class='form-control'></td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td>Price</td>-->
<!--            <td><input id="price" type='text' name='price' class='form-control'></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Type Switcher</td>-->
<!--            <td>-->
<!--                <select name="type" id="productType">-->
<!--                    <option value="DVD" id="DVD">dvd</option>-->
<!--                    <option value="Book" id="Book">book</option>-->
<!--                    <option value="Furniture" id="Furniture">furniture</option>-->
<!--                </select>-->
<!--            </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <p id="ttype"></p>-->
<!--        </tr>-->
            <!--        <tr id="attributes">-->
<!--            <td>Size (MB)</td>-->
<!--            <td>-->
<!--                <input name='size' id="size" class='form-control'>-->
<!--                <p>Please provide size in MB</p>-->
<!--            </td>-->
<!--        </tr>-->

<!--        <tr>-->
<!--            <td>Weight (KG)</td>-->
<!--            <td>-->
<!--                <input name='weight' id="weight" class='form-control'>-->
<!--                <p>Please provide weight in KG</p>-->
<!--            </td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td>Height (CM)</td>-->
<!--            <td>-->
<!--                <input name='height' id="height" class='form-control'>-->
<!--            </td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td>Width (CM)</td>-->
<!--            <td>-->
<!--                <input name='width' id="width" class='form-control'>-->
<!--            </td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td>Length (CM)</td>-->
<!--            <td>-->
<!--                <input name='length' id="length" class='form-control'>-->
<!--                <p>Please provide dimensions(CM): height, width, length(</p>-->
<!--            </td>-->
<!--        </tr>-->

<!--        <select>-->



<?php
$content = ob_get_clean();
include "views/layout.php";