<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
$userID = $_SESSION['login_user'];

include_once '../dbconnection.php';

if (isset($_GET['v'])) {
    $qid = $_GET['qid'];
    $aid = $_GET['aid'];

    if ($_GET['v'] == 1) {
        //upVote

        $sql = "DELETE FROM data_ans_ratings WHERE user_id=$userID and ans_id = $aid;";

        if (mysqli_query($con, $sql)) {
            $qryVote = mysqli_query($con, "INSERT INTO `data_ans_ratings`(`ans_id`, `user_id`, `ratings`) VALUES ('$aid','$userID',1);");
            if ($qryVote == true) {
                echo "<script type='text/javascript'>alert('reply successfully Uploded . . . ');</script>";
                header("location: ../que-detail.php?i=" . $qid);
            } else {
                echo 'error ............\n';
                echo"$con->error";
            }
        }
    } elseif ($_GET['v'] == 0) {

        $sql = "DELETE FROM data_ans_ratings WHERE user_id=$userID and ans_id = $aid;";

        if (mysqli_query($con, $sql)) {
            $qryVote = mysqli_query($con, "INSERT INTO `data_ans_ratings`(`ans_id`, `user_id`, `ratings`) VALUES ('$aid','$userID',0);");
            if ($qryVote == true) {
                echo "<script type='text/javascript'>alert('reply successfully Uploded . . . ');</script>";
                header("location: ../que-detail.php?i=" . $qid);
            } else {
                echo 'error ............\n';
                echo"$con->error";
            }
        }
    }
}
