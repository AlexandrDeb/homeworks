<?php
/*9. Написать функцию, которая переворачивает строку.
Было "abcde", должна выдать "edcba". Ввод текста реализовать
 с помощью формы.*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="script.php" >
    <label for="name">Введите слово</label>
    <input type="text" name="str" id="name"/>
    <input type="submit" value="Перевернуть строку"/>
</form>

</body>
</html>