<?php

function hash_password(string $password){
    if($password){
        return hash('sha256',$password);
    }else{
        return null;
    }
}

function isSame(string $dbpass,string $userpassword){
    $newuserpass = hash_password($userpassword);
    if($dbpass == $newuserpass){
        return true;
    }else{
        return false;
    }
}