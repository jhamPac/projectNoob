<?php require_once( __DIR__ . '/public/includes/header.php');?>
    
         <div class="container clearfix">
            <div class="row">
                <div class="col-xs-12">
            
                    <div class="panel panel-default">
                        
                        <div class="panel-heading">
                            
                            <h1>Up Load with Php</h1>
                            <?php require_once( __DIR__ . '/public/includes/nav_button.php' ); ?>
                            
                        </div>
                        
                        <div class="panel-body">
                            
                            <div class="upload-form">
                            
                                <form id="file-loader" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"></form>
                                
                                <table class="table table-bordered">
                                    
                                    <tr>
                                        <td>
                                            <span>Upload</span>
                                        </td>
                                        <td><input type="text" form="file-loader" name="input-upload">
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <span>Submit when done</span>
                                        </td>
                                        
                                        <td>
                                            <button type="submit" class="btn btn-success" form="file-loader">Submit</button>
                                        </td>
                                        
                                        
                                    </tr>
                                    
                                </table>
                                
                            </div>
                            
                        </div>
                        
                        <div class="panel-footer">
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
                
<?php require_once( __DIR__ . '/public/includes/footer.php' );?>
        