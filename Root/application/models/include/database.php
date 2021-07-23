<?php

$link = mysqli_connect('localhost','root', 'root', 'my_firs_base');

if (mysqli_connect_errno()){
    echo 'Error in connect to database ('.mysqli_connect_errno().'): '.mysqli_connect_error();
    exit();
}