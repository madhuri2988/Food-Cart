<!--FOODCART-->
<!--Venkata Raman Madhuri Kambalapalli
    Jun Yang
    Sarang Jaltare
    Visharad Topa-->

<?php include("header.php"); ?>


<div id="home-main">
    <!-- rotating banner -->
    <div id="banner">
        <img src="img/food1.jpg" class="banner-pic" alt="">
        <img src="img/food2.jpg" class="banner-pic" alt="">
        <img src="img/food3.jpg" class="banner-pic" alt="">
        <img src="img/food4.jpg" class="banner-pic" alt="">


        <div class="prev" style="cursor: pointer;" onclick="banner_prev()">
            <div class="banner-btn">
            </div>
        </div>
        <div class="next" style="cursor: pointer;" onclick="banner_next()">
            <div class="banner-btn">
            </div>
        </div>

        <div id="banner-btn">
            <div class="banner-btn-control"></div>
            <div class="banner-btn-control"></div>
            <div class="banner-btn-control"></div>
            <div class="banner-btn-control"></div>
        </div>
    </div>

    <!-- rotating banner bottom -->
    <div id="banner-bottom">
        <div class="feature">
            <h1>Promotion</h1>
            <p>
              Place an order or make a reservation <a href="menu.php">online </a>between 12AM PST November 1, 2015 and 11:59PM PST November 15, 2015, and be eligible for 10%off. Use promotion code : <span class="promo"> FOOD10</span>
            </p>
            <div class="feature-div-1"></div>
        </div>

        <div class="feature">
            <h1>Reviews</h1>
            <p>

Follow the crowd off the street to find a hidden pleasure called<span class="promo"> FoodCart</span>. As one of the best treasures in San Francisco, it's not hard to find them when you talk to Chinese food fans.
            </p>
            <div class="feature-div-2"></div>
        </div>

        <div class="feature">
            <h1>Holiday timings</h1>
            <p>
                Christmas Eve - Thursday, December 24, 2015

Christmas Eve Lunch/Dinner: 12pm-10pm

Christmas Day - Friday, December 25, 2015
Christmas Day Lunch/Dinner: 12pm-10pm

New Year's Eve - Friday, December 31, 2015
New Year's Eve Dinner: 3pm-10pm

            </p>
            <div class="feature-div-3"></div>
        </div>

    </div>

    <!-- rolling pictures -->
    <div id="rolling-pic">
    </div>
</div>

<?php include("footer.php"); ?>
