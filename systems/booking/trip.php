<?php 

class Trip 
{

	// variable declaration
	public $fromID;
    public $toID;
	public $dateTime;  
	public $airlineClass;
	
	function __construct($fromID, $toID, $dateTime,$airlineClass) 
    {
	   $this->fromID = $fromID;
	   $this->toID = $toID;
	   $this->dateTime = $dateTime; 
	   $this->airlineClass = $airlineClass;
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