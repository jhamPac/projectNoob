<?php require_once( __DIR__ . '/public/includes/header.php');?>
    
    <div class="container clearfix">
        <div class="row">
            <div class="col-xs-12 oop">                
                <div class="panel panel-default">
                    
                    <div class="panel-heading">
                        <h1>OOP with JS and Php</h1>
                        <?php require_once( __DIR__ . '/public/includes/nav_button.php'); ?>
                    </div>
                    
                    <div class="panel-body">
                    
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <?php
                            
                            class Car {
                                
                                public $make;
                                public $model;
                                
                                function __construct( $make = '', $model = '') {
                                    $this->make  = $make;
                                    $this->model = $model;
                                }
                                
                                public function start() {
                                    echo "Car has started";
                                }
                                
                                public function drive() {
                                    echo "I am driving";
                                }
                                
                                public function stop() {
                                    echo "STOPPED";
                                }
                                
                                public function __toString() {
                                    return $this->make . " " . $this->model;
                                }
                            }
                            
                            $honda = new Car('honda', 'S2000');
                            echo $honda;
                            echo "<br>";
                            $honda->start();
                            echo "<br>";
                            $honda->drive();
                            echo "<br>";
                            $honda->stop();
                            echo "<br>";
                            
                             ?>
                        </div>
                     
                         <div class="col-md-6 col-sm-6 col-xs-12">
                            
                            <p>The following is an attempt to do the same thing with javascript</p>
                            
                        </div>
                        
                    </div>
                    
                    <div class="panel-footer">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<?php require_once( __DIR__ . '/public/includes/footer.php' );?>
