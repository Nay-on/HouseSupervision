<?php
 
// Escape user inputs for security
$link = $_GET['link'];
 
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $link);
curl_setopt($curl, CURLOPT_COOKIESESSION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$return = curl_exec($curl);
curl_close($curl);

header('Location: app.php');

?>