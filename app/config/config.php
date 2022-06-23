<?php
//Database params
define('DB_HOST', 'localhost'); //Add your db host
define('DB_USER', 'root'); // Add your DB root
define('DB_PASS', ''); //Add your DB pass
define('DB_NAME', 'idealprof'); //Add your DB Name

//APPROOT
define('APPROOT', dirname(dirname(__FILE__)));

//URLROOT (Dynamic links)
define('URLROOT', 'http://localhost/fil_rouge/Projet-fil-rouge');



define('BASE_REQUEST_URL',preg_replace('#^/fil_rouge/Projet-fil-rouge/pages/#i','',parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)));
//Sitename
define('SITENAME', 'IdealProf');
