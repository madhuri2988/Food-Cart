<?php
/*FOODCART
Venkata Raman Madhuri Kambalapalli
   Jun Yang
    Sarang Jaltare
   Visharad Topa */
session_start();
// total price of order is saved to session
$totalp = isset($_GET['totalp']) ? $_GET['totalp'] :0;
if(!empty($_SESSION["order"])) {
  $_SESSION["order"]["totalprice"]=$totalp;
}else {

  $_SESSION["order"] = array("totalprice" =>$totalp);
}
header('Location: payment.php');


?>
