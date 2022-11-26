<?php

spl_autoload_register(function ($class) {
    require __DIR__ . DIRECTORY_SEPARATOR . implode(
        DIRECTORY_SEPARATOR,
        explode('\\', str_replace('kontroha', '', $class))
    ) . '.php';
});


$dibil = new kontroha\NKSMOW\Student('danich','tihon',new DateTime('2004-02-13'),'man');


