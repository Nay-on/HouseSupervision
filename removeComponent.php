<?php
include('include/dbconnect.php');
 
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id = $_GET['rm'];
 
// Attempt insert query execution
$sql = "DELETE FROM component WHERE id = '$id'";
if(mysqli_query($db, $sql)){
    echo "Records removed successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
// Close connection
mysqli_close($db);

header('Location: app.php');

?>