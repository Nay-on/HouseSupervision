<?php
 
include('include/dbconnect.php');
 
// Escape user inputs for security
$link = $_GET['link'];
$id = $_GET['id'];
$action = $_GET['action'];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $link);
curl_setopt($curl, CURLOPT_COOKIESESSION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$return = curl_exec($curl);
curl_close($curl);

switch ($action){
	case 1:
		$sql = "UPDATE component SET action1state = 1 WHERE id = $id";
		if(mysqli_query($db, $sql)){
			echo "Records added successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
		}
		break;
		
	case 2:
		$sql = "UPDATE component SET action2state = 1 WHERE id = $id";
		if(mysqli_query($db, $sql)){
			echo "Records added successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
		}
		break;
		
	case 3:
		$sql = "UPDATE component SET action3state = 1 WHERE id = $id";
		if(mysqli_query($db, $sql)){
			echo "Records added successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
		}
		break;
		
	case 4:
		$sql = "UPDATE component SET action4state = 1 WHERE id = $id";
		if(mysqli_query($db, $sql)){
			echo "Records added successfully.";
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
		}
		break;
}
 
// Close connection
mysqli_close($db);

header('Location: app.php');

?>