<?php
require_once 'model.php';
require_once 'view.php';
    // get the data from the form after submission //
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];            
    $surname = $_POST['Surname'];      
    $age = $_POST['age'];
    $phoneNumber = $_POST['phone_number'];
    // insert data into the database //
    insertCustomer($name, $surname, $age, $phoneNumber);
    // refreshing the page after data insertion //
    header("Location: index.php");
    exit;
}

$customers = getCustomers();

?>
