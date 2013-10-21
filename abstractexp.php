<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sandeepankundu
 * Date: 21/10/13
 * Time: 8:39 PM
 * To change this template use File | Settings | File Templates.
 */

include "interfaceexp.php";

abstract class ABrain {
    public function think($property){
        return 'Thinking box thinks '.$property;
    }
}


class Brain extends ABrain implements IBrain{

    public function some_method($some_value)
    {
        return "value set is $some_value";
    }
}
?>