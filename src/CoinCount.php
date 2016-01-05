<?php

	class CoinCount {

		function makeChange($input) {
			$output = array();
			$possibleChange = array("1"=>"one penny", "2" => "two pennies", "3" => "three pennies", "4" => "four pennies", "5" => "one nickel", "6" => "one nickel, one penny");



			foreach($possibleChange as $key=>$value) {

				if ($input == 1) {
					array_push($output, $input);
				} elseif ($input == 2) {
					array_push($output, $input);
				} elseif ($input == 3) {
					array_push($output, $input);
				} elseif ($input == 4) {
					array_push($output, $input);
				} elseif ($input == 5) {
					array_push($output, $input);
				} elseif ($input == 6) {
					array_push($output, $input);
				}

				if((in_array($key, $output)) !== false) {
						$change = $value;
					}
			}

			return $change;
		}
	}

 ?>
