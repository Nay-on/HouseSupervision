<script type="text/javascript" src="js/cookie.js"></script>

<?php
 
include('include/dbconnect.php');
 
// Escape user inputs for security
$username = $_GET['usern'];
$password = $_GET['psswd'];
$ip = ?><script>getCookie("shut");</script><?php;

//Execution du script python. Trame bien envoyée (confirmation wireshark)

exec('python shutdown.py '. $username . ' ' . $password . ' ' . $ip);

// Close connection
mysqli_close($db);

include('redirections/appRedirect.php');

?>