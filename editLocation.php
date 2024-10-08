<?php
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $locationName = $_POST['Name'];
    $locationAddress = $_POST['Address'];
    $managerFName = $_POST['ManagerFName'];
    $managerLName = $_POST['ManagerLName'];
    $managerEmail = $_POST['ManagerEmail'];
    $managerNumber = $_POST['ManagerNumber'];
    $locationMaxCap = $_POST['MaxCapacity'];

    $location = new Location($id, $locationName, $locationAddress, $managerFName, $managerLName, $managerEmail, $managerNumber, $locationMaxCap);

    $connection = Connection::getInstance();
    $gateway = new LocationTableGateway($connection);

    $gateway->update($location);

    header('Location: viewLocations.php');
} else {
    die("Illegal request");
}
?>


