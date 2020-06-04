<?php
    define('__CONFIG__', true);     // * Allow the config file
    require_once "../includes/config.php";      // * Require the config file

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // * Always return JSON format
        header('Content-Type: application/json');

        $return = [];

        $email = filter::String( $_POST['email']);

        // Make sure the user does not exist
        $findUser = $con->prepare("SELECT user_id FROM users WHERE email = LOWER(:email) LIMIT 1");
        $findUser->bindParam(':email', $email, PDO::PARAM_STR);
        $findUser->execute();

        if($findUser->rowCount() == 1) {
            // User exists
            // we can also check to see if they are able to login
            $return['error'] = "You already have an account";
            $return['is_logged_in'] = false;
        } else {
            // User does not exist, add them now

            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $addUser = $con->prepare("INSERT INTO users(email, password) VALUES(LOWER(:email), :password)");
            $addUser->bindParam(':email', $email, PDO::PARAM_STR);
            $addUser->bindParam(':password', $password, PDO::PARAM_STR);
            $addUser->execute();

            $user_id = $con->lastInsertId();

            $_SESSION['user_id'] = (int) $user_id;

            $return['redirect'] = '/dashboard.php?message=welcome';
            $return['is_logged_in'] = true;
        }

        echo json_encode($return, JSON_PRETTY_PRINT); exit;
    } else {
        // Die, Kill the script, Redirect the user etc etc
        exit('Invalid URL');
    }
?>
