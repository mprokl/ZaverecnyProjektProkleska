<?php
require_once 'model.php';
require_once 'form.php';
require_once 'data_display.php';
    // get the data from the form after submission //
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']); // request for name //
    $surname = htmlspecialchars($_POST['surname']); // request for surname //
    $age = htmlspecialchars($_POST['age']); // request for age //
    $phoneNumber = htmlspecialchars($_POST['phone_number']); // request for phone number //
    // insert data into the database //
    insertCustomer($name, $surname, $age, $phoneNumber);
    // refresh page after data insertion //
    header("Location: index.php");
    exit;
}

$customers = getCustomers();

?>
