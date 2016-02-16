<?php
//2. Воспроизвести сообщение "headers already sent"

    echo "Hello my Friend";
    Header("Location: something.php");
    