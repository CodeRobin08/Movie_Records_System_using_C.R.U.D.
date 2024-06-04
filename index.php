<!DOCTYPE html>
<html>
<head>
<title>Movie Records System</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    h1 {
        color: #333;
        margin: 20px 0;
    }
    form {
        background: #fff;
        padding: 20px;
        margin: 20px 0;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        border-radius: 5px;
        width: 300px;
    }
    label {
        display: block;
        margin: 10px 0 5px;
    }
    input[type="text"],
    input[type="number"],
    select {
        width: calc(100% - 22px);
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    input[type="submit"] {
        background: #007BFF;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background 0.3s;
        width: 100%;
    }
    input[type="submit"]:hover {
        background: #0056b3;
    }
    table {
        width: 800px;
        border-collapse: collapse;
        margin: 20px 0;
        background: #fff;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        border-radius: 5px;
        overflow: hidden;
        margin-left: 40px; /* Add margin to move the table to the right */
    }
    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background: #007BFF;
        color: #fff;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    a {
        color: #007BFF;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
    .actions {
        display: flex;
        gap: 10px;
    }
    .container {
        display: flex;
        justify-content: space-between;
        width: 1000px;
        padding: 20px;
    }
</style>
</head>
<body>
    <h1>Movie Records System</h1>
    <div class="container">
        <div>
            <form method="POST" action="add.php">
                <label>Movie Name:</label><input type="text" name="movie_name" required>
                <label>Year:</label><input type="number" name="year" required>
                <label>Resolution:</label>
                <select name="resolution" required>
                    <option value="720p">720p</option>
                    <option value="1080p">1080p</option>
                </select>
                <label>Quality:</label>
                <select name="quality" required>
                    <option value="BluRay">BluRay</option>
                    <option value="Webrip">Webrip</option>
                </select>
                <label>Country Name:</label><input type="text" name="country_name" required>
                <label>Location:</label><input type="text" name="location" required>
                <input type="submit" name="add" value="Add Movie">
            </form>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Movie Name</th>
                        <th>Year</th>
                        <th>Resolution</th>
                        <th>Quality</th>
                        <th>Country Name</th>
                        <th>Location</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include('conn.php');
                        $query = mysqli_query($conn, "SELECT * FROM `movie`");
                        while($row = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $row['movie_name']; ?></td>
                                <td><?php echo $row['year']; ?></td>
                                <td><?php echo $row['resolution']; ?></td>
                                <td><?php echo $row['quality']; ?></td>
                                <td><?php echo $row['country_name']; ?></td>
                                <td><?php echo $row['location']; ?></td>
                                <td class="actions">
                                    <a href="edit.php?id=<?php echo $row['movieid']; ?>">Edit</a>
                                    <a href="delete.php?id=<?php echo $row['movieid']; ?>">Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
