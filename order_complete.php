    <?php
    /*FOODCART
    Venkata Raman Madhuri Kambalapalli
       Jun Yang
        Sarang Jaltare
       Visharad Topa */
    session_start();
    include 'db_connect.php';

    //Get all POST data from payment form and push into database
     $card_numb= isset($_POST['card-number']) ? $_POST['card-number'] :"";
    $card_exp_mm= isset($_POST['mm']) ? $_POST['mm'] :"";
    $card_exp_yy= isset($_POST['yy']) ? $_POST['yy'] :"";
    $card_exp=$card_exp_mm.$card_exp_yy;
    $address=isset($_POST['street']) ? $_POST['street'] :"";
    $product_list=array_keys($_SESSION["cart_items"]);
    $list="";
    //get all product list ids
    foreach($product_list as $key) {
       $list=$list.$key.',';
    }
    //get total price of order
    if(!empty($_SESSION["order"])) {
    $total_price=$_SESSION["order"]["totalprice"];
       $comments=$_SESSION["order"]["comm"];
    }
     //Get user name from session when user is logged in
    if(!empty( $_SESSION["username"])) {
    $userId=$_SESSION["username"];
    }else{
        $userId="anonymous";
    }

    //change all variables to database literal by adding quotes
    $userId = $db -> quote($userId);
      $card_numb = $db -> quote($card_numb);
              $card_exp = $db -> quote($card_exp);
    $address = $db -> quote($address);
    $list = $db -> quote($list);
    $total_price = $db -> quote($total_price);
    $comments = $db -> quote($comments);

    //Insert purchase history into the database
    if($db->exec("INSERT INTO purchase_history(userId,product_list,total_price,card_numb,card_exp,address,comments) VALUES ($userId, $list,$total_price, $card_numb, $card_exp, $address, $comments)")){
    $orderId=$db->lastInsertId ();
    unset($_SESSION["cart_items"]);
        unset($_SESSION["order"]);
    };

    $confi = isset($_GET['confi']) ? $_GET['confi'] : "";
    include("header.php")

    ?>

    <div class="main-content">
        <div class="thank-info">
            <?php

        ?>
            Your order confirmation number is <?= $orderId?>

        <!-- rotating image -->
        <?php
        if($confi=="delivery"){
        ?>
        <span class="thank_msg">  We will delivery your order within 30 min.</span>
            <br>
        <img id="thankyou" src="img/delivery.jpg" class="delivery-img" alt="thanks"/>

        <?php
        }else{
        ?>
       <span class="thank_msg"> Your order will be ready to pickup in 30 min.</span>
              <br>
        <img id="thankyou"  src="img/pickup.jpg" class="delivery-img" alt="thanks"/>
        <?php
        }
        ?>
        </div>

    </div>

    <?php include("footer.php"); ?>
