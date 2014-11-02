<?php 

/**
 * Autoload for test target classes
 *
 * @param string $classname
 */ 
function autoloader($classname)
{
    $include = "{$classname}.php";
    
    if (file_exists($include))
    {
        include_once($include);
    }
    else
    {
        exit($classname.' can\'t load.');
    }
}

// choose autoload function
spl_autoload_register('autoloader');