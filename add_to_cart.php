<?php
/*FOODCART
Venkata Raman Madhuri Kambalapalli
   Jun Yang
    Sarang Jaltare
   Visharad Topa */
session_start();

// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
$comm = isset($_GET['comm']) ? $_GET['comm'] : "";
$cat = isset($_GET['cat']) ? $_GET['cat'] : "";
if(!empty($_SESSION["order"])) {
    if(array_key_exists ("comm" , $_SESSION["order"])){
          $_SESSION["order"]["comm"]= $_SESSION["order"]["comm"].",".$comm;
    }else{

  $_SESSION["order"]+array("comm" =>$comm);

    }

}else {

  $_SESSION["order"] = array("comm" =>$comm);
}




// connect to the database
$db = new PDO("mysql:dbname=database; host=localhost", "root", "root");
$rows = $db -> query("SELECT * FROM products WHERE productId = $id");
foreach ($rows as $row) {
  $name = $row["product_name"];
  $cat = $row["category"];
}

$id = isset($_GET['id']) ? $_GET['id'] : "";
//$name = isset($_GET['name']) ? $_GET['name'] : "";
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "1";
$cat = isset($_GET['cat']) ? $_GET['cat'] : "soup";

if(!empty($_SESSION["cart_items"])) {
      foreach($_SESSION["cart_items"] as $k => $v) {

      if($id == $k) {

      $_SESSION["cart_items"][$k]["quantity"] = $_SESSION["cart_items"][$k]["quantity"]+1;

    }
  else {
    $itemArray=array("id"=>$id,"name"=>$name,"quantity"=>$quantity);
    $_SESSION["cart_items"] = $_SESSION["cart_items"]+array($id =>$itemArray);
  }
}  }else {
  $itemArray=array("id"=>$id,"name"=>$name,"quantity"=>$quantity);
  $_SESSION["cart_items"] = array($id =>$itemArray);
}
   header('Location: menu.php?action=added&id' . $id . '&name=' . $name.'&cat='.$cat);
?>
