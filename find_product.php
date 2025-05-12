<?php
    require_once('../controller/userinfo_controller.php');

    //set a user number we know doesn't exist
    $productNo = -1;
    $name = "";

    if (isset($POST['product_no'])) {
        $productNo = $_POST['product_no'];
        $productName = get_name($productNo);
    }
?>
<html>
    <head>
        <title>Week 4 GP4 - Breanna Nordquist</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    
    <body>
        <h2>Find a Product by Product Number</h2>
        <form method="POST">
            <h3>Product Number: <input type="text" name="product_no"/></h3>
            <input type="submit" value="Submit"/>
        </form>
        <h3>Product Found: <?php echo $productName;?></h3>
        <br>
        <a href="display_product.php">Show All Products</a>
    </body>
</html>
