<?php

function fib($ary){
	$index = count($ary);
	
	if($index < 2) {
		return 1;
	} else{
		return $ary[$index -1] + $ary[$index -2];
	}
}

$ar = [];

for($i = 0; $i < 20; $i++) {
	$ar[$i] 	= fib($ar);
}

var_dump($ar);
?>