<?php
    include ("connect.php");
	$link = connection();
	$new_temp = new_temperature;
	$new_humid = new_humidity;
	$old_temp = old_temperature;
	$old_humid = old_humidity;
	$client.print $new_temp;
	$client.print $new_humid;
	$client.print $old_temp;
	$client.print $old_humid;
	
	
?>
