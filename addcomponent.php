<?php
include('include/dbconnect.php');
 
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$linkcp = mysqli_real_escape_string($db, $_REQUEST['linkcp']);
$linkcp2 = mysqli_real_escape_string($db, $_REQUEST['linkcp2']);
$linkcp3 = mysqli_real_escape_string($db, $_REQUEST['linkcp3']);
$linkcp4 = mysqli_real_escape_string($db, $_REQUEST['linkcp4']);
$action1 = mysqli_real_escape_string($db, $_REQUEST['action1']);
$action2 = mysqli_real_escape_string($db, $_REQUEST['action2']);
$action3 = mysqli_real_escape_string($db, $_REQUEST['action3']);
$action4 = mysqli_real_escape_string($db, $_REQUEST['action4']);

$name = mysqli_real_escape_string($db, $_REQUEST['name']);
$type = mysqli_real_escape_string($db, $_REQUEST['type']);
$brand = mysqli_real_escape_string($db, $_REQUEST['brand']);

// Attempt insert query execution
$sql = "INSERT INTO component (link, link2, link3, link4, nameAction1, nameAction2, nameAction3, nameAction4, type, name, brand) VALUES ('$linkcp','$linkcp2','$linkcp3','$linkcp4', '$action1', '$action2', '$action3', '$action4','$type' , '$name', '$brand')";
if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
// Close connection
mysqli_close($db);

include('redirections/appRedirect.php');

?>