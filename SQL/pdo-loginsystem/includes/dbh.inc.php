<?php

$servername = "localhost";
$dBUsername = "debian-sys-maint";
$dBPassword = "7lnjYKVW8vCfNCSB";
$dBName = "loginsystemtut";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}