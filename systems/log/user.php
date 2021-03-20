<?php
class User
{
    //properties
    public $name;
    public $last_name;
    public $address;
    public $country;
    public $passport;
    public $zip;
    
    //class constructor
    function __construct($name, $last_name, $address, $country, $passport, $zip)
    {
        $this->name         = $name;
        $this->last_name    = $last_name;
        $this->address      = $address;
        $this->country      = $country;
        $this->passport     = $passport;
        $this->zip          = $zip;
        
    }
}
?>