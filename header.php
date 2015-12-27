<?
	include "functions.php";
	$filename = basename($_SERVER['PHP_SELF']);
	$color = list_color();
	shuffle($color);
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Adelle Marcero</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>
<body>

	<div class="logo">
		<a href="./"><img src="img/logotype.svg" alt="header logo" class="shadow scale-with-grid"></a>
	</div>

	<div class="container header">
		<div class="sixteen columns">
			<ul>
				<li><a <? if ($filename=="news.php") { echo "class='active'"; } ?>href="news">news</a>
				<li><a <? if ($filename=="people.php") { echo "class='active'"; } ?>href="people">people</a>
				<li><a <? if ($filename=="places.php") { echo "class='active'"; } ?>href="places">places</a>
				<li><a <? if ($filename=="etsy.php") { echo "class='active'"; } ?>href="etsy">etsy</a>
				<li><a <? if ($filename=="about.php") { echo "class='active'"; } ?>href="about">about</a>
			</ul>
		</div>
	</div>