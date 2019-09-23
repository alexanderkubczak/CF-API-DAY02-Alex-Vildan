<?php

require_once 'restfull.php';
$url = 'http://feeds.bbci.co.uk/news/technology/rss.xml';
$response = curl_get($url);
$xml = simplexml_load_string($response);
foreach ($xml->channel->item as $item) {
echo '<a href="'.$item->link.'" target="_blank">'.$item->title.'</a><br>';
}



?>#
<!-- 
<?php  
	// require_once 'jokes.php';
?> -->



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Newspaper CF</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<img class="headerLogo" src="logo-newspaper-cf.png" alt="">
		<img class="headerLogo2" src="banner-1.png" alt="">
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="index.html">Tech</a></li>
				<li><a href="index.html">Culture</a></li>
				<li><a href="index.html">Video</a></li>
			</ul>
		</nav>
	</header>
	<p><?php
		echo '<a href="'.$item1->link.'" target="_blank">'.$item1->title.'</a><br>';
		?></p>
	<p class="date">Friday, 12.07.2019</p>
	<main>
		<h1>Top news</h1>
		<div class="articleWrapper">
			<article class="article">

				


				<img class="image" src="nasa.png" alt="article">
				<h5><?php
				 echo '<a href="'.$item->link.'" target="_blank">'.$item->title.'</a><br>';
				 ?></h5>
				</a>
			</article>
			<article class="article">
				<a href="article.html">
					<img class="image" src="eu.png" alt="">
					<h5>EU approves controversial Copyright Directive, including internet 'link tax'</h5>
				</a>
			</article>
			<article class="article">
				<a href="article.html">
					<img class="image" src="jeff.png" alt="">
					<h5>Jeff Bezos is going to create schools where 'the child is the customer'</h5>
				</a>
			</article>
			<article class="article">
				<a href="article.html">
					<img class="image" src="banner-mobile-fswd.png" alt="FSWD">
				</a>
			</article>
			<h1 id="popular">Popular</h1>
			<article class="article">
				<a href="article.html">
					<img class="image" src="polar.png" alt="">
					<h5>Polar's new fitness watch will measure the wattage of your exercise</h5>
				</a>
			</article>
			<article class="article">
				<a href="article.html">
					<img class="image" src="musk.jpg" alt="">
					<h5>Elon Musk smokes marijuana live on web show</h5>
				</a>
			</article>
			<article class="article">
				<a href="article.html">
					<img class="image" src="snowden.jpg" alt="">
					<h5>Edwward Snowden surveillance powers ruled unlawful</h5>
				</a>
			</article>
			<a href="https://codefactory.wien/de/home/"><img class="bannerDev" src="banner-3.png">
			</a>
			<article class="article">
				<a href="article.html">
					<img class="image" src="iphone.png" alt="">
					<h5>How to preorder the iPhone XS. XS Max, and XR</h5>
				</a>
			</article>
			<article class="article">
				<a href="article.html">
					<img class="image" src="smart.png" alt="">
					<h5>This smart power strip lets you individually control each outlet</h5>
				</a>
			</article>
			<article class="article">
				<a href="article.html">
					<img class="image" src="one.png" alt="">
					<h5>OnePlus announces super cheap USB-C earbuds</h5>
				</a>
			</article>
			<article class="article">
				<a href="article.html">
					<img class="image" src="phone.png" alt="">
					<h5>Spotify raises limit for offline downloads to 10,000 songs per device</h5>
				</a> 
			</article>
		</div>
		<a href="https://codefactory.wien/de/home/"><img class="FSWDbanner" src="banner-2.png"></a>
	</main>
	<footer>
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="index.html">Tech</a></li>
				<li><a href="index.html">Culture</a></li>
				<li><a href="index.html">Video</a></li>
			</ul>
		</nav>
		<img class="headerLogo3" src="logo-newspaper-cf.png" alt="">
		<p class="Vildan">Vildan Günay - CodeFactory 2018</p>
	</footer>
</body>
</html>