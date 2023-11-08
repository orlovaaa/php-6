<?php
declare(strict_types=1);
session_start();
echo "Page 3 was opened ".$_SESSION['count']." times";

//На четвёртой странице также должна стартовать сессия и выводиться сообщение о том, сколько раз была открыта третья страница.
?>