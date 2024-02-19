<?php

// put your code here

include_once '../dbconnection.php';

//start sassion
session_start();

if (isset($_POST["login"])) {

    $myuseremail = $_POST['email'];
    $mypassword = $_POST['password'];
    
//    echo $myuseremail;
    echo '<br>';
//    echo $mypassword;
    
//     echo '<script>alert("btn clicked")</script>';
    $add_rec = "SELECT * FROM data_user WHERE User_email_id = '$myuseremail' AND User_password = '$mypassword'";
    $qryReturn = mysqli_query($con,$add_rec);

//    check if query is true or not
    if ($qryReturn) {
        
//             echo '<script>alert("query runeed")</script>';

        $row = mysqli_fetch_assoc($qryReturn);
//        $password = $row['User_password'];
        $type = $row['User_type'];
               
        // Print the result depending if they match
//        if (password_verify($mypassword, $password)) {

//            echo '<script>alert("pass is ok")</script>';
            
            //check user type
            if ($type == 'U') {
                $ID = $row['User_id'];
                
                $updatestatus = "UPDATE `data_user` SET `status`='1' WHERE User_id = $ID;";
                $qrystatus = mysqli_query($con,$updatestatus);
                
                $_SESSION['login_user'] = $ID;
                header("location: ../que-list.php");
            } elseif ($type == 'A') {
                $ID = $row['User_id'];
                $_SESSION['login_user'] = $ID;
                $_SESSION['user_type'] = $type;
                header("location: ../../Admin/index.php");
            }
         
    } else {
        echo '<script>alert("Wrong Credential")</script>';
        header("location:../index.php?msg=failed");
//        header("location:login.php?msg=failed");

        echo $con->error;
    }
}
?>

