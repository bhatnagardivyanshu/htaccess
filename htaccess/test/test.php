<?php 

	$arr = explode('/', $_SERVER['REQUEST_URI']);
	echo "<h2> You requested for '".urldecode($arr[3])."' </h2>";

 ?>