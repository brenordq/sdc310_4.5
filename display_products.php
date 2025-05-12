<?php
    require_once('../controller/productinfo_controller.php');
    $product_arr = get_product();
?>
<html>
    <head>
        <title>Week 4 GP5 - Breanna Nordquist</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    
    <body>
        <h2>Current Products:</h2>
        <table>
            <tr style="font-size:large;">
                <th>Product #</th>
                <th>Name</th>
                <th>Type</th>
            </tr>
            
            <?php foreach($product_arr as $product):;?>
                <tr>
                    <td><?php echo $product["productNo"];?></td>
                    <td><?php echo $product["Name"];?></td>
                    <td><?php echo $product["Type"];?></td>
                </tr>
            <?php endforeach;?>
        </table>
        <a href="find_product.php">Find a Product</a>
    </body>
</html>
