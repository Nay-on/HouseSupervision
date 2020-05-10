<?php
include('include/dbconnect.php');
 
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$ifttt = mysqli_real_escape_string($db, $_REQUEST['iftttKey']);

$sql = "DELETE FROM ifttkey WHERE id = 1";
if(mysqli_query($db, $sql)){
    echo "Records removed successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
$sql = "ALTER TABLE ifttkey AUTO_INCREMENT = 1";
if(mysqli_query($db, $sql)){
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
// Attempt insert query execution
$sql = "INSERT INTO ifttkey (iftttkey, changed) VALUES ('$ifttt', 1)";
if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
// Close connection
mysqli_close($db);

header('Location: setting');

?>