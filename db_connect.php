<?php
$servername='localhost';
$username='root';
$password='';
$dbname='samarpan';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo mysqli_connect_error();
}


?>