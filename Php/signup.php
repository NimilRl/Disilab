<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../DBconnections.php';

//start sassion
session_start();

if (isset($_POST["btnsignup"])) {

//            PASSWORD_DEFAULT
//            PASSWORD_BCRYPT
//            PASSWORD_ARGON2I
//            PASSWORD_ARGON2ID
//            https://www.geeksforgeeks.org/how-to-encrypt-and-decrypt-passwords-using-php/sss

    $username = $_POST['name'];
    $useremail = $_POST['email'];
    $userpass = $_POST['password'];
    $uniqueCode = md5(uniqid(rand(), true));

    $addrec = "INSERT INTO data_user(authorized_keys,User_name,User_email_id,User_password) VALUES('$uniqueCode','$username','$useremail','$userpass')";
    $qryreturn = mysqli_query($con, $addrec);

    if ($qryreturn) {
        echo 'ok';
        $ID = mysqli_insert_id($con);
        $_SESSION['login_user'] = $ID;
        header("location: ../que-list.php");
    } else {

        echo $con->error;
    }
}