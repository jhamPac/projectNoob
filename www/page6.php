<?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    header( 'Location: index.php' );
    exit();
    
} ?>

<?php require( __DIR__ . '/assets/includes/header.php' );?>
        
        <div class="container-fluid clearfix">
            <div class="row banner">
            
                <div class="col-md-12 col-sm-12">
                    <h1>Php Form Handling</h1>
                </div>
                
                <?php require( __DIR__ . '/assets/includes/nav_button.php' ); ?>
            
                
            </div>
        </div> 
        
        <div class="container-fluid clearfix">
            <div class="row form-wrapper">
                <div class="col-md-12 col-sm-12">
                
                    <div id="get-in-touch">     
                        
                        <header class="contact">
                            <h2>Contact Me</header>
                        </header>
                        
                        <section class="contact">
                            
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                <label>Name</label>
                                <input name="name" placeholder="Type Here" autocomplete="off">
                                        
                                <label>Email</label>
                                <input name="email" type="email" placeholder="Type Here" autocomplete="off">
                                        
                                <label>Message</label>
                                <textarea name="message" placeholder="Type Here"></textarea>
                                        
                                <input id="submit" name="submit" type="submit" value="Submit">
                            </form>
                            
                        </section>
                        
                        <footer class="contact">
                            
                        </footer>
                        
                    </div>
                    
                    
                    <div class="col-md-12">
                        
                
                        
                    </div>
                    
                </div>
            </div>
        </div>  
       
<?php require( __DIR__ . '/assets/includes/footer.php' );?>
        