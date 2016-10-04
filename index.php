<!DOCTYPE html>
<html lang="se">

<head>
	<title>HTML5/CSS3 Responsive Theme</title>
	<meta charset="utf-8"/>

	<link rel="stylesheet" href="layout.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="body">

	<header class="mainHeader">
		<nav><ul>
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">About us</a></li>
			<li><a href="#">Calendar</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="touchController.html">Drone</a></li>
		</ul></nav>
	</header>

	<div class="mainContent">
		<div class="content">
			<article class="topContent">
				<header>
						<h2<a href="#" title="First Post">First Post</a></h2>
				</header>
				<footer>
					<p class="post-info"> Submitted by me on 2016-09-20</p>
				</footer>
				<content>
					<button type="button"
					onclick="document.getElementById('demo').innerHTML = Date()">
				Click me to display Date and Time.</button>

					<p id="demo"></p>
					<?php echo "HellO WorlD"; ?>
					<p>Once upon a time, a pieru was released from two buttcheeks. A new
					princess was born - Heini.</p>
				</content>
			</article>

			<article class="bottomContent">
				<header>
						<h2<a href="#" title="Second Post">Second Post</a></h2>
				</header>
				<footer>
					<p class="post-info"> Submitted by me on 2016-09-19 </p>
				</footer>
				<content>
					<p>Once upon a time, a pieru was released from two buttcheeks. A new
					princess was born - Heini.
					Once upon a time, a pieru was released from two buttcheeks. A new
					princess was born - Heini.
					Once upon a time, a pieru was released from two buttcheeks. A new
					princess was born - Heini.
					Once upon a time, a pieru was released from two buttcheeks. A new
					princess was born - Heini.</p>
				</content>
			</article>
		</div>
	</div>

	<aside class="top-sidebar">
		<article>
			<h2> Top Sidebar</h2>
			<p> Lorem ipsum peppuliini. Han machi parriso juliona ed pri deterium. </p>
		</article>
	</aside>
	<aside class="middle-sidebar">
		<article>
			<h2> Middle Sidebar</h2>
			<p> Lorem ipsum peppuliini. Han machi parriso juliona ed pri deterium. </p>
		</article>
	</aside>
	<aside class="bottom-sidebar">
		<article>
			<h2> Bottom Sidebar</h2>
			<p> Lorem ipsum peppuliini. Han machi parriso juliona ed pri deterium. </p>
		</article>
	</aside>

	<footer class="main-footer">
		<p> Copyright 2016 &copy; Christian Olsson and Heini Sihvonen </p>
	</footer>




</body>
</html>
