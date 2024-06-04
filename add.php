<?php
	include('conn.php');

	$movie_name = $_POST['movie_name'];
	$year = $_POST['year'];
	$resolution = $_POST['resolution'];
	$quality = $_POST['quality'];
	$country_name = $_POST['country_name'];
	$location = $_POST['location'];

	mysqli_query($conn, "INSERT INTO `movie` (movie_name, year, resolution, quality, country_name, location) VALUES ('$movie_name', '$year', '$resolution', '$quality', '$country_name', '$location')");
	header('location:index.php');
?>
