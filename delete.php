<?php
	$id = $_GET['id'];
	include('conn.php');
	mysqli_query($conn, "DELETE FROM `movie` WHERE movieid='$id'");
	header('location:index.php');
?>
