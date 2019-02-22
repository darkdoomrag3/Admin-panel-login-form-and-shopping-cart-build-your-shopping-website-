<?php

$myHost = "localhost"; // use your real host name
$myUserName = "root";   // use your real login user name
$myPassword = "";   // use your real login password
$myDataBaseName = "admin"; // use your real database name

$con = mysqli_connect( "$myHost", "$myUserName", "$myPassword", "$myDataBaseName" );

if( !$con ) // == null if creation of connection object failed
{ 
    // report the error to the user, then exit program
    die("connection object not created: ".mysqli_error($con));
}

if( mysqli_connect_errno() )  // returns false if no error occurred
{ 
    // report the error to the user, then exit program
    die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}

// when got here, successfully connected to database
?>