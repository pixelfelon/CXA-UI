<?php
include('meta.php');
?>
<html>
	<head>
		<title>CXA UI Demo - Judging</title>
		<link rel="stylesheet" type="text/css" href="css/cxa-ui.css">
		<link rel="icon" type="image/png" href="./img/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div id="main" style="min-height: 460px;">
			<div id="topbar" class="loginbar noselect">
				<?php cxa_header() ?>
				<div id="refresher" style="margin-left: 8px;"></div>
			</div>
			<div class="welcomebar">
			Judging Mode<br/>
			</div>
			<div id="login" style="height: 312px; padding: 15px;">
				&nbsp;Team:<br/>
				<select id="teamlist" class="registertext" style="width: 270px;">
					<option>Thing A</option>
					<option>Thing B</option>
					<option>Thing C</option>
				</select>
				<br/><br/>
				<div class="ifbar" style="background:#5CA122">
					Judging Score
					<input id="score-i" type="number" class="registertext" pattern="[0-9]*"/><br/>
				</div>
				<br/>
			</div>
			<div id="bottombar" class="loginbar noselect" onclick="postCurrentJudging();">Save&nbsp;&nbsp;</div>
			<div id="footer" class="loginbar"><?php cxa_footer() ?></div>
		</div>
	</body>
</html>