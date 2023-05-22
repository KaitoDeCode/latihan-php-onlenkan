<?php

$username = " ";
$password = "Robotcanggih";

function login ($username,$password){
    if($username === "" && $password === ""){
        echo "invalid username or password";
    }else{
        echo "Login Sukses";
    }
}

login($username,$password);