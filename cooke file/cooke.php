<?php

if($_COOKIE){
    $_COOKIE['name'] .= ' Volkov';
    setcookie('name', $_COOKIE['name'], 0, '/');
    var_dump($_COOKIE);
}
else setcookie('name', 'Vadim', 0, '/');