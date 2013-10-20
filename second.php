<?PHP
ECHO "MYSQL Data Access";
Echo '<br/>&gt;&gt;Attempting My sql data connection';
$mysqlconnection = mysql_connect('localhost:3306','root','') or die('&lt;&lt;Could not connect to database');
Echo '<br/>&lt;&lt;Connected to database';



Echo '<br/>Some database operation';


ECHO '<BR/>&gt;&gt;Now attempting to close database';
mysql_close($mysqlconnection);
Echo '<br/>&lt;&lt;Database connection closed';
?>