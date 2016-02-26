<?php
	/*
	* On-Demand Functions
	* Creates an on-demand function from the .func files found on the lib directory.
	* 
	* Author: Ryan G. Gonzales
	* License: MIT 
	*
	* (Well this is just for fun)
	*/
	
	include("odf.php");
	
	// If I have my own function here...
	function echoThis($a){
		return $a;
	}
	
	$array = array(1,5);
	
	// Print_R
	echo onDemandFunc("print_r", $array);
	// Add Func
	echo onDemandFunc("add",$array);
?>