<?php
require_once 'model.php';
require_once 'form.php';
require_once 'data_display.php';
    // get the data from the form after submission //
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $age = htmlspecialchars($_POST['age']);
    $phoneNumber = htmlspecialchars($_POST['phone_number']);
    // insert data into the database //
    insertCustomer($name, $surname, $age, $phoneNumber);
    // refreshing the page after data insertion //
    header("Location: index.php");
    exit;
}

$customers = getCustomers();

?>
