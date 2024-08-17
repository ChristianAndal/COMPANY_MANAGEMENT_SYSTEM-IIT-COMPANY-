<?php

$con=new mysqli('localhost', 'root', '','company');

if(!$con){
    die(mysqli_error($con));
}

?>
