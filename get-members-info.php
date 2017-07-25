<?php
	
	if (strtoupper($_SERVER["REQUEST_METHOD"]) == "POST")
	{
		$car_number = $_POST["car_number"];

		$servername = "localhost";
	    $username = "primex";
	    $password = "123456";
	    $dbname = "primexdb";

	    // Create connection
	    $conn = new mysqli($servername, $username, $password, $dbname);
	    // Check connection
	    if ($conn->connect_error) 
	    {
	        die("Connection failed: " . $conn->connect_error);
	    }

     	$sql = "SELECT `members`.`Code` , `clients`.`Name` FROM `vehicles` LEFT JOIN `jobs` ON `jobs`.`VehicleID` = `vehicles`.`ID` LEFT JOIN `membercreditledger` ON `membercreditledger`.`SalesOrderID` = `jobs`.`SalesOrderID` LEFT JOIN `members` ON `members`.`ID` = `membercreditledger`.`MemberID` LEFT JOIN `clientvehiclejoin` ON `clientvehiclejoin`.`VehicleID` = `vehicles`.`ID` LEFT JOIN `clients` ON `clients`.`ID` = `clientvehiclejoin`.`ClientID` WHERE (`vehicles`.`RegistrationNo` LIKE '%" . $car_number . "%') LIMIT 0, 1";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
		// output data of each row
			while($row = $result->fetch_assoc()) 
			{
		    	echo $row["Code"] . ";" . $row["Name"];
			}
		} 
		else 
		{
			echo "";
		}
	}

?>