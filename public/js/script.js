// if (CSS.supports('scroll-snap-align: start')) {
//     alert("native");
// } else {
//     alert("polyfill");
//     scrollSnapPolyfill();
// }

$(document).ready(function(){
    // Product type dependent ajax
    $('#productType').on('change', function(){
        let attributes = {
            "DVD" : `
                    <label for="size">Size</label>
                    <input type="number" class="form-control" name="size" required>
                    <p>Please provide size in MB</p>
                `,
            "Book" : `
                    <label for="weight">Weight</label>
                    <input type="number" class="form-control" name="weight" required>
                    <p>Please provide weight in KG</p>
                `,
            "Furniture": `
                    <label for="height">Height</label>
                    <input type="number" class="form-control" name="height" required>
                    <label for="width">Width</label>
                    <input type="number" class="form-control" name="width" required>
                    <label for="length">Length</label>
                    <input type="number" class="form-control" name="length" required>
                    <p>Please provide dimensions(CM): height, width, length</p>
            `
        };
        let typeProduct = $(this).val();
        let data = attributes[typeProduct];
        $('#attributes').html(data);
    });
    $("#massDelete").click(function(){
            let prod_ids = [];
            $(':checkbox:checked').each(function(i){
                prod_ids[i] = $(this).val();
            });
            if(prod_ids.length < 1)
            {
                alert("Please select at least one product");
            }
            else
            {
                if(confirm("Are you sure want to delete "+(prod_ids.length>1?"these products":"this product")+"?"))
                {
                    $.ajax({
                        url: 'models/massDelete.php',
                        method: 'POST',
                        data: {prod_ids:prod_ids},
                        success: function(response)
                        {
                            for(let i = 0; i < prod_ids.length; i++)
                            {
                                $('div#'+prod_ids[i]+'').remove();
                            }
                        }
                    });
                }


            }

    });
});
