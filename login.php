<!--FOODCART-->
<!--Venkata Raman Madhuri Kambalapalli
    Jun Yang
    Sarang Jaltare
    Visharad Topa-->

<?php include("header.php") ?>

<!-- login/sign up/log out state -->
<div class="login-state">
    <div class="login-state-info">

    <?php
        $email = $_POST["email"];
        $password = $_POST["password"];


        if (is_password_correct($email, $password)) {
            // start the session, remember the user name
            session_start();

            $db = new PDO("mysql:dbname=database; host=localhost", "root", "root");
            $email = $db -> quote($email);
            $rows = $db -> query("SELECT * FROM user WHERE email = $email");
            foreach ($rows as $row) {
                $_SESSION["username"] = $row["username"];
            }

            ?>
            <p>Login successful! Welcome back <?= $_SESSION["username"] ?></p>
            <?php
        } else {
            ?>
            <p>Sorry, incorrect user name or password.</p>
            <?php
        }

    ?>
    </div>

</div>

<?php include("footer.php"); ?>
