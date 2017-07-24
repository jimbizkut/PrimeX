<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Car Wash</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<?php
	include("menu.php");
	?>
	<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Contact Info</h2>
					<ul class="contact">
						<li>
							<p>
								<span class="home"></span> <em> Car Wash</em> Nairobi, Address: 00100
							</p>
						</li>
						<li>
							<p class="phone">
								Phone: (+254) 000 222 999
							</p>
						</li>
						<li>
							<p class="fax">
								Fax: (+254) 000 222 988
							</p>
						</li>
						<li>
							<p class="mail">
								Email: info@carwash.co.ke
							</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="main">
				<h1>Contact</h1>
				<h2>Send Us a Quick Message</h2>
				<p>
					Reach us here:
				</p>
				<form action="conctactp.php" method="post" class="message">
					<label>First Name</label>
					<input type="text" reuired value="" name='f_name'>
					<label>Last Name</label>
					<input type="text" reuired value="" name='l_name'>
					<label>Email Address</label>
					<input type="text" reuired value="" name='e_address'>
					<label>Message</label>
					<textarea name='msg' reuired></textarea>
					<input type="submit" value="Send Message" name='submit'>
				</form>
			</div>
		</div>
	</div>
	<div id="footer">
		
			
		</div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="#" class="facebook"></a><a href="#" class="twitter"></a><a href="#" class="googleplus"></a><a href="#" class="pinterest"></a>
				</div>
				<p>
					- Place copyrights here
				</p>
			</div>
		</div>
	</div>
</body>
</html>
