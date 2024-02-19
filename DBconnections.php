<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
//        function doDBConnect(){
//            global $con;
//            
//            if(isset($con->connect_error)){
//                die("connect failed..".$con->connect_error."<br/>");
//            }
//            else{
//                echo " ";
//            }
//        }
//        function doDBClose(){
//            global $con;
//            $con->close;
//        }
//        function goHome(){
//            echo "<br/><a href='Home.php'>Home</a>";
//        }
        
        ?>
    </body>
</html>

<?php  
$con = mysqli_connect("127.0.0.1",'root','','disilab');
// CHECK DATABASE CONNECTION
if(mysqli_connect_errno()){
    echo "Connection Failed".mysqli_connect_error();
    exit;
}


?>