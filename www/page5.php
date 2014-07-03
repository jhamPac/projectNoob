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
                        
                        <?php $reg = preg_match( '/z$/i', $string ); ?>
                        
                            <?php if( $reg === 0 ): ?>
                            
                                <?php echo 'Match not found'; ?>
                                
                            <?php else: ?>
                            
                                <?php echo 'Match found yaaaay'; ?>
                                
                            <?php endif; ?>
                            
                        
                        
                        
                    </div>
                    
                    <div class="panel-footer">
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div> <!-- container end -->


<?php require( __DIR__ . '/public/includes/footer.php' );?>