<?php
interface flightBookingServices {                  //We don't have much idea about the actual implementation so we are using interfaces and its method 
                                                    //is common for every class which exteds this interfaces
    public function checkFlightsAvailability();     //fuction of interface
	public function bookFlights();                  // function of interface
}

class AirIndia implements flightBookingServices {     //AirIndia Implements the  interface
    public function checkFlightsAvailability(){
        //Get  List of available flights
    }
	
    public function bookFlights(){
        //Book available flights
    }
}

class IndiGO implements flightBookingServices {          //IndiGO implements the interface
    public function checkFlightsAvailability(){
        
    }
	
    public function bookFlights(){
        //Book available flights
    }
}

?>
