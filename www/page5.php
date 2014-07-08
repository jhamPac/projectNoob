<?php require( __DIR__ . '/public/includes/header.php');?>

    <div class="container clearfix">
        <div class="row">
            <div class="col-xs-12">
                
                <div class="panel panel-default">
                    
                    <div class="panel-heading">
                        <h1>Regex Playground</h1>
                        <h1>&amp;</h1>
                        <h2>Random Php Functions</h2>
                    </div>
                    
                    <div class="panel-body">
                        <?php 
                        
                        $string = 'abcdefghijklmnopqrstuvwxyz';
                        $find = strrpos( $string, 'c' );
                          
                        ?>
                        
                        <?php if( $find === false ): ?>
                            
                            <?php echo 'Your variable was not in the string'; ?>
                            
                        <?php else: ?>
                        
                            <?php echo 'Your variable was found in the string'; ?>
                            
                        <?php endif; ?>
                            
                        <br>
                        
                        <!-- variable -->
                        <?php $reg = preg_match( '/z$/i', $string ); ?>
                        
                        <!-- check if preg_match -->
                        <?php if( $reg === 0 ): ?>
                        
                            <?php echo 'Match not found'; ?>
                            
                        <?php else: ?>
                        
                            <?php echo 'Match found yaaaay'; ?>
                            
                        <?php endif; ?>
                        
                        <br>
                        
                        <div class="col-xs-12">
                        
                            <p>Here I am just playing around with an array</p>
                            <?php
                            
                            $country = [ 
                            
                                'United States' => 'DC',
                                'Canada'        => 'Ontario',
                                'Mexico'        => 'Taco',
                                'Germany'       => 'Munich',
                                'Korea'         => 'Seoul'
                             
                            ];
                            
                            $country[] = ['Brazil' => 'Rio'];
                            
                            var_dump( $country );
                            
                            
                            
                            ?>
                        </div>
                            
                        
                    </div>
                    
                    <div class="panel-footer">
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div> <!-- container end -->


<?php require( __DIR__ . '/public/includes/footer.php' );?>