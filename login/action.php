<?php

session_start();
require("../models/getModel.php");

    if (isset($_GET["req"])) {
        switch($_GET["req"]){
            case "login":
                $email = $_POST["email"];
                $mat_khau = $_POST["mat_khau"];
    
                $status = $taikhoan->taikhoan__Check_Login($email, $mat_khau);
            
                if($status == 0){
                    header("location:../login/index.php?status=fail");
                    return;
                }else{
                    $_SESSION['user'] = $status;
                    header("location:../index.php");
                }

                break; 
    
            case "logout" :
                unset($_SESSION["user"]);
                session_destroy();
                header("location:../index.php");
                break;
    }
}

?>