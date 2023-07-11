<?php

require("conn.php");

$name = $address = $email = $password= $error ="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $email = $_POST["uemail"];
    $password = $_POST["upass"];
}

        //email VALIDATION
        if(empty($email)){
            $error .= "email is empty";
        }
    // password valdiation
        if(empty($password)){
            $error .= "Password is empty";
        }

/*function validate($data){
    $data = stripcslashes($data);//removes slashes
    $data = htmlspecialchars($data);
    $data = trim($data);//trim extra spaces
    return $data;
}
*/


$sql = "SELECT * FROM user WHERE email = '".$email."' AND password = '".$password."' ";

///// -> is like d1.exit dot(.)

$result = $con->query($sql);



if (mysqli_num_rows($result) > 0) {
    
    header('Location: dash.php');
}
else{
    ?>
    
    <script>
    
        //alert ("Incorrect Password!!");
        
        </script>

<?php
    session_start();
    header('Location: login.php');
    
}


?>