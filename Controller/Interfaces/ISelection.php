<?php

    interface ISelection{
        public function Select($Email,$Password);
        public function SelectDestBalance($con,$BankID);
        
    }

?>