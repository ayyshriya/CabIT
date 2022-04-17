<?php

$sql = "SELECT * FROM customer where userid='$var' ";
$result = mysqli_query($conn, $sql);
$bookingid=-1;
if (mysqli_num_rows($result) > 0) {
    if($row = mysqli_fetch_assoc($result)) {
    	$bookingid=$row['bookingid'];
    }
} 
$fare=0;
$sql = "SELECT * FROM trip where bookingid='$bookingid' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    if($row = mysqli_fetch_assoc($result)) {
    	$fare=$row['fare'];
    }
} 
$sql = "SELECT * FROM driver where bookingid='$bookingid' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    if($row = mysqli_fetch_assoc($result)) {
    	$driver_bal=$row['balance'];
    }
} 
?>