<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "semproject");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$parking_area = mysqli_real_escape_string($link, $_REQUEST['parking_area']);

 
// Attempt insert query execution
$sql = "INSERT INTO parking (parking_area) VALUES ('$parking_area')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
               header("location:add.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>