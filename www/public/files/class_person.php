<?php

class person {
    
    public $name;
    public $height;
    protected $social_insurance;
    private $pinn_number;
    
        function __construct( $the_name = "", $ht = "" ) {
            $this->name = $the_name;
            $this->height = $ht;
        }
        
        protected function set_name() {
            return $this->name;
        }
        
        function get_name() {
            return $this->name;
        }
        
        function set_height( $x ) { //parent set_height addition
            $this->height += $x;
        }
        
        function get_height() {
            return $this->height;
        }
        
       private function get_pinn_number() {
            return $this->pinn_number;
        }
    
}

class employee extends person {
    
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
                                
?>