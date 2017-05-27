<?php
	//Grab all data in JSON format
	//add true as a parament, because use an array
	$user_arr = json_decode(stripcslashes($_POST['data']), true);

	//key is the attr name
	//value is a value of current input
	function showFormData($data) {
			foreach ($data as $arr) {
				$name = strip_tags(trim($arr['name'])); 
				$value = strip_tags(trim($arr['value']));
				if(!empty($value)) {				
					$parsedata .= "<p>" . $name . " is " . $value . "</p>";
					$status = true;	
				} else {
					$status = false;
					//if at least one data is empty, break the cycle
					break;
				}
			};

			if($status == true) {
				echo "<h4>Dziękujemy za wysłanie formularza z następującymi danymi:</h4>";
				echo $parsedata;
			} else {
				echo "<h4>Brak danych do wyświetlenia</h4>";
			}
	}

	echo showFormData($user_arr);