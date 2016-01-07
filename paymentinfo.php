<!--FOODCART-->
<!--Venkata Raman Madhuri Kambalapalli
    Jun Yang
    Sarang Jaltare
    Visharad Topa-->
<!-- Payment form for delivery option which requires address for delivery-->
 <div id="personal-info">
   <form action="order_complete.php?confi=delivery" method="post" id="delivery-pay-form">
        <label class="half-line">Full Name</label>
        <label class="half-line">Email</label>
        <br>
        <input type="text" name="name" size="40" class="input-half-line">
        <input type="email" name="email" size="40" class="input-half-line">
        <br>
        <label>Street Address</label>
        <br>
        <input type="text" name="street" size="82" class="input-full-line">
        <br>
        <label class="half-line">City</label>
        <label class="half-line">State</label>
        <br>
        <input type="text" name="city" size="40" class="input-half-line">
        <input type="text" name="state" size="40" class="input-half-line">
        <br>
        <label class="half-line">Postal / Zip</label>
        <label class="half-line">Country</label>
        <br>
        <input type="text" name="zip" size="40" class="input-half-line">
        <input type="text" name="country" size="40" class="input-half-line">
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
        <p>By clicking the submit button you agree to our <a href="">Terms of Service</a> & <a href="">Privacy Policy</a>.</p>   <br class="clear">
        <br>
        <input type="submit" class="confirmation" value="Place order"/>
    </form>

    <br class="clear">
    <br class="clear">
    <br class="clear">
                </div>
