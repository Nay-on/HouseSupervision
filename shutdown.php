<script type="text/javascript" src="js/cookie.js"></script>

<?php
 
include('include/dbconnect.php');
 
// Escape user inputs for security
$username = $_GET['usern'];
$password = $_GET['psswd'];
if(isset($_COOKIE["shut"])){ 
$ip = $_COOKIE["shut"];
}
//Execution du script python. Trame bien envoyée (confirmation wireshark)

exec('python shutdown.py '. $username . ' ' . $password . ' ' . $ip);

// Close connection
mysqli_close($db);

include('redirections/appRedirect.php');

?>