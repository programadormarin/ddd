<?php
set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ . '/src');

require_once 'Lcobucci/Common/ClassLoader/SplClassLoader.php';

$loader = new Lcobucci\Common\ClassLoader\SplClassLoader();
$loader->register();