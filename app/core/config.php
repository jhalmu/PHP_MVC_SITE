<?php
defined('ROOTPATH') OR exit('Access Denied!');
// local and remote ROOT_URL
if($_SERVER['SERVER_NAME'] == 'localhost')
{
    /** local database config  **/
    define('DB_DRIVER', 'mysql');
    define('DB_NAME', 'my_db');
    define('DB_HOST', 'localhost');
    define('DB_PORT', '8889');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');

    /** local base url **/
    define('ROOT_URL', 'http://localhost:8888');

    //** show errors when in localhost **/
    define('DEBUG', true);
}
else
{
    define('ROOT_URL', 'https://www.site.com');
    define('DEBUG', false);

}

const IMG_URL = ROOT_URL . "/assets/img";
const CSS_URL = ROOT_URL . "/assets/css";
const JS_URL = ROOT_URL . "/assets/js";


