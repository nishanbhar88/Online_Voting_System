<?php
$connect = mysqli_connect("localhost", "root", "", "voting") or die("connection failed");

if($connect){
    echo "Connect!";
}
else{
    echo "Not";
}


?>