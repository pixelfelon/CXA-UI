<?php
include('meta.php');
?>
<html>
	<head>
		<title>CXA UI Demo - Menu</title>
		<link rel="stylesheet" type="text/css" href="css/cxa-ui.css">
		<link rel="icon" type="image/png" href="./img/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
		<script src="js/cxa-ui.js"></script>
	</head>
	<body>
		<div id="main">
			<div id="topbar" class="loginbar noselect"><?php cxa_header() ?></div>
			<?php
				if(isset($_SESSION['welcomed'])){
					echo '<div id="welcomebar" class="welcomebar" style="display:none">';
				}else{
					echo '<div id="welcomebar" class="welcomebar">';
					echo "<i>Welcome,</i> user.<br/>";
					$_SESSION['welcomed']="yes";
				}
				echo '</div>';
			?>
			<div id="landing">
				<a class="action" href="./index.php">
					Back to Home
				</a>
				<div class="action drawer-handle" id="dh-stuff">
					Stuff
				</div>
				<div class="drawer" id="d-stuff">
					<a class="action stored" href="./index.php">
						Thing 1
					</a>
					<a class="action stored" href="./index.php">
						Thing 2
					</a>
					<div class="action stored tbi">
						Thing 3
					</div>
				</div>
				<div class="action drawer-handle" id="dh-things">
					Things
				</div>
				<div class="drawer" id="d-things">
					<a class="action stored" href="./judging.php">
						Judging
					</a>
					<a class="action stored" href="./scoring.php">
						Scoring
					</a>
					<a class="action stored" href="./register.php">
						Registration
					</a>
				</div>
				<a class="action" href="./login.php">
					Logout
				</a>
			</div>
			<div id="footer" class="loginbar"><?php cxa_footer() ?></div>
		</div>
	</body>
</html>