;( function( $, window, undefined ) {
    'use strict';
    
    var swoop = {
        
        plane : $('.fly-in'),
        init : function() {
            
            swoop.plane.hide().show('slow');
        }
        
    }
             
    swoop.init();
    
} ( jQuery, this ) );