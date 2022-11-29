<?php
//для работы сего произведения искусства нужно выбрать в опень server версия пешепе 8 
spl_autoload_register(function ($class) {
    require __DIR__ . DIRECTORY_SEPARATOR . implode(
        DIRECTORY_SEPARATOR,
        explode('\\', str_replace('kontroha', '', $class))
    ) . '.php';
});



// echo $dibil->getFirstName();
$programmer =  new NKSMOW\Speciality('programmer',4 , 'Vishka');
$isp22 = new NKSMOW\Group(
    'isp22',
    new NKSMOW\Leader('Max','Zverev',new DateTime('1980-07-19'),'m'),
    new DateTime('2022-11-28'),
    $programmer
);

$dibil = new NKSMOW\Student(
    'danich',
    'tihon',
    new DateTime('2004-02-13'),
    'm',
    $programmer,
    $isp22,
    new DateTime('2022-11-28')
);

$dibil2 = new NKSMOW\Student(
    'kirill',
    'mahan',
    new DateTime('2005-02-13'),
    'm',
    $programmer,
    $isp22,
    new DateTime('2022-11-28')
);

$dibil3 = new NKSMOW\Student(
    'danicha',
    'tihona',
    new DateTime('2004-03-13'),
    'w',
    $programmer,
    $isp22,
    new DateTime('2022-11-28')
);



$isp22->addStudent($dibil);
$isp22->addStudent($dibil2);
$isp22->addStudent($dibil3);

$isp22->dismissial('Danich','Tihon', new Datetime('2022-11-29'));

vardump($dibil->getStatus());

$isp22->reestablish('Danich','Tihon', new Datetime('2022-11-29'));

vardump($dibil->getStatus());

vardump($dibil->getIvents());

vardump($isp22->getByAge(18));


function vardump($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}




