<?php require( realpath(dirname(_FILE_)) . '/public/includes/header.php');?>
    <body>
    
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-12">
                            
                                    <form action="index.php" method="get">
                                    
                                       <button type="submit" class="btn btn-default">Home</button>
                                        
                                    </form>
                            
                                </div>
                            </div>
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                            
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <?php require($_SERVER['DOCUMENT_ROOT'] . "/public/files/class_account.php");
                                    
                                    $John = new account( 12345, "John Smith");
                                    $Mark = new account( 21345, "Mark Mexican");
                                    echo $John->get_acc_name();
                                    echo $John->get_acc_number();
                                    echo "<br>";
                                    echo $Mark->get_acc_name();
                                    echo $Mark->get_acc_number();
                                    echo "Hello " . $Mark->get_acc_name() . " your account number is " . $Mark->get_acc_number();
                                    echo $John; //trying toString();
                                          
                                    ?>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12 json">
                                    
                                    <button type="button" class="json_click" value="Show">SHOW</button>
                                    <textarea readonly></textarea>
                                    
                                </div>
                                
                                <div class="col-md-12">
                                    <?php 
                                        
                                        $numbers = [ 1, 2, 3 ];
                                        
                                        foreach( $numbers as $x ) {
                                            echo $x;
                                        }
                                        
                                    ?>
                                </div>        
                                    
                            </div>
                        </div>
                            
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                </div>
                            </div>                
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        
<?php require( realpath(dirname(_FILE_)) . '/public/includes/scripts_to_load.php' );?>
        
    </body>
</html>
