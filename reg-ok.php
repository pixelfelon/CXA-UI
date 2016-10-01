<?php
include('meta.php');
?>
<html>
	<head>
		<title>CXA UI Demo - Registration</title>
		<link rel="stylesheet" type="text/css" href="css/cxa-ui.css">
		<link rel="icon" type="image/png" href="./img/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<form action="register.php" method="post" id="main">
			<div id="topbar" class="loginbar noselect"><?php cxa_header() ?></div>
			<div id="login">
					<div id="loginerror" style="background: #2a2; color: #eee">Your request has been recieved and should be reviewed within 24 hours.</div>
			</div>
			<div id="bottombar" class="loginbar noselect" onclick="window.location.assign('./index.php')">Back to Home&nbsp;&nbsp;</div>
			<div id="footer" class="loginbar" ><?php cxa_footer() ?></div>
		</form>
	</body>
</html>