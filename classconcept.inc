<?PHP
class Vehicle{

    var $color;
    protected $wheels;
    //var $wheels;

    function Vehicle($color="silver", $wheels=2){
        $this->color=$color;
        $this->wheels=$wheels;
    }

    /* IN PHP 5
     * public function __construct($color="silver", $wheels=2){
        $this->color=$color;
        $this->wheels=$wheels;
    }*/

    function what_is_the_color(){
        return $this->color;
    }

    function how_many_wheels(){
        return $this->wheels;
    }
}

class RedCar extends Vehicle{
    public function __construct(){
        parent::Vehicle("RED",4);       //both the lines are same
        //$this->Vehicle("RED",4);      //both the lines are same
    }
}
?>