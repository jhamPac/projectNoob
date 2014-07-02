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
                        
                        
                    </div>
                    
                    <div class="panel-footer">
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div> <!-- container end -->


<?php require( __DIR__ . '/public/includes/footer.php' );?>