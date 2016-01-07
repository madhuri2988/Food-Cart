<?php
/*FOODCART
Venkata Raman Madhuri Kambalapalli
   Jun Yang
    Sarang Jaltare
   Visharad Topa */
$host = "localhost";
$db_name = "database";
$username = "root";
$password = "root";

try {
    //gets the PDO with required database variables
    $db = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);

    }


//to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
