<?php

$serverName = "localhost";
$dbUsername ="Todo1234";
$dbPassword ="zQ(*Q8MzI_RPDY@p";
$dbName="edu.todo.crm.login";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}else{
    echo 'connection successful';
}