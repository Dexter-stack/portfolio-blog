<?php 
$host = "us-cdbr-east-05.cleardb.net";
$username ="be770889dcfc10";
$password ="f63e5e8d";
$db_name ="heroku_8ab9d9b102461f1";

// $host = "localhost";
// $username ="root";
// $password ="";
// $db_name ="sharon";

//create db conection using pdo

$db_conn = new PDO("mysql:host=$host;dbname=$db_name", $username,$password);
//set some attribute
$db_conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//$db->setAttribute(PDO::MYSQL_USE_BUFFERED_QUERY, true);
$db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// if($db_conn){
//     echo "connected";
// }else{
//     echo "not";
// }
