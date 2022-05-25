<?php

$db_connection = new mysqli("localhost", "root", "kuku", "usp_mobile_devices", 3306);

if( ! $db_connection ){
    echo 'Conncetion error: ' . mysqli_connect_error();
}
