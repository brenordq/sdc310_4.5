<?php
require_once('database.php');

//Get all entries in the userinfo table
function get_all_product()
{
    //query for all users
    $conn = get_db_conn();
    $query = "SELECT * FROM userinfo";
    $result = mysqli_query($conn, $query);
    return $result;
}

function get_product($product_no)
{
    $conn = get_db_conn();
    $query = "SELECT * FROM userinfo WHERE UserNo=$user_no";
    return mysqli_query($conn, $query);
}

?>
