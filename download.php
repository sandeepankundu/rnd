<?PHP
//ECHO 'Download page. download requested for '.htmlspecialchars($_GET["id"]);

$requestedId= intval($_GET["id"]);
/*echo "<br/>requested id : $requestedId";
if(is_int($requestedId)){
    echo 'Yes we can proceed';
}
else{
    echo 'No we cannot proceed';
}*/

$mysqlconnection = mysql_connect('localhost:3306','root','') or die('&lt;&lt;Could not connect to database');
$dbselected = mysql_select_db('Test01',$mysqlconnection);

$sqlquery = "select data,name, type, size from my_files where id= $requestedId";

$resultresource = mysql_query($sqlquery, $mysqlconnection) or die('could not fetch from database');

$rows=mysql_num_rows($resultresource);
//echo 'number of rows is '.$rows;

if($rows == 1){
    //echo '<br/>NOW lets download the file';
    $row = mysql_fetch_array($resultresource,MYSQL_ASSOC);
    extract($row);
    header('Content-type: '.$type);
    header("Content-Disposition: inline; filename='$name'");
    echo($data);
}
else{
    echo 'Cannot download. Invalid request.';
}

mysql_close($mysqlconnection);

?>