<head>
	<!-- external includes -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- internal includes -->
	<link rel="stylesheet" href="../css/main.min.css">
	<script src="../scripts/UI.js"></script>

    <title>Inforca</title>
<head>

<header>
	<div class="navigation">

		<h1>
			<a href="index.php">INFORCA</a>
		</h1>

		<div class="nav-wide">

			<div class="nav-bar">
				<a href="index.php">HOME</a>
				<a href="#">OVERVIEW</a>
				<a href="#">PLANNER</a>
			</div>

			<div class="empty">
				<div class="welcome">

					<?php
						session_start();

						//if logged in say hello, else give the option to login
						if (isset($_SESSION["username"])){
							echo
								'<div>
									Hi <a href="./account.php">'.$_SESSION["username"].'</a>
								</div>
								<div>
									<a href="../scripts/logoutGeneral.php">logout</a>
								</div>';

						} else {
							echo ' <div><a href="account.php"> login</a></div> ';
						}
					?>

				</div>
			</div>
		</div>

		<div class="nav-burger">
			<div class="burger-icon">

				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>

			</div>

			<div class="burger-content">
				<div class="nav-bar">
					<a href="#">HOME</a>
					<a href="#">OVERVIEW</a>
					<a href="#">PLANNER</a>
				</div>

				<div class="welcome">
					<div>
						Hi User sdhfgasdggdasgasdsadfhjgdsaerhhadf
					</div>
					<div>
						logout
					</div>
				</div>
			</div>
		</div>
	</div>

</header>
