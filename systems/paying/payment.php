<?php

class Payment
{
    //properties
    public $trip;
    public $card;
    
    //construtor
    function __construct($trip, $card)
    {
        $this->trip = $trip;
        $this->card = $card;
    }
    
    //set methods
    function set_trip($trip){$this->trip = $trip;}
    function set_card($card){$this->card = $card;}
    
    //get methods
    function get_trip(){return $this->trip;}
    function get_card(){return $this->card;}
}
?>