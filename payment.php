<?php
/*FOODCART
Venkata Raman Madhuri Kambalapalli
   Jun Yang
    Sarang Jaltare
   Visharad Topa */
include 'header.php';
session_start();


?>
<!-- code to display payment form-->
<div class="payment-content">
    <div id="payment">
        <div class="radio">
            <label>
                <input type="radio" name="ship" value="pickup" />
                <img src="img/order.pickup.button.jpg">
            </label>
            <label>
                <input type="radio" name="ship" value="delivery" checked="checked" />
                <img src="img/order.delivery.button.jpg">
            </label>
        </div>
        <div id="pickup">
            <div id="personal-info">
                  <form action="order_complete.php?confi=pickup" method="post" id="pickup-pay-form">
                    <label class="half-line">Full Name</label>
                    <br>
                    <input type="text" name="name" size="40" class="input-half-line">
                    <br>
                    <label>Credit Card Type</label>
                    <br>
                    <select name="card-type" id="card-type">
                        <option>American Express</option>
                        <option>Discover</option>
                        <option>Mastercard</option>
                        <option>Visa</option>
                    </select>
                    <br>
                    <label>Card Number</label>
                    <br>
                    <input type="text" name="card-number" size="82" class="input-full-line">
                    <br>
                    <label class="half-line">MM</label>
                    <label class="half-line">YY</label>
                    <br>
                    <input type="text" name="mm" size="40" class="input-half-line">
                    <input type="text" name="yy" size="40" class="input-half-line">
                    <br>
                    <p>By clicking the submit button you agree to our <a href="">Terms of Service</a> & <a href="">Privacy Policy</a>.</p>
                    <br>
                     <br class="clear">
                  <input type="submit" name="submit" class="confirmation" value="Place order"/>
                </form>
                      <br class="clear">
                      <br class="clear">
                      <br class="clear">
                </div>
                </div>
                <div id="delivery">
                <?php
                include "paymentinfo.php";
                ?>
                </div>


            </div>

</div>

<?php include("footer.php"); ?>
