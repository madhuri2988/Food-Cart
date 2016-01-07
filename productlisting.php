<!--FOODCART-->
<!--Venkata Raman Madhuri Kambalapalli
    Jun Yang
    Sarang Jaltare
    Visharad Topa-->

<?php

session_start();
// connect to database
include 'db_connect.php';
$action = isset($_GET['action']) ? $_GET['action'] : "";
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : "1";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$cat=isset($_GET['cat']) ? $_GET['cat'] : "soup";


// check if item is added or already exists
if($action=='added'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$name}</strong> was added to your cart!";
    echo "</div>";
}

if($action=='exists'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$name}</strong> already exists in your cart!";

    echo "</div>";

}

?>
<!-- Display all food items from database based on category-->
<div id="three-columns">
	<ul class="rig columns-3">
        <?php
        $rows= $db->query("SELECT * From products where category='$cat'");
        foreach($rows as $row){
        ?>
        <li>
            <div class="product-id" style="display: none"><?= $row["productId"] ?></div>
    		<img src="img/<?= $row["product_image"]?>" />
    		<span class="product-title"> <?= $row["product_name"]?></span>
            <span class="price">$<?= $row["product_price"]?></span>
    		<p class="product-desc"><?= $row["product_desc"]?></p>
            <a id="<?=$row["productId"] ?>" class="open-detail" href="">customize</a>

            <a class="order-button" href="add_to_cart.php?id=<?=$row["productId"] ?>&name=<?= $row["product_name"]?>&cat=<?=$cat?>">Order</a>
        </li>
        <?php
        }
        ?>
    </ul>
</div>
