<?php

	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed.");
		}
	}

	function redirect_to($new_location) {
	  	header("Location: " . $new_location);
	  	exit;
	}

	function verify_input($data) {
		global $connection;
  		$data = htmlspecialchars($data);
  		$data = mysqli_real_escape_string($connection,$data);
  		return $data;
    }
    function verify_in($data) {
		global $connection;
  		$data = mysqli_real_escape_string($connection,$data);
  		return $data;
    }
	
	function verify_output($data) {

  		$data = stripcslashes($data);
  		$data = htmlspecialchars_decode($data);
  		return $data;
    }
    function verify_out($data) {

  		$data = stripcslashes($data);
  		return $data;
    }

	
	function insert_download($fname, $lname, $email, $org, $title) {
		global $connection;
		
		$query  = "INSERT INTO `downloads` (`fname`, `lname`,  `email`, `org`, `title`) VALUES ('$fname', '$lname', '$email', '$org', '$title')";

		//echo $query;
		$result_id = mysqli_query($connection, $query);
		error_log("\ninsert_client" . $query , 3, "C:/xampp/apache/logs/error.log");
		confirm_query($result_id);
		echo "inserted";
		redirect_to("pricing.php");
		
	}
	
	function find_user($email) {
		global $connection;
		
		$email = verify_input($email);
		$query  = "SELECT email ";
		$query .= "FROM downloads ";
		$query .= "WHERE email = '$email' ";
		$query .= "LIMIT 1";

		$result_set = mysqli_query($connection, $query);
		confirm_query($result_set);
		if($result_user = mysqli_fetch_assoc($result_set)) {
			return $result_user;
		} else {
			return null;
		}
	}
?>