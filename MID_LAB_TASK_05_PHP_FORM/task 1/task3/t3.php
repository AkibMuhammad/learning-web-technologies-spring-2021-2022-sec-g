<?php
	
	if(isset($_REQUEST['submit'])){
		
		$date_of_birth = $_REQUEST['date_of_birth'];

		if($date_of_birth == ""){
			echo "Invalid DOB";
		}else{
			echo $_POST["date_of_birth"];
		}

	}
?>
