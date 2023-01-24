<?php
    
    interface IAdd{
        public function Add($con,$FullName,$Email,$Password,$Age,$Address,$Gender,$BankID);
        
        public function Insert($FullName,$Email,$Password,$Age,$Gender,$BankID,$Address);
        
    }


    
    


?>