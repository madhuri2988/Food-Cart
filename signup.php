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
    $username = $_POST["username"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_confirm = $_POST["password-confirm"];
    $gender = $_POST["gender"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $country = $_POST["country"];
    $security = $_POST["security"];
    $answer = $_POST["answer"];

    // check if password matches
    if (!password_match($password, $password_confirm)) {
        ?>
        <p>Password doesn't match!</p>
        <?php
    }

    if (!check_email_username($email, $username)) {
        ?>
        <p>Email or username already exist!</p>
        <?php
    }

    // check if pass all the tests
    if (password_match($password, $password_confirm) && check_email_username($email, $username)) {
        print("siginin");
        sign_up($username, $lastname, $email, $password, $gender, $city, $state, $country, $security, $answer);
        // start the session, remember the user name
        session_start();

        $db = new PDO("mysql:dbname=database; host=localhost", "root", "root");
        $email = $db -> quote($email);
        $rows = $db -> query("SELECT * FROM user WHERE email = $email");
        foreach ($rows as $row) {
            $_SESSION["username"] = $row["username"];
        }

        ?>
        <p>Welcome to Foodcart! <?= $username ?></p>
        <?php
    }
?>
</div>
</div>

<?php include("footer.php"); ?>
