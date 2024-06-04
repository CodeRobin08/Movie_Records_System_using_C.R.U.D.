<?php
	include('conn.php');
	$id = $_GET['id'];

	$movie_name = $_POST['movie_name'];
	$year = $_POST['year'];
	$resolution = $_POST['resolution'];
	$quality = $_POST['quality'];
	$country_name = $_POST['country_name'];
	$location = $_POST['location'];

	mysqli_query($conn, "UPDATE `movie` SET movie_name='$movie_name', year='$year', resolution='$resolution', quality='$quality', country_name='$country_name', location='$location' WHERE movieid='$id'");
	header('location:index.php');
?>
