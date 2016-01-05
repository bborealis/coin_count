<?php

	class CoinCount {

		function makeChange($input) {
			$output = array();
			$possibleChange = array("1"=>"one penny");

			if ((int)$input - 1 == 0) {
				array_push($output, $input);
			}


			foreach($possibleChange as $key=>$value) {
				if((in_array($key, $output)) !== false) {
					$change =  $value;
				}
			}

			return $change;
		}
	}

 ?>
