<?php
define("DBHOST", "localhost");
define("DBNAME", "educatethenextgen_db");
define("DBPASS", "");
define("DBUSER", "root");

$dbcon = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
if (!$dbcon) {
    echo "db fail";
} else {


}