<?php
/*FOODCART
Venkata Raman Madhuri Kambalapalli
   Jun Yang
    Sarang Jaltare
   Visharad Topa */
    // return true if the given password matches the given name
    function is_password_correct($email, $password) {
        $db = new PDO("mysql:dbname=database; host=localhost", "root", "root");
        $email = $db -> quote($email);
        $rows = $db -> query("SELECT * FROM user WHERE email = $email");

        if ($rows) {
            foreach ($rows as $row) {
                if ($password === $row["password"]) {
                    return TRUE;
                }
            }
        }
        return FALSE;
    }

    // redirect current page the login.php
    function ensure_loggin_in() {
        if (!isset($_SESSION["username"])) {
            header("login.php");
            die;
        }
    }

    // show login state, convert between login and logout
    function login_state() {
        if (!isset($_SESSION["username"])) {
            ?>
            <a href="" class="login-show">log in / sign up</a>
            <?php
        } else {
            ?>
            <a href="logout.php"><?= $_SESSION["username"] ?>&nbsp;&nbsp;log out</a>
            <?php
        }
    }

    // check if the password matches
    function password_match($password, $password_confirm) {
        if ($password != $password_confirm) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    // check if the email or username already exists
    function check_email_username($email, $username) {
        $db = new PDO("mysql:dbname=database; host=localhost", "root", "root");
        $email = $db -> quote($email);
        $rows = $db -> query("SELECT * FROM user WHERE email = $email");
        if ($rows -> rowCount() > 0) {
            return FALSE;
        }

        $username = $db -> quote($username);
        $rows = $db -> query("SELECT * FROM user WHERE username = $username");
        if ($rows -> rowCount() > 0) {
            return FALSE;
        }

        return TRUE;
    }

    // user sign up
    function sign_up($username, $lastname, $email, $password, $gender, $city, $state, $country, $security, $answer) {
        try {
            $db = new PDO("mysql:dbname=database; host=localhost", "root", "root");
            $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $username = $db -> quote($username);
            $lastname = $db -> quote($lastname);
            $email = $db -> quote($email);
            $password = $db -> quote($password);
            $gender = $db -> quote($gender);
            $city = $db -> quote($city);
            $state = $db -> quote($state);
            $country = $db -> quote($country);
            $security = $db -> quote($security);
            $answer = $db -> quote($answer);
            $sql = "INSERT INTO user (username, lastname, email, password, gender, city, state, country, security, answer)
                VALUES ($username, $lastname, $email, $password, $gender, $city, $state, $country, $security, $answer)";

            $db -> exec($sql);
        }
        catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }

    }

?>
