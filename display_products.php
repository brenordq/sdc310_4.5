<?php
    require_once('../controller/productinfo_controller.php');
    $user_arr = get_product();
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
            
            <?php foreach($user_arr as $user):;?>
                <tr>
                    <td><?php echo $user["ProductNo"];?></td>
                    <td><?php echo $user["Name"];?></td>
                    <td><?php echo $user["Type"];?></td>
                </tr>
            <?php endforeach;?>
        </table>
        <a href="find_product.php">Find a Product</a>
    </body>
</html>
