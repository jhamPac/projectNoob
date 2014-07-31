<?php require( __DIR__ . '/assets/includes/header.php');?>
        
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-12 mysql">
                    <div class="panel panel-default">
                        
                        <div class="panel-heading">
                        
                            <h1>Php and Mysql</h1>    
                            <?php require( __DIR__ . '/assets/includes/nav_button.php' ); ?>
                            
                        </div>
                        
                        <div class="panel-body">
                        <?php
                          
                          //file that connects to mysql
                          require( __DIR__ . '/assets/includes/database.php' );
                          
                          try{
                              $results = $db->query("SELECT ID FROM wp_posts");
                          } catch( Exception $e ) {
                              echo "Data could not be retrieved, sorry.";
                              exit();
                          }
                          
                          echo "<pre>";
                          var_dump( $results->fetchall( PDO::FETCH_BOTH) );
                          echo "</pre>";
                          
                                
                           
                        ?>
                        </div>
                        
                        <div class="panel-footer">
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
<?php require( __DIR__ . '/assets/includes/footer.php' );?>
        