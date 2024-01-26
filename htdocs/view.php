<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <!-- A simple form for user to fill -->
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

<?php
    // try to connect to the database. // 
    $db = new mysqli("localhost", "root", "", "insurance");

    // was the connection succesfull? //
    if ($db->connect_error) {
      die("Connection failed: " . $db->connect_error);
    }

    // get data from the database //
    $sql = "SELECT * FROM customers";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
      // give data from the database to each row to show them //
      ?>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Age</th>
            <th>Phone Number</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?php echo $row["name"]; ?></td>
              <td><?php echo $row["surname"]; ?></td>
              <td><?php echo $row["age"]; ?></td>
              <td><?php echo $row["phone_number"]; ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
      <?php
    } else {
      echo "No results";
    }

    // shut down the connection to the database //
    $db->close();
    ?>

</body>
</html>
