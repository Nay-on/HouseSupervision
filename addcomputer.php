<?php
include('include/dbconnect.php');
 
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$ip = mysqli_real_escape_string($db, $_REQUEST['ip']);
$name = mysqli_real_escape_string($db, $_REQUEST['name']);
$mac = mysqli_real_escape_string($db, $_REQUEST['mac']);

 
// Attempt insert query execution
$sql = "INSERT INTO pc_list (ip, name, mac) VALUES ('$ip', '$name', '$mac')";
if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
// Close connection
mysqli_close($db);

header('Location: app.php');

?>