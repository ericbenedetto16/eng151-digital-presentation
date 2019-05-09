<!DOCTYPE HTML>
<html>
	<head>
		<title>Peer Pressure</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<?php
			if(!empty($_GET['error'])) {
				echo("
				<div class='alert alert-danger m-0 text-center fade show' role='alert'>
				A vote with your IP was already registered!
				</div>
				<script>setTimeout(function() {
					$('.alert').alert('close');	
				}, 4000);
				</script>");
			}
		?>
		<!-- Wrapper -->
		<div id="votes"></div>
			<div id="wrapper">

				<!-- Intro -->
					<section class="intro">
						<header>
							<h1>Peer Pressure</h1>
							<p>A driving force in most teenage Decisions.</p>
							<ul class="actions">
								<li><a href="#first" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
						<div class="content">
							<span class="image fill" data-position="center"><div style="width:100%;height:100%;background: url('images/pic01.png');background-repeat: no-repeat;background-size: contain;background-position: center;"></div></span>
						</div>
					</section>

				<!-- Section -->
					<section id="first">
						<header class="text-left">
							<code style="font-size:1rem;">const peerPressure = 'bad';</code>
							<ul class="actions">
								<li><a href="#second" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
						<div class="content">
							<p>Most people are inclined to believe peer pressure is a <strong>bad</strong> influence amongst most chains of friends, and just in general from day to day life. However, as Bruno et al. proved though, peer pressure is <strong>not</strong> always the negative beast it is made out to be. <a href="http://repositorio.udesa.edu.ar/jspui/bitstream/10908/11962/1/%5bP%5d%5bW%5d%20doc125.pdf" target=_blank>Read More</a></p>
							<span class="image main"><img src="images/pic02.jpg" alt="" /></span>
							<small>(Google Images)</small>
						</div>
					</section>

				<!-- Section -->
					<section id="second">
						<header class="text-left">
								<code style="font-size:1rem;">$(audience).ready(function(){
								<br>&nbsp;&nbsp; alert("No"); <br>
								)};</code>
							<ul class="actions">
								<li><a href="#third" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
						<div class="content">
							<p>The main contributors to the negative image of peer pressure appear to be:</p>
							<ul class="feature-icons">
								<li class="icon fa-beer">Underaged Drinking</li>
								<li class="icon fa-envira">Drug Abuse/Introduction to Illegal Substances</li>
								<li class="icon fa-balance-scale">Group Criminal Activities</li>
								<li class="icon fa-book">Bad Grade Performance</li>
							</ul>
							<p>As seen on websites, such as <a href="https://raisingchildren.net.au/teens/behaviour/peers-friends-trends/peer-influence" target=_blank><i>raisingchildren.net.au</i></a>.</p>
						</div>
					</section>

				<!-- Section -->
				<section id="third">
					<header class="text-left">
						<code style="font-size:1rem;">error: constant cannot change through re-assignment</code>
						<ul class="actions">
								<li><a href="#fourth" class="arrow scrolly"><span class="label">Next</span></a></li>
						</ul>
					</header>
					<div class="content">
						<p><strong>The public is not easily persuaded.</strong> It can be hard to reach other resources such as <a href="https://secureteen.com/peer-pressure/friendship-and-peer-pressure-a-positive-mix/" target=_blank><i>secureteen.com</i></a> in order to see the potential upsides of peer pressure.</p>
						<img width="100%" height="100%" src="https://i0.wp.com/raisingteenstoday.com/wp-content/uploads/2018/05/Juuling-9.jpg" alt="">
						<small>(Google Images)</small>
					</div>
				</section>
					<!-- Section -->
					<section id="fourth">
						<header class="text-left">
							<h3>The Bad</h3>
							<ul class="actions">
								<li><a href="#fifth" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
						<div class="content">
							<iframe width="100%" style="min-height:500px;" src="https://www.youtube.com/embed/sJluCt1vKIs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</section>
					<!-- Section -->
					<section id="fifth">
						<header class="text-left">
							<h3>The Good</h3>
							<ul class="actions">
								<li><a href="#sixth" class="arrow scrolly"><span class="label">Next</span></a></li>
							</ul>
						</header>
						<div class="content">
							<iframe width="100%" style="min-height:500px;" src="https://www.youtube.com/embed/1fG0nOS1Vns" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</section>

					<!-- Section -->
					<section id="sixth">
						<header class="text-left">
							<code>
								<span style="background:none;text-decoration:line-through;">const peerPressure = 'bad';</span>
								<br>
								&nbsp;&nbsp;let influence;
								<br>
								&nbsp;&nbsp;let peerPressure;
								<br>
								&nbsp;&nbsp;switch(influence) {
									<br>
									&nbsp;&nbsp;&nbsp;&nbsp;case(influence == 'negative'):
									<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peerPressure = 'bad';
									<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
									<br>
									&nbsp;&nbsp;&nbsp;&nbsp;case(influence == 'positive'):
									<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peerPressure = 'good';
									<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
									<br>
									&nbsp;&nbsp;&nbsp;&nbsp;default:
									<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peerPressure = 'letters';
									<br>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
									<br>
								&nbsp;}
							</code>
						</header>
						<div class="content">
							<h3>Works Cited</h3>
<pre>
Cardinale Lagomarsino, Bruno, et al. “Peer Pressure: Experimental Evidence
	From Restroom Behavior.” Economic Inquiry, vol. 55, no. 3, 2017, pp. 1579
	1584.
Kiran-Esen, Binnaz. “Analyzing Peer Pressure and Self-Efficacy
	Expectations Among Adolescents.” Social Behavior and Personality, vol.
	40, no. 8, 2012, pp. 1301–1309.
“Peer Pressure and Influence: Teenagers.” Raising Children Network, 10 Jan. 2019,
	raisingchildren.net.au/teens/behaviour/peers-friends-trends/peer-influence.
“Friendship and Peer Pressure: A Positive Mix?” Secureteen.com, www.secureteen.com/peer-pressure/friendship-and-peer-pressure-a-positive-mix/.

</pre>
						</div>
					</section>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			<script>
		setInterval(function() {
			$.ajax({
				url: 'includes/getvotes.inc.php',
				success: function(response) {
					$('#votes').html(response);
				}
			})
		},2000);

		</script>
		</body>
</html>