<?php
    require "../Model/User.php";
    session_start();

    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $model=new User();
        $con=$model->ConnectToDB();

        $from=mysqli_escape_string($con,$_POST["BankID"]);
        $to=mysqli_escape_string($con,$_POST["TO"]);
        $value=mysqli_escape_string($con,$_POST["Value"]);
        // $ID=$_SESSION["ID"];
        $SenderBalance=$_SESSION["Balance"];
        
        if ($from!=$to) {
            $res=$model->SelectDestBalance($con,$to);
            $RecieverBalance=0;
            while ($row=mysqli_fetch_assoc($res)) {
                $RecieverBalance=$row["Balance"];
            }
            if ($value > 0) {
                $SenderNewBalance=$SenderBalance-$value;
                $RecieverNewBalance=$RecieverBalance+$value;
                $model->EditBalance($con,$from,$SenderNewBalance);
                $model->EditBalance($con,$to,$RecieverNewBalance);
                $_SESSION["Balance"]=$SenderBalance;
                echo "
                    <script>
                        alert('Transfer is performed successfully and $value is withdrawn to your balance.');
                        window.location.replace('http://localhost/BankingSystem/Views/Transfer.php')
                    </script> ";
                exit;

            }
            else {
                echo "
                    <script>
                        alert('Value must be greater than 0 ');
                        window.location.replace('http://localhost/BankingSystem/Views/Transfer.php')
                    </script> ";
                exit;
            }
        }
        else {
            echo "
                    <script>
                        alert('Receiver BankID is same as Sender Bank ID');
                        window.location.replace('http://localhost/BankingSystem/Views/Transfer.php')
                    </script> ";
                exit;
        }


        mysqli_free_result($res);
        $model->DisConnect($con);
    }



?>