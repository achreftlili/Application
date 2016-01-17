<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';


$loader->add('FOS', realpath(__DIR__.'/../vendor/bundles'));
$loader->add('OAuth2', realpath(__DIR__.'/../vendor/oauth2-php/lib'));
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));
    

return $loader;
