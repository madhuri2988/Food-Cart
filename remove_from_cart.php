<!--FOODCART-->
<!--Venkata Raman Madhuri Kambalapalli
    Jun Yang
    Sarang Jaltare
    Visharad Topa-->

<?php
session_start();

// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$i=0;


if(!empty($_SESSION["cart_items"])) {
		foreach($_SESSION["cart_items"] as $k => $v) {
			if($id == $k)	unset($_SESSION["cart_items"][$k]);
			if(empty($_SESSION["cart_items"])) unset($_SESSION["cart_items"]);
		}
	}


// redirect to product list and tell the user it was removed from cart
header('Location: cart.php?action=removed&id=' . $id . '&name=' . $name);
?>
