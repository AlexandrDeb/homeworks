<
<!--Создать контактную форму. Сделать так, чтобы один посетитель
не мог отправить форму больше 3 раз за одну минуту-->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <form method="post" action="form.php" >
            <label for="name">Введите ваше имя:</label><br>
            <input type="text" name="name" id="name"/> <br>
            <label for="email">Введите ваше email:</label><br>
            <input type="email" name="email" id="email"/><br>
            <label for="tel">Введите ваше телефон:</label><br>
            <input type="tel" name="tel" id="tel"/> <br>
            <input type="submit" value="Отправить контакты"/><br>
        </form>
        <?php
        if (isset($_COOKIE['count'])){
            $count = (int)$_COOKIE['count'];
            $count++;
            setcookie('count', $count);
        }else{
            $count = 1;
            setcookie('count', $count, time() + 60);
        }
        if($count > 3){
            die('Вы не можете отправить данные, чаще 3 раз в минуту !');
        }
        ?>
    </body>
</html>

