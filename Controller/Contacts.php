<?php
    require "../Model/Contacts.php";
    session_start();
    if ($_SERVER["REQUEST_METHOD"]=="GET") {
        $model=new Contacts();
        $con=$model->ConnectToDB();
        
        $UserID=$_SESSION["ID"];
        $Subject=mysqli_escape_string($con,$_GET["Subject"]);
        $Msg=mysqli_escape_string($con,$_GET["Message"]);

        $res=$model->AddFeedback($con,$UserID,$Subject,$Msg);
        if ($res) {
            echo " 
                <script>
                    alert('Sorry, your feedback is not sent please try again');
                    window.location.replace('http://localhost/BankingSystem/Views/ContactUs.php');
                </script> ";
        }
        else {
            echo " 
                <script>
                    alert('Your feedback is sent successfully');
                    window.location.replace('http://localhost/BankingSystem/Views/HomePage.php');
                </script> ";
             
        }
        $model->DisConnect($con);
    }


?>

