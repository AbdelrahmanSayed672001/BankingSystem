<?php
    require "../Model/DBClass.php";
    require "../Controller/Interfaces/IAddFeedback.php";


    class Contacts extends DBClass implements IAddFeedback{

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

        public function AddFeedback($con, $UserID, $Subject, $Msg)
        {
            $query=" INSERT INTO `contactus`(`UserID`, `Subject`, `Message`) 
                    VALUES ('".$UserID."','".$Subject."','".$Msg."' ) ";
            $this->ExecQuery($con,$query);
        }
        public function ExecQuery($con, $query)
        {
            $res=mysqli_query($con,$query) or die(mysqli_error($con));
            return $res;
        }


    }




?>