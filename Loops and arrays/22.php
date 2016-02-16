<?php
/*22. Нарисуйте пирамиду, как показано на рисунке,
воспользовавшись циклом for или while.
xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx

 */
echo "<pre>";
for($i = 1; $i<=5; $i++){

    for($x = 0; $x < $i; $x++){
        echo "xx";
    }

    echo PHP_EOL;
}