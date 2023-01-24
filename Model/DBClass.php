<?php

    abstract class DBClass{
        private string $host;
        private string $root;
        private string $password;
        private string $DBName;

        
        public function __construct(string $host,string $root,string $password,string $DBName)
        {
            $this->host=$host;
            $this->root=$root;
            $this->password=$password;
            $this->DBName=$DBName;
        }

        private function failConnection($con){
            if(! $con){
                return true;
            }
        }
        public function ConnectToDB(){
            $con=mysqli_connect($this->host,$this->root,$this->password,$this->DBName);
            if($this->failConnection($con)){
                return mysqli_error($con);
            }
            return $con;
        }

        public function DisConnect($con){
            mysqli_close($con);
            exit;
        }

        

        
        


    }


?>