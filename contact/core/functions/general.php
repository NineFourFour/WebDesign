<?php

	function cleanData($username){
		$username=trim($username);
		$result = filter_var($username, FILTER_UNSAFE_RAW,FILTER_FLAG_STRIP_HIGH );
		return $result;
	}

?>
