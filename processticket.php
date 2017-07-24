<?php

error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
//set up for mysql Connection
$dbhost = 'localhost';
$dbuser = 'primex';
$dbpass = '123456';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass);

//test if the connection is established successfully then it will proceed in next process else it will throw an error message
if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}

//we specify here the Database name we are using
mysqli_select_db($conn, 'primex');
$Name=mysqli_real_escape_string($conn, $_POST['Name']);
$Service_Type=mysqli_real_escape_string($conn, $_POST['Service_Type']);
$Car_Reg=mysqli_real_escape_string($conn, $_POST['Car_Reg']);
$Price=mysqli_real_escape_string($conn, $_POST['Price']);
/*$month=mysql_real_escape_string($_POST['lMonth']);
$dDay =mysql_real_escape_string($_POST['txtDay']);
$dYear = mysql_real_escape_string($_POST['txtYear']);
*/
$Comments=mysqli_real_escape_string($conn, $_POST['Comments']);
//Protecting form submitting an empty data

if ( !$Name || !$Service_Type || !$Car_Reg || !$Price || !$Comments)
	{
	echo'<body bgcolor="#3a4c38">';
	echo'<center>';
	echo "<h2>Please enter the required details</h2>";
	echo "<br/>";
	echo "<br/>";
	echo "<font size='5'>"."Click" . "<a href='ticket.php'>"."  ". "here"  . "</a>"  . "  " . "to ticket"."</font>";
	echo'</center>';
	echo'</body>';

	exit;
	}

//It wiil insert a row to our employee_details`
$sql = "INSERT INTO  `primex`.`ticketing` (`Name`, `Service_Type`, `Car_Reg`, `Price`, `Date_In`, `Comments` ) 
	VALUES ('{$Name}','{$Service_Type}','{$Car_Reg}', '{$Price}',CURDATE(), '{$Comments}');";
//we are using mysql_query function. it returns a resource on true else False on error
$retval = mysqli_query($conn, $sql);
if(! $retval )
{
  die('Could not enter data: ' . mysqli_error());
}
?>
					<script type="text/javascript">
						alert("New Record is Added thank you");
						window.location = "ticket.php";
					</script>
					<?php
//close of connection
mysqli_close($conn);
?>