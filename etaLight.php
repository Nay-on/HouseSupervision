<?php
 
include('include/dbconnect.php');
 
// Escape user inputs for security
/*$actionName = $_GET['link'];
$id = $_GET['id'];
$action = $_GET['action'];*/

$color = mysqli_real_escape_string($db, $_REQUEST['color']);
$range = mysqli_real_escape_string($db, $_REQUEST['range']);


/*
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $linkFinal);
curl_setopt($curl, CURLOPT_COOKIESESSION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

echo $linkFinal;

$return = curl_exec($curl);
curl_close($curl);*/
/*
switch ($action){
	case 1:
		$sql = "UPDATE component SET action1state = 1 WHERE id = $id";
		if(mysqli_query($db, $sql)){
			echo "Records added successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
		}
		break;
	
}*/
 
// Close connection
mysqli_close($db);

echo $color;
echo $range;

//header('Location: app.php');

?>