<?php
// CAN I PUT THIS IN THE ROOT?

// Location to the Paths config file.
// This should be the only line you need to
// edit in this file.
$pathsPath = 'application/Config/Paths.php';

define('FCPATH', __DIR__.DIRECTORY_SEPARATOR);

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 * This process sets up the path constants, loads and registers
 * our autoloader, along with Composer's, loads our constants
 * and fires up an environment-specific bootstrapping.
 */

// For development only!!!
$_SERVER['CI_ENVIRONMENT'] = 'development';

// Ensure the current directory is pointing to the front controller's directory
chdir(__DIR__);

// Load our paths config file
require $pathsPath;
$paths = new Config\Paths();

$app = require rtrim($paths->systemDirectory,'/ ').'/bootstrap.php';


/*
 *---------------------------------------------------------------
 * LAUNCH THE APPLICATION
 *---------------------------------------------------------------
 * Now that everything is setup, it's time to actually fire
 * up the engines and make this app do it's thang.
 */
$app->run();
