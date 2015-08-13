<?php 
GLOBAL $debug;
GLOBAL $exit;
GLOBAL $debug_exit;
GLOBAL $debug_info;

###############
# For debugging "true" $debug OR $debug_exit(for debug and exit)
###############
$debug 		= false;
$exit 		= false;
$debug_exit = false;
$debug_info = array();

function debug($data){
	
	if($debug || $debug_exit){
		echo '<pre>';
		print_r($data);
		echo '<pre>';
	}
	
	if($exit || $debug_exit){
		exit;
	}
	
}
?>