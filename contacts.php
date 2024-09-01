<?php
    if ($_POST['name'] === '' || $_POST['name'] != 'admin') {
        header('Location: index.php');
    } else {
        echo 'You are admin!';
    }
