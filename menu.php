<!--FOODCART-->
<!--Venkata Raman Madhuri Kambalapalli
    Jun Yang
    Sarang Jaltare
    Visharad Topa-->

<?php include ("header.php"); ?>

<div id="main-container">
    <div id="main">
            <!-- left sidebar -->
            <div class="sidebar">
                <div class="menu-bar">
                    <ul class="menu-bar-list">
                        <li><a href="menu.php?cat=soup">SOUP</a></li>
                        <hr class="horizontal">
                        <li><a href="menu.php?cat=noodles">NOODLES</a></li>
                        <hr class="horizontal">
                        <li><a href="menu.php?cat=poultry">POULTRY</a></li>
                        <hr class="horizontal">
                        <li><a href="menu.php?cat=seafood">SEAFOOD</a></li>
                        <hr class="horizontal">
                        <li><a href="menu.php?cat=pork">PORK</a></li>
                        <hr class="horizontal">
                        <li><a href="menu.php?cat=vegetables">VEGETABLES</a></li>
                        <hr class="horizontal">
                        <li><a href="menu.php?cat=beef">BEEF</a></li>
                        <hr class="horizontal">
                    </ul>
                </div>
            </div>

            <!-- product list -->
            <?php include ('productlisting.php');?>
    </div>
</div>


<div class="detail-ontop">
<!-- customization window -->
    <div id="detail">
        <div id="detail-window">
            <div id="detail-top">
                <div class="detail-close"></div>
                <h1>Food Details</h1>
                <div class="detail-product-id"></div>
            </div>

            <div class="product-id" style="display: none"></div>

            <!-- soup options -->
            <div id="detail-bottom">
                <form>
                    <div class="detail-part">
                        <p>Size :</p>
                        <input type="radio" name="size" value="small" checked="checked">&nbsp;&nbsp;Samll<br/>
                        <input type="radio" name="size" value="medium">&nbsp;&nbsp;Medium<br/>
                        <input type="radio" name="size" value="large">&nbsp;&nbsp;Large<br/>
                    </div>
                    <div class="detail-part">
                        <p>Spicy :</p>
                        <input type="radio" name="spicy" value="mild" checked="checked">&nbsp;&nbsp;Mild<br/>
                        <input type="radio" name="spicy" value="medium">&nbsp;&nbsp;Medium<br/>
                        <input type="radio" name="spicy" value="hot">&nbsp;&nbsp;Hot<br/>
                    </div>
                    <p>Special requests :</p>

                    <textarea id="comments" rows="10" cols="45"></textarea>
                </form>
            </div>
            <div id="check-out">
                <a class="check-out-btn" href="">Order</a>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
