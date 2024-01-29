<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<form action="index.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="surname">Surname:</label>
    <input type="text" id="surname" name="surname">
    <label for="age">Age:</label>
    <input type="number" id="age" name="age">
    <label for="phone_number">Phone Number:</label>
    <input type="number" id="phone_number" name="phone_number">
    <input type="submit" value="Submit">
</form>
</body>
</html>