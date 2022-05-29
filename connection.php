<?php
$user="root";
$pass="";
$server="localhost";
$db="b5";
$con=mysqli_connect($server,$user,$pass,$db);
if($con)
{
    echo("successful connection");
}
else{
    echo("not connection");
}

?>
