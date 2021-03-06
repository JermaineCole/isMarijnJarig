<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>Is Marijn vandaag Jarig?</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
	<?php include_once("analyticstracking.php") ?>
	<header></header>
	<main>

	 <nav class="orange lighten-3 " role="navigation">
		<div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Marijn</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="#">FAQ</a></li>
			</ul>

			<ul id="nav-mobile" class="side-nav">
				<ul class="collapsible" data-collapsible="accordion">
					<li>
						<h4 class="black-text" id="menuTitle">FAQ</h4>
					</li>
					<li>
						<div class="collapsible-header black-text flow-text">Wanneer is marijn jarig?</div>
						<div class="collapsible-body"><p class="black-text text-low">Ieder jaar op 8 Maart herdenken we de tragische gebeurtenis die de mensheid schockeerde, de geboorte van Matrijn.</p></div>
					</li>
					<li>
						<div class="collapsible-header black-text flow-text">Waarom is marijn jarig?</div>
						<div class="collapsible-body"><p class="black-text text-low">Het is belangrijk om ieder jaar terug te denken aan deze gebeurtenis. Zo kunnen we ons beter voorbereiden op tegenslagen in ons leven. We bouwen namelijk een tolerantie op door Marijns geboorte te herdenken.</p></div>
					</li>
					<li>
						<div class="collapsible-header black-text flow-text">Waarom is marijn geboren?</div>
						<div class="collapsible-body"><p class="black-text text-low">Nou als een man en vrouw van elkaar houden dan gaan ze ... Hebben je ouders al met je gesproken over de bloemetjes en bijtjes?</p></div>
					</li>
					<li>
						<div class="collapsible-header black-text flow-text">Kunnen we dit stoppen?</div>
						<div class="collapsible-body"><p class="black-text text-low">We zijn een tijd geleden begonnen met een handtekeningen actie en hebben al 8000 handtekeningen ingezameld. Helaas vertelde de regering ons dat ze hier vrij weinig aan kunnen veranderen. Mocht jij ideeën hebben om hier verandering in te brengen. Neem dan a.u.b. zo spoedig mogelijk contact met ons op.</p></div>
					</li>
				</ul>
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
	</nav>

	<div class="section no-pad-bot" id="index-banner">
		<div class="container">
			<div class="row">
				<div class="col s12 l6 offset-l3">
					<div class="card">
						<div class="card-image">
							<img id="marijnPic1" class="hide" src="img/matrijn.jpg">
							<img id="marijnPic2" class="hide" src="img/hotline.gif">
						</div>
						<div class="card-content">
							<span class="card-title">Is Marijn jarig vandaag?</span>
							<p class="grey-text">Marijn A.K.A. Matrijn, ginger en pleb</p>
						</div>
						<div class="card-action">
							<a id="ja" class=""></a>
							<a id="nee" class=""></a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div> 
</main>




<div class="container">
</div>
<br><br>

<div class="section">

</div>
</div>

<footer class="page-footer orange darken-3">
	<div class="container">
		<div class="row">
			<div class="col l6 s12">
				<h5 class="white-text">Dit domein is te koop. </h5>
				<p class="grey-text text-lighten-4">(behalve voor Marijn van Rijt)</p>
			</div>
			<div class="col l4 offset-l2 s12">
				<h5 class="white-text">Links</h5>
				<ul>
					<li><a class="grey-text text-lighten-3" href="http://idolsaudities.nl">Idolsaudities</a></li>
					<li><a class="grey-text text-lighten-3" href="http://sonnyluu.nl/Marijn/demo.html">Marijn fansite</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			© 2014 Copyright Text
			<a class="grey-text text-lighten-4 right" href="#!"></a>
		</div>
	</div>
</footer>


<!--  Scripts-->

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
	var d = new Date();
	var n = d.getDate();

	var z = new Date();
	var x = z.getMonth()+1;
	console.log("day is: " + n);
	console.log("month is: " + x);

	if (n == 8 && x == 3)
	{
		$('#ja').text("Ja");
		$('#nee').text("Zeker niet");
		$('#nee').addClass("grey-text text-lighten-2");
		$('#marijnPic2').removeClass("hide");
	}
	else
	{
		$('#ja').text("Ja");
		$('#ja').addClass("grey-text text-lighten-2");
		$('#nee').text("Zeker niet");
		$('#marijnPic1').removeClass("hide");
	};
</script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script>
	$(document).ready(function(){
		$('.collapsible').collapsible({
			accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
		});
	});
</script>

</body>
</html>
