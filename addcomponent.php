<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$linkdb = mysqli_connect("localhost", "root", "", "house_super");
 
// Check connection
if($linkdb === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$linkcp = mysqli_real_escape_string($linkdb, $_REQUEST['linkcp']);
$linkcp2 = mysqli_real_escape_string($linkdb, $_REQUEST['linkcp2']);
$linkcp3 = mysqli_real_escape_string($linkdb, $_REQUEST['linkcp3']);
$linkcp4 = mysqli_real_escape_string($linkdb, $_REQUEST['linkcp4']);
$action1 = mysqli_real_escape_string($linkdb, $_REQUEST['action1']);
$action2 = mysqli_real_escape_string($linkdb, $_REQUEST['action2']);
$action3 = mysqli_real_escape_string($linkdb, $_REQUEST['action3']);
$action4 = mysqli_real_escape_string($linkdb, $_REQUEST['action4']);

$name = mysqli_real_escape_string($linkdb, $_REQUEST['name']);
$type = mysqli_real_escape_string($linkdb, $_REQUEST['type']);

// Attempt insert query execution
$sql = "INSERT INTO component (link, link2, link3, link4, nameAction1, nameAction2, nameAction3, nameAction4, type, name) VALUES ('$linkcp','$linkcp2','$linkcp3','$linkcp4', '$action1', '$action2', '$action3', '$action4','$type' , '$name')";
if(mysqli_query($linkdb, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($linkdb);
}
 
// Close connection
mysqli_close($linkdb);

header('Location: app.php');

?>