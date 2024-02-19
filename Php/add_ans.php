<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
$userID = $_SESSION['login_user'];

include_once '../dbconnection.php';

if (isset($_POST["postque"])) {

//                            doDBConnect(); 

    $msg = $_POST["message"];
    $qid = $_POST["postque"];

    $add_rec = "INSERT INTO `data_ans`(`Que_id`, `FO_answer`,`ans_user_id`) VALUES('$qid','$msg','$userID')";

    $qryReturn = mysqli_query($con, $add_rec);
    if ($qryReturn == true) {
        echo "<script type='text/javascript'>alert('reply successfully Uploded . . . ');</script>";
        header("location: ../que-detail.php?i=" . $qid);
    } else {
        echo 'error ............';
        echo"$con->error";
    }
}

