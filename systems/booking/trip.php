<?php 

class Trip 
{

	// variable declaration
	public $fromID;
    public $toID;
	public $dateTime; 
    public $dateReturnOptional; 
    public $airlineID; 
	public $airlineClass;
	public $flightPrice; 
	public $personalData;

	function __construct($fromID, $toID, $dateTime, $dateReturnOptional, $airlineID, $airlineClass, $flightPrice, $personalData) 
    {
	   $this->from = $fromID ['Departing Location'];
	   $this->to = $toID ['Arriving Location'];
	   $this->dateTime = $dateTime['Selected Date and Time']; 
	   $this->dateReturnOptional = $dateReturnOptional ['Selected Option of Return']; 
	   $this->airlineID = $airlineID ['Airline Selection']; 
	   $this->airlineClass = $airlineClass ['Selected Class'];
	   $this->flightPrice = $flightPrice ['Total Price of Flight']; 
	   $this->personalData = $personalData ['Personal Data of Customer'];
	} 
	

    public function isRoundTrip() 
    {
        if($dateturnOptional == true) 
        {
            echo "You have selected a roundtrip, see you soon!";
        }
        else
        {
            echo "You have not selected a roundtrip, stay safe!";
        }
    } 

}

?>