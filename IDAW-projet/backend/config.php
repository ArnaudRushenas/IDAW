<?php
//database connexion
$servername = 'localhost';
$username = 'root';
$password = '';
$database='imangermieux';


$conn=  mysqli_connect($servername,$username,$password,$database);


if (!$conn){
    echo "La connexion a échouée";
}
?>
