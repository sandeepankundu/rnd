<?PHP
ECHO "MYSQL Data Access";
Echo '<br/>&gt;&gt;Attempting My sql data connection';
$mysqlconnection = mysql_connect('localhost:3306','root','') or die('&lt;&lt;Could not connect to database');
Echo '<br/>&lt;&lt;Connected to database';


ECHO '<BR/>&gt;&gt;Select database - Test01';
$dbselected = mysql_select_db('Test01',$mysqlconnection);
/*
if($dbselected){
    Echo '<br/>&lt;&lt;Database Test01 selected';
}
else{
    Echo '<br/>&lt;&lt;Database Test01 NOT selected';
}
replaced with ternary operator
*/
Echo '<br/>&lt;&lt;Database Test01 '. ( $dbselected==0 ? "NOT " : "") . ' selected';


ECHO '<BR/>&gt;&gt;Now attempting to close database';
mysql_close($mysqlconnection);
Echo '<br/>&lt;&lt;Database connection closed';
?>