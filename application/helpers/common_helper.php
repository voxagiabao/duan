<?php 
	function pre($list, $exit=TRUE){
		echo "<pre>";
		print_r($list);
		if($exit) die();
	}
?>