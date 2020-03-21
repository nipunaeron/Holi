<?php
$enrollment = $_GET['enrollment'];
?>
<?php

$link = mysqli_connect("localhost", "root", "", "csec2020");

if($link === false){
    die("cannot connect to sqlserver " . mysqli_connect_error());
}
 

$sql = "DELETE FROM Student WHERE enrollment='$enrollment'";
if(mysqli_query($link, $sql)){
    echo "Row deleted successfully.";
} else{
    echo "cannot execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>
