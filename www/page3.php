<?php require( __DIR__ . '/public/includes/header.php');?>
    <body>
        
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-12 mysql">
                    <div class="panel panel-default">
                        
                        <div class="panel-heading">
                        
                            <h1>Php and Mysql</h1>    
                            <?php require_once( __DIR__ . '/public/includes/nav_button.php' ); ?>
                            
                        </div>
                        
                        <div class="panel-body">
                        <?php
                          
                          try {
                          $db = new PDO('mysql:host=localhost;dbname=projectx_db', 'root', 'password');
                          $db->setAttribute( PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                          $db->exec("SET NAMES 'utf8'" );
                            
                          } catch ( Exception $e ) { 
                          echo "Could not link to mysql database.";
                          exit();
                          }
                          
                          try{
                              $results = $db->query("SELECT post_date, post_content FROM wp_posts");
                          } catch( Exception $e ) {
                              echo "Data could not be retrieved, sorry.";
                              exit();
                          }
                          
                          echo "<pre>";
                          var_dump( $results->fetchall( PDO::FETCH_ASSOC) );
                          echo "</pre>";
                          
                          
                          
                           
                        ?>
                        </div>
                        
                        <div class="panel-footer">
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
<?php require( __DIR__ . '/public/includes/scripts_to_load.php' );?>
        
    </body>
</html>