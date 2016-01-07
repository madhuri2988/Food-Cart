<!--FOODCART-->
<!--Venkata Raman Madhuri Kambalapalli
    Jun Yang
    Sarang Jaltare
    Visharad Topa-->

<!DOCTYPE html>
<?php
session_start();
?>
<?php

// count products in cart

$cart_count=count($_SESSION['cart_items']);

?>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/newsidebar.css">
    <link rel="stylesheet" type="text/css" href="css/product-listing.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/detail.css">
    <link rel="stylesheet" type="text/css" href="css/payment.css">
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/header.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/payment.js"></script>
    <script type="text/javascript" src="js/detail.js"></script>
    <script type="text/javascript" src="js/cart.js"></script>
</head>

<body>
    <header>
        <div id="logo">
            <a href="index.php"><img src="img/foodcart.png" alt="FoodCart"></a>
            <span id="foodcart">Food Cart</span>
        </div>

        <div id="cart">
            <span class="linkstop" ><?php echo $cart_count; ?></span>
            <a  href="cart.php"><img src="img/cart.png" alt="cart"/></a>
        </div>

        <nav>
            <ul id="menu">
                <li><a class="current" href="index.php">Home</a></li>
                <li><a href="menu.php" id="with-dropdown">Menu</a>
                </li>
                <li><a href="reserve_table.php">Reserve Table</a></li>
                <li><a href="aboutus.php">About Us</a>
                <li><a href="FAQ.php">FAQ </a></li>
                <li>
                <?php
                include("db.php");
                login_state();
                ?>
                </li>
            </ul>
        </nav>

    </header>

    <div class="ontop">
        <!-- login window -->
        <div id="login">
          <div id="login-close" class="btn-close">
            <img src="img/close.png" alt="close">
          </div>
          <div class="user-info-main">
            <form id="user-login" action="login.php" method="post">
            <ul>
            <li><label>E-mail :</label><br>
            <input type="email" name="email" placeholder="yourname@email.com" required></li>
            <li><label>Password :</label><br>
            <input type="password" name="password" placeholder="password" required></li>
            <li><input type="submit" value="Log in"></li>
            </ul>
            </form>
            <p>Don't have an accout?<a href="" class="signup-show">sign up</a></p>
          </div>
        </div>

        <!-- sign up window -->
        <div id="signup">
            <div id="signup-close" class="btn-close">
                <img src="img/close.png" alt="close">
            </div>
          <div class="user-info-main">
              <div>
                  <form id="user-signup" action="signup.php" method="post">
                      <div class="left">
                          <ul>
                              <li><label>First Name :</label></li>
                              <li><label>Last Name :</label></li>
                              <li><label>E-mail :</label></li>
                              <li><label>Password :</label></li>
                              <li><label>Confirm password :</label></li>
                              <li><label>Gender :</label></li>
                              <li><label>Mailing address :</label></li>
                              <li><label>City :</label></li>
                              <li><label>State :</label></li>
                              <li><label>Country :</label></li>
                              <li><label>Security question :</label></li>
                              <li><label>Answer :</label></li>
                          </ul>
                      </div>
                      <div class="right">
                          <ul>
                              <li><input type="text" name="username" required></li>
                              <li><input type="text" name="lastname" required></li>
                              <li><input type="email" name="email" required></li>
                              <li><input type="password" name="password" required></li>
                              <li><input type="password" name="password-confirm" required></li>
                              <li>
                                  <select name="gender">
                                      <option value="male">male</option>
                                      <option value="female">female</option>
                                  </select>
                              </li>
                              <li><input type="text" name="mail" required></li>
                              <li><input type="text" name="city" required></li>
                              <li><input type="text" name="state" required></li>
                              <li><input type="text" name="country" required></li>
                              <li>
                                  <select name="security">
                                      <option value="a">What's the middle name of your mother?</option>
                                      <option value="b">What's your first pet?</option>
                                      <option value="c">What's your favourite food?</option>
                                      <option value="d">What's your favourite song?</option>
                                  </select>
                              </li>
                              <li><input type="text" name="answer" required></li>
                          </ul>
                      </div>
                      <input type="submit" value="Sign up">
                  </form>
              </div>
              <p>Already have an accout?<a href="" class="login-show">log in</a></p>
          </div>
        </div>
    </div>
