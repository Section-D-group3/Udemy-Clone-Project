<?php
/* App Info*/
define('APP_NAME','Udemy APP');
define('DESCRIPTION', 'Free and paid tutorials');


/*Database Configuration */
if($_SERVER['SERVER_NAME'] == 'localhost'){
  // config for local server
  define('DBHOST', 'localhost');
  define('DBNAME', 'udemy_db');
  define('DBUSER', 'root');
  define('DBPASSWORD', '');
  define('DBDRIVER', 'mysql');
  define('ROOT', 'http://localhost/Udemy-Clone-Project/public');
}else{
  // config for remote server
  define('DBHOST', 'localhost');
  define('DBNAME', 'udemy_db');
  define('DBUSER', 'root');
  define('DBPASSWORD', '');
  define('DBDRIVER', 'mysql');
}