<?php
require_once 'Lcobucci/Common/ClassLoader/SplClassLoader.php';

use Mindplay\Annotation\Cache\ApcCache;
use Mindplay\Annotation\Core\Annotations;

$loader = new Lcobucci\Common\ClassLoader\SplClassLoader();
$loader->register();

Annotations::$config['cache'] = new ApcCache();