<?php 

$conn = mysqli_connect('localhost','root','root','a1');

if(!$conn) 
 {
    echo 'fail :' .mysqli_connect_error();
}


?>