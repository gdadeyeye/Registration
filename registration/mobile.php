<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// information and data.
if (isset($_POST['submit_info'])){
// receive all input values from the form
$mycar =  $_POST['myvehicle'];
$mymodel =  $_POST['mymodel'];
$year =  $_POST['year'];

$query = "INSERT INTO vehicles (Make,model,year) VALUES('".$mycar."', '".$mymodel."', '".$year."')";
mysqli_query($db, $query);
$_SESSION['success'] = "Thank you for using this service.";
header('location: index.php');
}

?>