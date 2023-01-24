<?php

    require "../Model/DBClass.php";
    require "../Controller/Interfaces/IAdd.php";
    require "../Controller/Interfaces/IExecution.php";
    require "../Controller/Interfaces/ILocation.php";
    require "../Controller/Interfaces/ILogin.php";
    require "../Controller/Interfaces/ISelection.php";
    require "../Controller/Interfaces/IEditBalance.php";
    require "../Controller/Interfaces/IUpdateInfo.php";




    class User extends DBClass implements ILocation,IExecution,ISelection,ILogin,IAdd,IEditBalance,IUpdateInfo{ 
        // private int $ID;
        // private string $FullName;
        // private string $Email;
        // private string$Password;
        // private string$Address;
        // private int $Age;
        // private string $Gender;
        // private int $BankID;

        public function __construct()
        {
            global $host,$root,$password,$DBName;
            $host="localhost";
            $root="root";
            $password="";
            $DBName="bankingsystem";

            parent ::__construct($host,$root,$password,$DBName);
            parent ::ConnectToDB();
        }



        public function Location($L)
        {
            header($L);
        }
        
        public function ExecQuery($con, $query)
        {
            $res=mysqli_query($con,$query) or die(mysqli_error($con));
            return $res;
        }
        public function Insert($FullName,$Email,$Password,$Age,$Gender,$BankID,$Address)
        {
            $query="INSERT INTO `user`
            (`FullName`, `Email`, `Password`, `Age`, `Gender`, `Address`, `BankID`) 
            VALUES ('".$FullName."', '".$Email."', '".$Password."', '".$Age."', '".$Gender."',
            '".$Address."', '".$BankID."')";

            return $query;
        }
        public function Add($con,$FullName,$Email,$Password,$Age,$Address,$Gender,$BankID)
        {
            $query=$this->Insert($FullName,$Email,$Password,$Age,$Gender,$BankID,$Address);
            $this->ExecQuery($con,$query);
        }
        
        
        public function Select($Email,$Password)
        {
            $query="SELECT * FROM `user` WHERE Email LIKE '".$Email."' 
                    AND Password LIKE '".$Password."' ";
            return $query;

        }
        public function Login($con, $Email, $Password)
        {
            $query=$this->Select($Email,$Password);
            $res=$this->ExecQuery($con,$query);
            return $res;
        }

        public function GoToLogin()
        {
            if (!isset($_SESSION["ID"])) {
                $l="Location:../Views/Login.php";
                $this->Location($l);
                exit;
            }
        }

        public function EditBalance($con,$BankID, $value)
        {
            $query="UPDATE `user` SET `Balance` = '".$value."' WHERE `BankID` = '".$BankID."';";
            $res= $this->ExecQuery($con,$query);
            
        }

        public function Update($con,$ID,$FullName, $Email, $Password, $Age, $Gender, $Address)
        {
            $query="UPDATE `user` SET `FullName`='".$FullName."', `Email`='".$Email."',
            `Password`='".$Password."', `Age`='".$Age."', `Gender`='".$Gender."',
            `Address`='".$Address."'  WHERE ID = '".$ID."' ";

            $res=$this->ExecQuery($con,$query);
            return $res;
        }

        public function SelectDestBalance($con,$BankID)
        {
            $query= "SELECT `Balance` FROM `user` WHERE BankID='".$BankID."' ";
            $res=$this->ExecQuery($con,$query);
            return $res;
        }

        
        

    }

?>