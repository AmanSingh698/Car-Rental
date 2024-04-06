<?php
include "db.php";
session_start();

$name =  $_SESSION["username"];

if($name){
    header("Location:home.php");
}else{
    echo "Login First";
    header("Location:login.php");
}