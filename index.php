<?php
	require 'includes/dbh.inc.php'
?>
<!DOCTYPE HTML>
<!--
	Paradigm Shift by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<?php
			$ip = $_SERVER['REMOTE_ADDR'];
			echo("<p style='text-align:center;margin:0;'>Your IP is $ip</p>")
		?>
		<title>Quiz</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/quiz.css" />
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Intro -->
					<section class="intro">
						<header style="height: 100vh;text-align:center;">
							<h4>What do you think of immediately when you hear the words <i>Peer Pressure</i></h4>
							<form action="includes/castvote.inc.php" method="POST" style="display:flex;flex-flow:column;">
							<div style="display:flex;justify-content:space-between;margin:0 05%;">
								<div>
								<input type="radio" name="ui" id="bad" value="bad">
								<label for="bad">Bad</label>
								</div>
								<div>
								<input type="radio" name="ui" id="good" value="good">
								<label for="good">Good</label>
								</div>
							</div>
								<br> 

								<button type="submit" disabled="true">Submit</button>
							</form>
							<ul class="actions">
								<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
					</section>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			<script>$('input:radio').on('click', function(){
				$('button').attr('disabled', false)
			});
			</script>
	</body>
</html>