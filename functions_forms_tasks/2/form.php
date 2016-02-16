<?php
/*2.Создать форму с элементом textarea.
При отправке формы скрипт должен выдавать
ТОП3 длинных слов в тексте. Реализовать с
помощью функции.*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="script.php" >
    <textarea name="word" cols="20" rows="3"></textarea><br>
    <input type="submit" value="Проверка значений"/>
</form>

</body>
</html>