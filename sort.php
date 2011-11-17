<?php
require_once "conn.php";
?>
<html>
<head>
	<link href="bellman.css" rel="stylesheet" type="text/css" >
</head>

<body>
	<?php
	
	$result=mysql_query("SELECT * FROM users ORDER BY points DESC;")
	or die(mysql_error());
	
	echo '<div class="highscore">';
	echo "<h1> Resultat </h1>";
	echo "<table>";

	while($row=mysql_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row["name"] . "</td>";
		echo "<td>" . $row["points"] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>";
	echo "</div>"
?>	
</body>
</html>
