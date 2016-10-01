<?php
include('meta.php');
if(!isset($registererror)){
	$registererror='Error text shows here.';
}
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
			<div id="login" style="height:300px;">
					&nbsp;Your (Real) Name:<br/>
					<input type="text" name="name" class="registertext"/><br/>
					&nbsp;Email Address:<br/>
					<input type="text" name="email" class="registertext"/><br/>
					&nbsp;Username:<br/>
					<input type="text" name="username" class="registertext"/><br/>
					&nbsp;Password:<br/>
					<input type="password" name="password" class="registertext"/><br/>
					&nbsp;Confirm Password:<br/>
					<input type="password" name="password_conf" class="registertext"/><br/>
					<?php
					if($registererror){
						echo "<div id=\"loginerror\">".$registererror."</div>";
					}
					?>
					<input  type="submit" style="position: absolute; height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" tabindex="-1"/>
			</div>
			<div id="bottombar" class="loginbar noselect" onclick="document.getElementById('main').submit(); return false;">Register&nbsp;&nbsp;</div>
			<div id="footer" class="loginbar" ><?php cxa_footer() ?></div>
		</form>
	</body>
</html>