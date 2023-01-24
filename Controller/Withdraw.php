<?php
    require "../Model/User.php";
    session_start();
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $m=new User();
        $con=$m->ConnectToDB();

        $BankID=mysqli_escape_string($con,$_POST["BankID"]);
        $value=mysqli_escape_string($con,$_POST["WithdrawValue"]);
        $UserID=$_SESSION["ID"];
        $Balance=$_SESSION["Balance"];

        if ($value > $Balance) {
            echo "
            <script>
                alert('Value must be less than your balance ');
                window.location.replace('http://localhost/BankingSystem/Views/Withdraw.php')
            </script> ";
            exit;

        }
        if ($value <= 0) {
            echo "
            <script>
                alert('Value must be greater than or equal 0');
                window.location.replace('http://localhost/BankingSystem/Views/Withdraw.php')
            </script> ";
            exit;
        }
        else {
            $newBalance=$Balance-$value;
            $m->EditBalance($con,$BankID,$newBalance);
            $_SESSION["Balance"]=$newBalance;
            echo "
            <script>
                alert('$value is withdrawn to your balance.');
                window.location.replace('http://localhost/BankingSystem/Views/Withdraw.php')
            </script> ";
        }
        

        $m->DisConnect($con);




    }



?>

