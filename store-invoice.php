<?php
	if (strtoupper($_SERVER["REQUEST_METHOD"]) == "POST")
	{
		$invoice_number = $_POST["invoice_number"];
		$invoice_date = $_POST["invoice_date"];
		$member_name = $_POST["member_name"];
		$member_id = $_POST["member_id"];
		$car_number = $_POST["car_number"];
		$payment_type_id = $_POST["payment_type_id"];
		$topup_amount = $_POST["topup_amount"];


		$servername = "localhost";
	    $username = "primex54_primex";
	    $password = "123456";
	    $dbname = "primex54_primex";

	    // Create connection
	    $conn = new mysqli($servername, $username, $password, $dbname);
	    // Check connection
	    if ($conn->connect_error) 
	    {
	        die("db-conn-failed");
	    }

	    $sql = "INSERT INTO `primexdb`.`invoice` (`id`, `car_number`, `member_id`, `member_name`, `topup_amount`, `payment_type_id`, `created_at`, `code`) VALUES (NULL, '" . $car_number . "', '" . $member_id . "', '" . $member_name . "', '" . $topup_amount . "', '" . $payment_type_id . "', CURRENT_TIMESTAMP, '" . $invoice_number . "');";

		if ($conn->query($sql) === TRUE) 
		{
		    echo "saved";
		} 
		else 
		{
		    echo "error";
		}

		$conn->close();
	}	
?>