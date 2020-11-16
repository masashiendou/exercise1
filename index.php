<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Code review exercise</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>Contact Us</header>
	<div class="container">
		<div class="box1">
			<li><a href="#!">Home</a></li>
			<li><a href="#!">Contact Us</a></li>
			<li><a href="#!">About Us</a></li>
		</div>
		<div class="box2">
			<p>Please leave us a message.</p>
			<img class="fit-picture"
				src="image/top.png"
				alt="top image">
		</div>
		<div class="box3">
			<form>
				<ul>
					<li>
						<label>Full Name</label>
						<input type="text" id="form" placeholder="Your name..."></input>
					</li>
					<li>
						<label>Country</label>
						<select>
							<option value="1">Australia</option>
							<option value="2">Japan</option>
							<option value="3">Philippine</option>
						</select>
					</li>
					<li>
						<label>Subject</label>
						<textarea placeholder="Write something..."></textarea>
					</li>
					<li>
						<input type="submit" id="button" value="submit"></input>
					</li>
				</ul>
			</form>
		</div>
	</div>
	<footer>All Rights Reserved | Copyright 2020</footer>
	<script src="js/main.js"></script>
	<script>
		'use strict';
	</script>
</body>
</head>
