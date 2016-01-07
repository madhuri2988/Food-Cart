<!--FOODCART-->
<!--Venkata Raman Madhuri Kambalapalli
    Jun Yang
    Sarang Jaltare
    Visharad Topa-->

<?php include("header.php") ?>

<!-- login/sign up/log out state -->
<div class="login-state">
    <div class="login-state-info">

        <p>You have successfully logged out!</p>

        <?php
            session_destroy();
            session_regenerate_id(TRUE);
            session_start();
        ?>
    </div>
</div>

        <?php include("footer.php"); ?>
