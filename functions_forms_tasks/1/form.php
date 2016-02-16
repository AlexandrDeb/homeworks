<?php
/*Создать форму с двумя элементами textarea.
При отправке формы скрипт должен выдавать только те слова,
 которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию
 getCommonWords($a, $b), которая будет возвращать массив с общими словами.*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="script.php" >
    <textarea name="val_1" cols="20" rows="3"></textarea><br>
    <textarea name="val_2" cols="20" rows="3"></textarea><br>
    <input type="submit" value="Проверка совпадений"/>
</form>

</body>
</html>