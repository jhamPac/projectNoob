<?php  
include_once( 'Person.php' );


class Employee extends Person {
    
    function __contruct( $employee_name = "", $htf = "" ) {
        $this->set_name( $employee_name );
        $this->height = $htf;
    }
    
    function set_height( $y ) {
    
        if ( $y <= 5 ) {
        $this->height *= $y; //use different set_height depending on argument integer
        } else {
            person::set_height( $y );
        }
    }
    
}



