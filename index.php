<?php
    session_start();

	if((isset($_SESSION['islogedin']))&&($_SESSION['islogedin']==true))
	{
		
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous"/>
<link rel="icon" href="zdj/zeszen.png"/>
<script src="timer.js"></script>


<script>
function bajojajo()
{
    var logedin = 1;
	var islogedin = <?php echo $_SESSION['islogedin']?>;

    if(logedin==islogedin)
    {
        document.getElementById("bank").style.display = "block";
	}
}
</script>
<title>Bank</title>
<icon></icon>

</head>
<body onload="bajojajo(); timer()">
	<div class="container">
		<div class="upbar">  
		<a href="index.php"><i class="fas fa-home"></i></a>			
		<div id="timer"></div>
        <a href="login.php"><i class="fas fa-user-circle"></i></a>
		</div>

		<div class="newacc">
			<span class="newacctxt">Brak konta? Nie martw się, załóż je <a href="rejestracja.php">TUTAJ!</a></span>
		</div>
		
		<div class="bar">
		
			<a href="bank.php" alt="Dodaj fundusze">
			<i class="fas fa-plus"></i>
			</a>

			<a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
		
		</div>

		<div id="bank">
		
			<?php

			echo "<p>Witaj ".$_SESSION['user']."!</p>";
			echo "<p><b>Złoto: ".$_SESSION['zl'];
			echo " | Dary Boże: ".$_SESSION['darybosze']."</b></p>";

			echo "<p><b>E-mail: </b>".$_SESSION['email'];
			echo "<p><b>Dni premium zostało: </b>".$_SESSION['dnipremium'];

			?>

		</div>

		<div style="clear:both;"></div>

		<div class="footer">
			Chyba ty ( ͡° ͜ʖ ͡°) &copy <a href="zeszen.html">Zeszen</a> 2021
		</div>

	</div>
</body>
</html>
