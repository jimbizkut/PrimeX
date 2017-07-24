<html>
	<head>
		<title>BOOKING</title>
	</head>
	<body>
		<table border="0" bgcolor="#FFFFFF" align="center" width="54%">
			<tr bgcolor="#FF0000">
				<td align="center" bgcolor="#CCFF99">
					<font size="5">
						<a href="index.php">Home</a> 
					</font>
				</td>
			</tr>
			<tr>
				<td>
					<form action="processticket.php" method="post">
						<table bgcolor="white" height="431" border="0" align="center" width="50%">
							<tr>
								<td width="34%" bgcolor="#FFFFFF"><b>Name:</b></td>
								<td width="66%" bgcolor="#FFFFFF"><input type="text" name="Name" /></td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF"><b>Service Type:</b></td>
				    			<td><select name="Service_Type">
								<?php
									$servername = "localhost";
									$username = "primex";
									$password = "123456";
									$dbname = "primex";

									// Create connection
									$conn = new mysqli($servername, $username, $password, $dbname);
									// Check connection
									if ($conn->connect_error) {
									    die("Connection failed: " . $conn->connect_error);
									} 

									$sql = "SELECT id, name FROM services_category";
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
									    // output data of each row
									    while($row = $result->fetch_assoc()) {
									    	echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
									    }
									} else {
									    echo "<option value='0'>No data</option>";
									}
									$conn->close();
								?>
								</select></td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF"><b>Car Reg:</b></td>
								<td bgcolor="#FFFFFF"><input type="text" name="Car_Reg" /></td>
							</tr>
							<tr>
								<td bgcolor="#FFFFFF"><b>Price:</b></td>
				    			<td><input name="Price" value="" /></td>
							</tr>
							<tr>
								<td ><strong><b>Comments</b></strong></td>
								<td bgcolor="#FFFFFF"><font size="4">
				   				<textarea cols="17" rows="4" name="Comments"></textarea>
							</tr>
							<tr>
								<td height="26" bgcolor="#FFFFFF" align="center"><input type="submit" value="SET JOB" /></td>
 							</tr>
						</table>
					</form>
				</td>
			</tr>
			<tr>
				<td height="21" colspan="2" align="center" bgcolor="#CCFF99">- Place copyrights here</td>
			</tr>
		</table>
	</body>
</html>