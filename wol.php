<?php
 
include('include/dbconnect.php');
 
// Escape user inputs for security
$mac = $_GET['mac'];

//Execution du script python. Trame bien envoyée (confirmation wireshark)

exec('python Wol.py '.$mac);

// Close connection
mysqli_close($db);

header('Location: app.php');

?>