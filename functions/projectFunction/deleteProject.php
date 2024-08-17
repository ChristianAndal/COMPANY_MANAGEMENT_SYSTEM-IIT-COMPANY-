<?php
include 'connect.php';
if(isset($_GET['projectid'])){
    $id=$_GET['projectid'];

    $sql="delete from project where projectid=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:project.php');
    }else{
        die(mysqli_error($con));
    }
}


?>