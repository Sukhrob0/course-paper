<?php

if($_COOKIE) var_dump($_COOKIE);
else setcookie('name', 'Vadim', 0, '/');
