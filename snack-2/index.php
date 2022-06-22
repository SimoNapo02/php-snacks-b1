<?php
    $userName = $_GET['name'];
    $userMail = $_GET['mail'];
    $userAge = $_GET['age'];

    if (strlen($userName) > 3 && filter_var($userMail, FILTER_VALIDATE_EMAIL) && is_numeric($userAge)) {
        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    }
?>