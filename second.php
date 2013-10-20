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


Echo '<br/>Some database operation';

//$sqlquery = 'select id, name, type, size, created, modified from my_files where name like \'%sandee%\'';
$sqlquery = 'select id, name, type, size, created, modified from my_files';
echo "<BR/> SQL : $sqlquery <br/>";
$resultresource = mysql_query($sqlquery, $mysqlconnection) or die('could not fetch from database');
ECHO "<BR/> Result: $resultresource <br/>";

//$resultarray = mysql_fetch_array($resultresource,MYSQL_BOTH);
//var_dump($resultarray);

echo '<TABLE border="1">';
while($row = mysql_fetch_array($resultresource,MYSQL_ASSOC)){
    /*echo '<PRE>';
    print_r($row);
    echo '</PRE>';
    echo '<BR/>';*/
    /*extract($row, EXTR_PREFIX_ALL, "sql_data_");
    echo " name : $sql_data_name";*/
    extract($row);
    /*echo " name : $name";*/
    //echo "<TR> <TD>$sql_data_id</TD> <TD>$sql_data_name</TD> <TD>$sql_data_type</TD> <TD>$sql_data_size</TD> <TD>$sql_data_created</TD> <TD>$sql_data_modified</TD> </TR>";
    echo "<TR> <TD>$id</TD> <TD>$name</TD> <TD>$type</TD> <TD>$size</TD> <TD>$created</TD> <TD>$modified</TD> </TR>";
}
echo '</TABLE>';


ECHO '<BR/>&gt;&gt;Now attempting to close database';
mysql_close($mysqlconnection);
Echo '<br/>&lt;&lt;Database connection closed';
?>