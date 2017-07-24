<html>
<head>
  <title>View Ticket </title>
   <link rel="stylesheet" media="screen" href="login.css" >
</head>
<body>
	<table align='center' border='0' bgcolor='green' width='1200' cellpadding='8' cellspacing='0' height='200'>
          <tr>
            <td bgcolor='#999999' valign='center'>

<?php

$host="localhost";
$username="primex";
$password="123456";
$db_name="primex";
$tbl_name="ticketing";

mysql_connect("$host","$username","$password") or die("cannot connect");
mysql_select_db("$db_name")or die("cannot connect");

$sel= mysql_query("select * from $tbl_name");
echo"<table align='center' width='100%' border='0' cellpadding='3' cellspacing='2' bgcolor='gre'>
<caption><h3>TICKET  INFORMATION</h3></caption>
<tr bgcolor='green'>
<th width='3%'> id</th>
<th width='10%'>Name</th>
<th width='15%'>Service Type</th>
<th width='10%'>Car Reg</th>
<th width='10%'>Price</th>
<th width='10%'>Date In</th>
<th width='10%'>Comments</th>
</tr>";

   while($row=mysql_fetch_array ($sel))
{
echo "<tr bgcolor='white'>";

echo  "<td width='3%'>".$row ['ID']."</td>";
echo  "<td width='10%'>".$row ['Name']."</td>";
echo  "<td width='7%'>".$row ['Service_Type']."</td>";
echo  "<td width='10%'>".$row ['Car_Reg']."</td>";
echo  "<td width='10%'>".$row ['Price']. "</td>";
echo  "<td width='7%'>".$row ['Date_In']."</td>";
echo  "<td width='10%'>".$row ['Comments']."</td>";


echo "</tr>";
}
echo"</table>";

?>
<br/>
</td>
</tr>

<br/>
			</td>
          </tr>
          <tr>
			<td align="center"><a href="adminpanel.php" target="_parent">Panel Admin <b>|</b></a>
			<a href="index.php" target="_parent">Log out</a></td>
		
          </tr>
          <tr>
            <td align='center' bgcolor='#3a4c38' height='1'>
					- Place copyrights here
            </td>
          </tr>
	</table>
</body>
</head>
</html>