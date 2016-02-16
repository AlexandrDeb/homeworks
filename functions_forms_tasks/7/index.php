<?php
/*7. Создать гостевую книгу, где любой человек может оставить
 комментарий в текстовом поле и добавить его. Все добавленные
 комментарии выводятся над текстовым полем.*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
    <h1>Гостевая книга</h1>
    <hr>
</head>
<body>
    <?php
    $str = '';
    if($_POST){
        $str = '<p>'.'<b>'.$_POST['name'].'</b>'.'<br>'.$_POST['word'];;
    } else {
        echo 'Здесь будет располагаться Ваш комментарий !!!';
    }
    file_put_contents('comments.dat', $str, FILE_APPEND);
        require_once 'comments.dat';
    ?>
    <hr>
<form method="post" action="" >
    <label for="name">Введите ваше имя:</label><br>
    <input type="text" name="name" id="name" placeholder="Введит еваше имя"/><br>
    <label for="word">Введите ваш комментарий:</label><br>
    <textarea name="word" id="word" cols="40" rows="10" placeholder="Введите ваш комментарий"></textarea><br><br>
    <input type="submit" value="Оставить комментарий"/>
</form>

</body>
</html>


