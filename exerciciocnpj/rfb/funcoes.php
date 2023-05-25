<?php

	function valida ( $entrada ) {
		if (strlen($entrada) != 11) {
			return false;
		}
		if ( !is_numeric ($entrada) ) {
			return false;
		}
		$soma = 0;
		for($i=0;$i<9;$i++){
			$soma += $entrada[$i] * (10-$i);
		}
		$mod = $soma %11;
		$dv = 11 - $mod;
		if($dv > 9){
			$dv = 0;
		}
		if($entrada[9] != $dv){
			return false;
		}
		$soma = 0;
		for($i=0;$i<10;$i++){
			$soma += $entrada[$i] * (11-$i);
		}
		$mod = $soma %11;
		$dv = 11 - $mod;
		if($dv > 9){
			$dv = 0;
		}
		if($entrada[10] != $dv){
			return false;
		}

		return true;
	}

	function validaCNPJ ( $entrada ) {
		if (strlen($entrada) != 14) {
			return false;
		}
		if ( !is_numeric ($entrada) ) {
			return false;
		}
		$soma = 0;
		for($i=0;$i<3;$i++){
			if($entrada[$i] < 4){
			$soma += $entrada[$i] * (5-$i);
			}else {
				$soma += $entrada[$i] * (9-$i);
			}
		}
		$mod = $soma %11;
		$dv = 11 - $mod;
		if($dv > 8){
			$dv = 0;
		}
		if($entrada[8] != $dv){
			return false;
		}
		$soma = 0;
		for($i=0;$i<7;$i++){
			$soma += $entrada[$i] * (5-$i);
		}
		$mod = $soma %11;
		$dv = 11 - $mod;
		if($dv > 8){
			$dv = 0;
		}
		if($entrada[10] != $dv){
			return false;
		}

		return true;
	}