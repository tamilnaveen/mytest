<?php
date_default_timezone_set('Asia/Kolkata');
$conn = mysqli_connect("localhost","root","","cronjob") or die(mysqli_error());
mysqli_query($conn, "INSERT INTO my_table(date) VALUES('".date("Y-m-d H:i:s")."')");
?>