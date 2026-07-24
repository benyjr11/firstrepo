<?php
$host ="localhost";
$username = "root";
$dbname ="wemz";
$com =mysqli_connect($host, $username, , $dbname);
if($conn){
    echo "connected successfully";
}
else {
    echo "connection failed".mysqli_connect_error();
}
?>
