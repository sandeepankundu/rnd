<?PHP
    ECHO "My first dummy 	PHP PAGE ";

$abc = array();
$abc[] = "value first";
echo"<BR/>";
var_dump($abc);
echo"<BR/>";

$abc[0] = "value second";
echo"<BR/>";
var_dump($abc);
echo"<BR/>";


$abc["kEY1"] = "value second";
echo"<BR/>";
var_dump($abc);
echo"<BR/>";

$abc["key2"] = array('key21'=> 'value 21', 'key22'=>'value 22');
echo"<BR/>";
var_dump($abc);
echo"<BR/>";

echo"<BR/>";
var_dump($abc["key2"]);
echo"<BR/>";

echo"Changing array keys to lowercase<BR/>";
echo"=================================<BR/>";
$abc = array_change_key_case($abc);
var_dump($abc);
echo"<BR/>";

echo"Changing array keys to uppercase<BR/>";
echo"=================================<BR/>";
$abc = array_change_key_case($abc,1);
var_dump($abc);
echo"<BR/>";


?>