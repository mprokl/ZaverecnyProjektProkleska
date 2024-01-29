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