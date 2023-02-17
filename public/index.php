<!DOCTYPE html>
<?php

session_start();

/** Check valid PHP Version? **/
$minPHPVersion = '8.0';
if (phpversion() < $minPHPVersion) {
    die("Sorry, PHP version must be" . "<strong>" . " {$minPHPVersion} or higher " . "</strong>" . " to run this app." . " <br />" . "Your current version is: " . "<strong>" . phpversion()) . "<strong>";
};

/** Path to this file **/
const ROOTPATH = __DIR__ . DIRECTORY_SEPARATOR;

require '../app/core/init.php';

DEBUG ? ini_set('display_errors', 1) : ini_set('display_errors', 0);

$app = new App;
$app->loadController();