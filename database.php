<?php





$link = mysqli_connect('127.0.0.1', 'root','ygujhirt1208', 'work_test');

if (mysqli_connect_errno()){
    echo 'Ошибка в подключении к БД ('.mysqli_connect_errno().'): '.mysqli_connect_error();
    exit();
}

