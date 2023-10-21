<?php
function getDbConnection() {
    $db = new mysqli("localhost", "root", "", "insurance");
    if ($db->connect_error) {
        // an attempt to connect to the database has failed //
        die("Connection failed: " . $db->connect_error);
    }
    return $db;
}
        // try to connect to the database //
function getCustomers() {
    $db = getDbConnection();
    $sql = "SELECT * FROM customers";
    $result = $db->query($sql);

    if ($result === false) {
        // command to get data from the database has failed //
        die("Error: Cannot get data from the database.");
    }

    return $result;
}
        // data insertion to the databse //
function insertCustomer($name, $surname, $age, $phoneNumber) {
    $db = getDbConnection();
    $sql = "INSERT INTO customers (name, Surname, age, phone_number) VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("ssss", $name, $surname, $age, $phoneNumber);
    $stmt->execute();
}
?>
