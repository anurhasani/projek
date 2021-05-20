<?php
$servername="localhost";
$username="root";
$password ="";
// create connection 
$conn= new mysqli ($servername,$username,$password);
// check connection 
if ($conn-> connect_error) {
die("connection failed:" .$conn-> connect_error);
}
// create database
$sql=" CREATE DATABASE registration";
if ($conn->query ($sql) === TRUE) {
  echo "database created  successfully";
  } else {
   echo "Error creating databse: ". $conn-> error;
   }   $conn->close();
   ?>