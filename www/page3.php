<?php require( realpath(dirname(_FILE_)) . '/public/includes/header.php');?>
    <body>
        
        <div class="container clearfix">
            <div class="row">
                <div class="panel panel-default">
                    
                    <div class="panel-heading">
                        
                        <form action="index.php" method="get">
                        
                           <button type="submit" class="btn btn-default">Home</button>
                            
                        </form>
                        
                    </div>
                    
                    <div class="panel-body">
                        

                        <script src="/public/js/jQuery.js" type="text/javascript"></script> <!-- you have to load scripts before if you want to use stuff out of it such as a library directly or inline. Placing finished scripts at the bottom is a different idea. In that case you are not using inline you are waiting for the document to load first then grapping the scripts that manipulate them that way they are all there before the hooks and grabbers. -->
                        
                        <script>
                            
                            var sum = 0;
                            var arr = [ 1, 2, 3, 4, 5, ];
                            
                          $.each( arr, function(index, value) {
                              sum += value;
                          })
                            
                            document.write(sum);
                            
                        </script>
                        
                        
                    </div>
                    
                    <div class="panel-footer">
                        
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
<?php require( realpath(dirname(_FILE_)) . '/public/includes/scripts_to_load.php' );?>
        
    </body>
</html>