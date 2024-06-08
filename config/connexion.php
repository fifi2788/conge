<?php 

require "parent.inc"; 
$conn=new mysqli($server,$user_name,$password,$database);

if($conn->connect_error){
    die("echec");
}
