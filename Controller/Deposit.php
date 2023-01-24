<?php
    require "../Model/User.php";
    session_start();
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $m=new User();
        $con=$m->ConnectToDB();

        $BankID=mysqli_escape_string($con,$_POST["BankID"]);
        $value=mysqli_escape_string($con,$_POST["DepositValue"]);
        $UserID=$_SESSION["ID"];
        $Balance=$_SESSION["Balance"];

        if ($value == 0 || $value < 0 ) {
            echo "
            <script>
                alert('Value must be greater than 0 ');
                window.location.replace('http://localhost/BankingSystem/Views/Deposit.php')
            </script> ";

        }
        else {
            $newBalance= $Balance + $value;
            $m->EditBalance($con,$BankID,$newBalance);
            $_SESSION["Balance"]= $newBalance;
            echo "
            <script>
                alert('$value is added to your balance.');
                window.location.replace('http://localhost/BankingSystem/Views/Deposit.php')
            </script> ";
        }
        

        $m->DisConnect($con);




    }



?>

