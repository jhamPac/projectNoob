<?php 
    
   class account {
       
    private $account_number;
    private $full_name;
    
    function __construct( $number = "", $name = "" ) {
        $this->account_number = $number;
        $this->full_name = $name;
    }
    
    function __toString() {
        return $this->get_acc_name() . " " . $this->get_acc_number();
        
    }
    
    public function set_acc_number( $number2 ) {
        $this->account_number = $number2;
    }
    
    public function get_acc_number() {
        return $this->account_number . "<br>"; 
        
    }
    
    public function get_acc_name() {
        return $this->full_name . "<br>";
    }
       
}
    
?>