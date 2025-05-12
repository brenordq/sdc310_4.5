<?php
require_once('../model/productinfo_db.php');

function get_product()
{
    $product_rows = get_all_product();
    $product = array();

    if ($product_rows) {
        $index = 0;
        //If query was successful, fill the users array
        while($row = mysqli_fetch_array($product_rows)) {
            $product[$index]["productNo"] = $row["productNo"];

            //Transform the name fields from the DB to "First Last" format
            $product[$index]["Name"] = $row["FirstName"] . " " . $row["LastName"];
            $product[$index]["EMail"] = $row["EMail"];
            $product[$index]["FavNum"] = $row["FavoriteNum"];
            $index++;
        }
    }

    return $product;
}

function get_product_name($product_no)
{
    $product = get_product($product_no);

    if($product && $product->num_rows === 1)
    {
        $product_info = mysqli_fetch_assoc($product);
        return $product_info["FirstName"] . " " . $user_info["LastName"];
    }
    else
    {
        return "No such user or multiple users found.";
    }
}

?>
