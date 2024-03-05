
<?php
ob_start(); // turns on output buffering
session_start();

date_default_timezone_set("Asia/Kolkata"); // Set the default timezone

try {
    $con = new PDO("mysql:dbname=ytdb;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} // PDO = php database object
catch (PDOException $e) {
    exit("Connection failed: " . $e->getMessage());
}
?>
