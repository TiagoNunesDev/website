<?php
/**
 * Created by PhpStorm.
 * User: Tiago
 * Date: 1/23/2018
 * Time: 7:47 AM
 */
$dbServer = "localhost";
$dbUser   = "root";
$dbPassword = "";
$dbName = "mydb";

$con = mysqli_connect($dbServer,$dbUser,$dbPassword,$dbName);
if( $con)
    echo "connection is established";
