<!DOCTYPE html>
<html>
<?php
	$timeDay = "";
	$time = date("H:i");
	if ($time > "00:00" && $time < "05:59") {
		$timeDay = "Good night";
		$timeBackground = "night";
	}
	elseif ($time > "06:00" && $time < "11:59") {
		$timeDay = "Good morning!";
		$timeBackground = "morning";
	}
	elseif ($time > "12:00" && $time < "17:59") {
		$timeDay = "Good afternoon!";
		$timeBackground = "afternoon";
	}
	elseif ($time > "18:00" && $time < "23:59") {
		$timeDay = "Good evening!";
		$timeBackground = "evening";
	}
?>
<head>
	<title>
		<?php 
			echo $timeDay; 
		?>
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="images/icon.gif">
</head>
<body class=<?php echo $timeBackground;?>>
	<main>
		<h1 class="welcome">
			<?php
				echo $timeDay;
			?>
		</h1>
		<h2>The current time is: </h2>
		<h1 class="time">
			<?php
				echo $time;
			?>
		</h1>
		<a href="javascript:javascript:history.go(-1)">back</a>
	</main>
</body>
</html>