<?php
	// On-Demand Functions

	// DEFINE CONSTANTS
	define("LIB", "lib/");
	define("EXT", ".func");
	
	// Well, this is it. Nothing too fancy really.
	function onDemandFunc($func, $data){
		$newFunc = create_function('$data', file_get_contents(LIB.$func.EXT));
		return $newFunc($data);
	}
?>