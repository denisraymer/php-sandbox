<?php
if ($_POST['name'] === '' || $_POST['name'] != 'admin') {
    header('Location: _example.php');
} else {
    echo 'You are admin!';
}
