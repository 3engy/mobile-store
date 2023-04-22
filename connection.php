<?php
// connect to db
$con = new mysqli("localhost","root","","mobile_store");
if(!$con){
    echo mysqli_connect_error();
    exit;
}

?>
