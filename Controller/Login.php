<?php
    require "../Model/User.php";
    session_start();
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $model=new User();
        $con=$model->ConnectToDB();

        $Email=mysqli_escape_string($con,$_POST["Email"]);
        $Password=mysqli_escape_string($con,$_POST["Password"]);

        $res=$model->Login($con,$Email,$Password);
        if ($row=mysqli_fetch_assoc($res)) {
            $_SESSION["ID"]=$row["ID"];
            $_SESSION["FullName"]=$row["FullName"];
            $_SESSION["Email"]=$row["Email"];
            $_SESSION["Password"]=$row["Password"];
            $_SESSION["Age"]=$row["Age"];
            $_SESSION["Gender"]=$row["Gender"];
            $_SESSION["Address"]=$row["Address"];
            $_SESSION["BankID"]=$row["BankID"];
            $_SESSION["Balance"]=$row["Balance"];

            $l="Location:../Views/HomePage.php";
            $model->Location($l);
        }
        else {
            echo"
                <script>
                    alert('Email or password is incorrect');
                    window.location.replace('http://localhost/BankingSystem/Views/Login.php');
                </script> ";
        }

        mysqli_free_result($res);
        $model->DisConnect($con);


    }
?>

