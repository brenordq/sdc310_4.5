<?php
    function get_db_conn()
    {
        //Connect the database
        $hostname = "localhost";
        $username = "ecpi_user";
        $password = "Password1";
        $dbname = "sdc310_wk3";
        return mysqli_connect($hostname, $username, $password, $dbname);
    }
?>