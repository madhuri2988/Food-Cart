<!--FOODCART-->
<!--Venkata Raman Madhuri Kambalapalli
    Jun Yang
    Sarang Jaltare
    Visharad Topa-->

<?php
session_start();

// get the product id and update the quantity when ever it is changed and store back to session
$id = isset($_GET['item_to_adjust']) ? $_GET['item_to_adjust'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$updatedquantity = isset($_GET['updatedquantity']) ? $_GET['updatedquantity'] : "";

if(!empty($_SESSION["cart_items"])) {
    foreach($_SESSION["cart_items"] as $k => $v) {
        if($id == $k) 	{
            $_SESSION["cart_items"][$k]["quantity"] = $updatedquantity;
        }
    }
}
header('Location: cart.php?action=quantity_updated&id' . $id . '&name=' . $name.'&quantity='.$updatedquantity);

?>
