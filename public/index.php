<?php

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'App' . DIRECTORY_SEPARATOR);
define('MODEL', APP . 'Model' . DIRECTORY_SEPARATOR); 
define('VIEW', APP . 'View' . DIRECTORY_SEPARATOR);
define('CONTROLLER', APP . 'Controller' . DIRECTORY_SEPARATOR);
define('CORE', ROOT . 'Core' . DIRECTORY_SEPARATOR);

$modules = [MODEL, VIEW, CONTROLLER,CORE];

set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));

spl_autoload_register("spl_autoload",false);


new App;
