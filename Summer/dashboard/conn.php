<?php

//Conection to database

$con = new mysqli("localhost","root","","admin");

if($con->connect_error){
    die("Error!".$con->connect_error);
}

//Query to databse
//$sql = "INSERT INTO demo(name,address,email,password) VALUES('$name','$address','$email','$password')";

///// -> is like d1.exit dot(.)

/**$result = $con->query($sql);

if($result === TRUE){
    echo "your query has bee sucessfull";
}
else{
    echo "your query is not submitted";
}
*/
?>