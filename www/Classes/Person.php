<?php 

class Person {
    
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
