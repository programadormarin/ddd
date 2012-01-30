<?php
set_include_path(
        get_include_path() . PATH_SEPARATOR .
        realpath(__DIR__ . '/../src/') . PATH_SEPARATOR .
        realpath(__DIR__ . '/../templates/')
);

require_once '../bootstrap.php';

use \Lcobucci\ActionMapper\Core\ApplicationFactory;
use \Lcobucci\Common\DependencyInjection\XmlContainerBuilder ;

$app = ApplicationFactory::initApplication();
$app->getSession()->start('StartDDD');
$app->setDependencyContainer(XmlContainerBuilder::build(__DIR__ . '/../config/dic.xml'));

$app->run();