<!--
judging.php - Example page for CXA UI web data framework demo.
Copyright (c) 2016 James Rowley

This file is part of CXA UI, which is licensed under the Creative Commons Attribution-NonCommercial-ShareAlike 3.0 United States License.
You should have received a copy of this license with CXA UI.
If not, to view a copy of the license, visit https://creativecommons.org/licenses/by-nc-sa/3.0/us/legalcode
-->

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