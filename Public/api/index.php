<?php
$loader = new \Phalcon\Loader();

$loader->registerDirs(array(
    '../../app/controllers/',
    '../../app/models/',
))->register();

$app = new \Phalcon\Mvc\Micro();

$app->setService('db', function(){
    return new Phalcon\Db\Adapter\Pdo\Mysql(array(
        'host' => "localhost",
        'username' => "root",
        'password' => "root",
        'dbname' => "blogPhalcon"
    ));
});

$app->handle();
