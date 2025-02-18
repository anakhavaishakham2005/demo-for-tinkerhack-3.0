<?php include('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Lost Item Post</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <h1>Submit a Lost Item</h1>
    <form action="submit_post.php" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="year">Year:</label>
        <select id="year" name="year">
            <option value="1">First</option>
            <option value="2">Second</option>
            <option value="3">Third</option>
            <option value="4">Fourth</option>
        </select><br><br>

        <label for="dept">Department:</label>
        <select id="dept" name="dept">
            <option value="cs1">CS1</option>
            <option value="cs2">CS2</option>
            <option value="it">IT</option>
            <option value="ece">ECE</option>
        </select><br><br>

        <label for="images">Upload Images:</label>
        <input type="file" id="images" name="images[]" accept="image/*" multiple><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="6" cols="50" required></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
