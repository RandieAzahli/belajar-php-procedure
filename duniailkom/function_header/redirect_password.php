<?php 

$user = "admin";

if ($user == "admin") {

    header("location: admin.php");
}
else {
    header("location: error.php");
}

?>