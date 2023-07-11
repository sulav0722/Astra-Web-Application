<?php

if (session_status() === PHP_SESSION_NONE) {
    header('Location: login.php');
}
else{
    header('Location: dash.php');
}

?>