<!-- Почему когда отправляешь форму данные остаются в переменной $_POST даже после перезагрузки страницы -->

<?php
    var_dump($_POST);
    echo '<br/>';

    var_dump($_POST['btn-send']);
    echo '<br/>';

    var_dump(isset($_POST['btn-send']));
?>

<form name="contacts-form" action="" method="post">
    <input type="text" name="name"/> <br>
    <textarea name="message"></textarea> <br>
    <input type="submit" name="btn-send">
</form>
