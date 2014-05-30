<?php require( realpath(dirname(_FILE_)) . '/public/includes/header.php' );?>
    <body>
        
        <div class="container-fluid clearfix banner">
            <div class="row">
                <div class="col-md-12">
                    <h1>Fill out the form</h1>
                </div>
            </div>
        </div> 
        
        <div class="container-fluid clearfix">
            <div class="row auth">
                <div class="col-md-12">
                
                    <div id="columnA">     
                        
                        <form id="registration_form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">  
                            <label>Full name<span class="note">*</span>:</label>  
                            <input type="text" name="full_name" placeholder="FirstName LastName" autofocus="autofocus">     
                            <label>Email address<span class="note">*</span>:</label>  
                            <input type="text" name="email_addr">  
                            <label>Select Tour Package<span class="note">*</span>:</label>      
                            <select name="package">  
                            <option value="Goa">Goa</options>  
                            <option value="Kashmir">Kashmir</options>  
                            <option value="Rajasthan">Rajasthan</options>  
                            </select>  
                            <label>Arrival date<span class="note">*</span>:</label>  
                            <input type="text" name="arv_dt" placeholder="m/d/y">  
                            <label>Number of persons<span class="note">*</span>:</label>  
                            <input type="text" name="persons">  
                            <label>What would you want to avail?<span class="note">*</span></label>    
                            Boarding<input type="checkbox" name="facilities[]" value="boarding">  
                            Fooding<input type="checkbox" name="facilities[]" value="fooding">  
                            Sight seeing<input type="checkbox" name="facilities[]" value="sightseeing">  
                            <label>Discout Coupon code:</label>  
                            <input type="text" name="dis_code">  
                            <label>Terms and conditions<span class="note">*</span></label>  
                            <input type="radio" name="tnc" value="agree">I agree<br>  
                            <input type="radio" name="tnc" value="disagree">I disagree<br>  
                            <button type="submit" class="btn btn-large btn-success" name="submit">Complete reservation</button>  
                        </form> 

                    </div>
                    
                    
                    <div class="col-md-12">
                        
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>  
       
<?php require( realpath(dirname(_FILE_)) . '/public/includes/scripts_to_load.php' );?>
        
    </body>
</html>