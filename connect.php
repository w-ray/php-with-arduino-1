<?php
    function connection(){
        $con = connect("192.168.12.50");
        if (!$con){
            echo"ERROR";
        }
		return $con;
    }
?>