<?php

	class CoinCount {

		function makeChange($input) {
			$output = array();

			$possibleChange = array("1"=>"one penny", "2" => "two pennies", "3" => "three pennies", "4" => "four pennies", "5" => "one nickel", "6" => "one nickel, one penny", );

			// $quarters = 0;
			// $dimes = 0;
			// $nickels = 0;
			// $pennies = 0;
			//
			// while($input < 5 || $input > 0) {
			// 	$pennies =+ 1;
			// }
			// $change = $pennies + "pennies";



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
