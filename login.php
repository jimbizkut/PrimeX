<html>
<head>
   <style>
    div.ex
     {
      width:400px;
      padding:3px;
      border:5px silver;
      margin:0px;
     }
   </style>
  <title>Login page</title>
</head>
<body>
	<table align="center" border="0" bgcolor="3a4c38" width="640" cellpadding="10" cellspacing="0" height="725">
          <tr>
            <td colspan="3" height="2"><img src="banner.gif"></td>
          </tr>
          <tr>
            <td colspan="3" bgcolor="#FF0000" height="1" align="center">
		<font size="4">
         <a href="index.php">Home</a> |  
      
          </font>
            </td>
          </tr>
          <tr>
            <td width="25%" bgcolor="#FFFFFF" >&nbsp;&nbsp;</td>
            <td width="50%" align="center" bgcolor="#3a4c38">
<div class="ex">
	<form name="login" action="processlogin.php" method="POST">
	   <table width="338" height="132" border="0" bgcolor="silver">
	    <h2><b>Admin Control Panel</b></h2>
	    <tr>
	     <td width="69" height="43" bgcolor="#FFFFFF">User name</td>
	     <td width="259" bgcolor="#FFFFFF"><INPUT type="text" name="Username" id="Username"/></td>
	    </tr>
	    <tr>
	     <td height="36" bgcolor="#FFFFFF">Password</td>
	     <td bgcolor="#FFFFFF"><input type="password" name="Password"  id="Password"/></td>
	    </TR>
	    <TR>
	     <td height="28" colspan="2" align="center" bgcolor="#FFFFFF"><br/><INPUT type="submit" value="LOGIN" /></td>
	    </tr>
	   </table>
	</form>
</div>
            </td>
            <td width="25%" bgcolor="#FFFFFF" >&nbsp;&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" align="center" bgcolor="#3a4c38" height="1">
					- Place copyrights here
            </td>
          </tr>
	</table>
</body>
</head>
</html>