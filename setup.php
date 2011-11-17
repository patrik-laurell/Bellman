<?php
require_once "conn.php";

$sql = <<<EOS
CREATE TABLE IF NOT EXISTS users(
	id int(11) NOT NULL auto_increment,
	users varchar(50) NOT NULL default '',
	points int(11) NOT NULL default '0',
	PRIMARY KEY(id)
	)
EOS;

$result = mysql_query($sql) or die(mysql_error());


?>