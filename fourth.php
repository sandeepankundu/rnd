<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sandeepankundu
 * Date: 21/10/13
 * Time: 8:38 PM
 * To change this template use File | Settings | File Templates.
 */

include "abstractexp.php";

echo "<br/>Abstract class, interface and concrete class";

//var
$clsIns = new Brain();
echo "<br/>think return :-> ".$clsIns->think("' work '.");
echo "<br/>interface menthod implementation call returns :::-> ".$clsIns->some_method("'some val'.");

?>