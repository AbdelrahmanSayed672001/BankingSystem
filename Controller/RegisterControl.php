<?php
    require "../Model/User.php";

    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $model=new User();
        $con=$model->ConnectToDB();
        
        $FullName=mysqli_escape_string($con,$_POST["FullName"]);
        $Address=mysqli_escape_string($con,$_POST["Address"]);
        $Email=mysqli_escape_string($con,$_POST["Email"]);
        $Password=mysqli_escape_string($con,$_POST["Password"]);
        $Age=mysqli_escape_string($con,$_POST["Age"]);
        $BankID=mysqli_escape_string($con,$_POST["BankID"]);
        $Gender=mysqli_escape_string($con,$_POST["Gender"]);

        if (strlen($BankID)< 14 || strlen($BankID)>14) {
            echo "
            <script>
                alert('Bank ID is not equal 14 characters ');
                window.location.replace('http://localhost/BankingSystem/Views/Register.php');
            </script>";
        }
        if (strlen($Password) != 8) {
            echo "
            <script>
                alert('Password is not equal 8 characters ');
                window.location.replace('http://localhost/BankingSystem/Views/Register.php');
            </script>";
           
        }
        else{
            $model->Add($con,$FullName,$Email,$Password,$Age,$Address,$Gender,$BankID);
            echo"<script>alert('You are added to the system')</script>";
            $l="Location:../Views/Login.php";
            $model->Location($l);
            
            
        }

        
        $model->DisConnect($con);

    }
    

?>