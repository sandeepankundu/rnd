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
print_r( array_keys($abc));
echo"<br/>";
var_dump( array_keys($abc));

echo"<br/>======== EXTRACT => takes an array and assign its keys as variables with their values ===================<BR/>";
$myarr = array( 'fname'=>"sandeepan",'lname'=>'kundu', 'age'=>33);
var_dump( $abc);
extract($myarr);
echo "<br/>First Name: $fname <br/> Last Name: $lname <br/> Age : $age";
echo '<br/>First Name: '.$fname.' <br/> Last Name: '.$lname.' <br/> Age :'. $age;


echo"<br/>======== COMPACT => take variables and assigns their name and values into an array ===================<BR/>";
$abc_fname ="victor";
$abc_lname ="moussa";
$abc_location ="quebec";
$abc_zip = 54321;

$resultarray = compact( 'abc_fname', 'abc_lname', 'abc_zip' );
var_dump( $resultarray);
echo "<br/>";
print_r( $resultarray);

echo"<br/>======== array pointers in array to move forward/backward, etc, specifically for looping ===================";
echo"<br/>current(),key(), next(), prev(),end(),reset()<BR/>";
$arrayloop = array('zero','one','two','three', 'four');
echo "<br/>";
print_r( $arrayloop);

echo '<br/> current($arrayloop)=> '. current($arrayloop), ', ';
echo '<br/> key($arrayloop)=> '. key($arrayloop), ', ';
echo '<br/> next($arrayloop)=> '. next($arrayloop), ', ';
echo '<br/> key($arrayloop)=> '. key($arrayloop), ', ';
echo '<br/> current($arrayloop)=> '. current($arrayloop), ', ';
echo '<br/> end($arrayloop)=> '. end($arrayloop), ', ';
echo '<br/> key($arrayloop)=> '. key($arrayloop), ', ';
echo '<br/> current($arrayloop)=> '. current($arrayloop), ', ';
echo '<br/> prev($arrayloop)=> '. prev($arrayloop), ', ';
echo '<br/> key($arrayloop)=> '. key($arrayloop), ', ';
echo '<br/> current($arrayloop)=> '. current($arrayloop), ', ';
echo '<br/> reset($arrayloop)=> '. reset($arrayloop), ', ';
echo '<br/> key($arrayloop)=> '. key($arrayloop), ', ';
echo '<br/> current($arrayloop)=> '. current($arrayloop), ', ';

?>