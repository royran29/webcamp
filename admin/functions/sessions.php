<?php

function user_authenticated(){
    if (!check_user()) {
        header('Location:login.php');
        exit();
    }
}
function check_user(){
    return isset($_SESSION['user']);
}
session_start();
user_authenticated();