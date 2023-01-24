<?php
    session_start();
    require "../Model/User.php";

    //$UserID=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $model=new User();
        $con=$model->ConnectToDB();
        
        $UserID=$_SESSION["ID"];
        $FullName=mysqli_escape_string($con,$_POST["FullName"]);
        $Address=mysqli_escape_string($con,$_POST["Address"]);
        $Email=mysqli_escape_string($con,$_POST["Email"]);
        $Password=mysqli_escape_string($con,$_POST["Password"]);
        $Age=mysqli_escape_string($con,$_POST["Age"]);
        $Gender=mysqli_escape_string($con,$_POST["Gender"]);

        $res=$model->Update($con,$UserID,$FullName,$Email,$Password,$Age,$Gender,$Address);
        if ($res) {
            echo "
            <script>
                alert('Your information is updated successfully ');
                window.location.replace('http://localhost/BankingSystem/Views/HomePage.php');
            </script>";
        }
        else {
            echo "
            <script>
                alert('something happens incorrectly,please try again.');
                window.location.replace('http://localhost/BankingSystem/Views/EditInfo.php');
            </script>";

        }

        $model->DisConnect($con);
    }




?>
