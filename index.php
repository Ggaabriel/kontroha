<?php
//для работы сего произведения искусства нужно выбрать в опень server версия пешепе 8 
spl_autoload_register(function ($class) {
    require __DIR__ . DIRECTORY_SEPARATOR . implode(
        DIRECTORY_SEPARATOR,
        explode('\\', str_replace('kontroha', '', $class))
    ) . '.php';
});


// $dibil = new NKSMOW\Student('danich','tihon',new DateTime('2004-02-13'),'man');
// echo $dibil->getFirstName();

$isp22 = new NKSMOW\Group(
    'isp22',
    new NKSMOW\Leader('Max','Zverev',new DateTime('1980-07-19'),'man'),
    new DateTime('2022-11-28'),
    new NKSMOW\Speciality('programmer',4 , 25 , 10 , 'Vishka')
);

vardump($isp22);


function vardump($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}


