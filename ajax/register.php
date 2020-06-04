<?php
    define('__CONFIG__', true);     // * Allow the config file
    require_once "../includes/config.php";      // * Require the config file

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // * Always return JSON format
        header('Content-Type: application/json');

        $return = [];

        // Make sure the user does not exist
        
        // Make sure the user CAN be added

        // Return the proper information back to Javascript to redirect us
        $return['redirect'] = 'dashboard.php';
        echo json_encode($return, JSON_PRETTY_PRINT); exit;
    } else {
        // Die, Kill the script, Redirect the user etc etc
        exit('test');
    }
?>
