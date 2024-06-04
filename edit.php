<?php
	include('conn.php');
	$id = $_GET['id'];
	$query = mysqli_query($conn, "SELECT * FROM `movie` WHERE movieid='$id'");
	$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Movie</title>
</head>
<body>
	<h2>Edit Movie</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Movie Name:</label><input type="text" value="<?php echo $row['movie_name']; ?>" name="movie_name" required>
		<label>Year:</label><input type="number" value="<?php echo $row['year']; ?>" name="year" required>
		<label>Resolution:</label>
		<select name="resolution" required>
			<option value="720p" <?php if($row['resolution'] == '720p') echo 'selected'; ?>>720p</option>
			<option value="1080p" <?php if($row['resolution'] == '1080p') echo 'selected'; ?>>1080p</option>
		</select>
		<label>Quality:</label>
		<select name="quality" required>
			<option value="BluRay" <?php if($row['quality'] == 'BluRay') echo 'selected'; ?>>BluRay</option>
			<option value="Webrip" <?php if($row['quality'] == 'Webrip') echo 'selected'; ?>>Webrip</option>
		</select>
		<label>Country Name:</label><input type="text" value="<?php echo $row['country_name']; ?>" name="country_name" required>
		<label>Location:</label><input type="text" value="<?php echo $row['location']; ?>" name="location" required>
		<input type="submit" name="submit" value="Update">
		<a href="index.php">Back</a>
	</form>
</body>
</html>
