<?php

define("HOST", "localhost");
define("USR", "user");
define("PASS", "password");
define("DB", "presentation");

$conn = mysql_connect(HOST,USR,PASS) or die("Could not connect to the db; " . mysql_error());

mysql_select_db(DB, $conn) or die("Could not select db; " . mysql_error());


?>