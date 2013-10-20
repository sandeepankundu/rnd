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

echo"=================================<BR/>";
print_r($abc);
echo"<BR/>";
var_dump($abc);


echo"<br/>======== SEARCHING IN ARRAY ===================<BR/>";
$valuetosearch = "needle";
$abc["newkey"] = "needle in a haystack";

print_r($abc);
echo"<br/> searching '$valuetosearch' => result => ". array_search($valuetosearch , $abc);
$valuetosearch = "needle in a haystack";
echo"<br/> searching '$valuetosearch' => result => ". array_search($valuetosearch , $abc) . " <br/>";

echo"<br/>======== All Keys IN ARRAY ===================<BR/>";
print_r( array_keys(@$abc));
echo"<br/>";
var_dump( array_keys(@$abc));

echo"<br/>======== EXTRACT => taken an array and assign its keys as variables with their values ===================<BR/>";
$myarr = array( 'fname'=>"sandeepan",'lname'=>'kundu', 'age'=>33);
var_dump( array_keys(@$abc));
extract($myarr);
echo "<br/>First Name: $fname <br/> Last Name: $lname <br/> Age : $age";
echo '<br/>First Name: '.$fname.' <br/> Last Name: '.$lname.' <br/> Age :'. $age;

?>