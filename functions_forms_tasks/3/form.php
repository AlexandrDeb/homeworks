<?php
/*3. Есть текстовый файл. Необходимо удалить из него все слова,
 длина которых превыщает N символов. Значение N задавать через форму.
Проверить работу на кириллических строках - найти ошибку, найти решение.*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="script.php" >
    <label for="number">Задайте количество</label>
    <input type="text" name="number" id="number" <br>
    <input type="submit" value="Удаляем лишнее"/>
</form>

</body>
</html>