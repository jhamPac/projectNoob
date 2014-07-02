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
                        
                        $find = strrpos('abcdefghijklmnopqrstuvwxyz', 2 );
                        
                        if( $find ) {
                            echo 'yes thats true';
                        }
                        
                        else {
                            echo 'nope thats false';
                        }
                            
                        ?>
                    </div>
                    
                    <div class="panel-footer">
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div> <!-- container end -->


<?php require( __DIR__ . '/public/includes/footer.php' );?>