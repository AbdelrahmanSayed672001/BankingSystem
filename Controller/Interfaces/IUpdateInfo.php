<?php

    interface IUpdateInfo{
        public function Update($con,$ID,$FullName,$Email,$Password,$Age,$Gender,$Address);
        //public function UpdateBalance($con,$ID,$Balance);

        
    }

?>