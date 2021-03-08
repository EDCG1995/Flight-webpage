<?php
class Card{
    //properties
    public $name;
    public $number;
    public $expiration;
    public $csn;
    
    //class constructor
    function __construct($name, $number, $expiration, $csn)
    {
        $this->name = $name;
        $this->number = $number;
        $this->expiration = $expiration;
        $this->csn = $csn;
    }
    
    //set methods
    function set_name($name){$this->name = $name;}
    function set_number($number){$this->number = $number;}
    function set_expiration($expiration){$this->expiration = $expiration;}
    function set_csn($csn){$this->csn = $csn;}
    //get methods
    function get_name(){return $this->name;}
    function get_number(){return $this->number;}
    function get_expiration(){return $this->expiration;}
    function get_csn(){return $this->csn;}
}
?>