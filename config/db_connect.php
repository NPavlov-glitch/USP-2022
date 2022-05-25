<?php

$db_connection = mysqli_connect('localhost', 'root', 'kuku', 'usp_mobile_devices');

if( ! $db_connection ){
    echo 'Conncetion error: ' . mysqli_connect_error();
}
