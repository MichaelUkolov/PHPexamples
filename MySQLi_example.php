<?php
/* Example by Michael Ukolov
 * 4 Febuary 2016
 */
$host = ""; // Your MySQLi server
$user = ""; // Your MySQLi user
$pass = ""; // Your MySQLi password
$db = ""; // Your MySQLi database
if(mysqli_connect($host, $user, $pass, $db))
{
    // connection is successful, we can do anything
}
else
{
    // connection is aborted, print message about it
    echo 'Error while connecting to MySQLi server';
}
?>