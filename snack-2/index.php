<?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    $age_validation = filter_var($age, FILTER_VALIDATE_INT);
    $name_len = (strlen($name));
    $email_validation = filter_var($email, FILTER_VALIDATE_EMAIL);
    $email_at = strpos($email, '@');
    $email_dot= strpos($email, '.');

    if($email_validation === false || $email_at === false || $email_dot === false || $name_len <= 3 || $age_validation === false){ ?>
    <span>Access Denied</span>
    <?php
    } else{ ?>
        <span>Access Granted</span>
        <?php
    }
    
?>