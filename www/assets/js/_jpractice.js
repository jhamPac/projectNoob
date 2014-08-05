;( function( $, window, undefined ) {
    'use strict';
    
    var civic = {
    
        holder : $( "div.json textarea" ),
        action : $("div.json button.json_click" ),
        json : "",
    
        init : function () {
            
            civic.action.on( 'click', function() {
                $.ajax({
                   type : "GET",
                   url : "/assets/json/youtube.json",
                   contentType: "application/json; charset=utf-8",
                   dataType : "text",
                   success : function( data ) {
                       civic.json = $.parseJSON( data );
                       civic.holder.text( civic.json.data.items[0].player.default);
                       
                   } 
                });
            });
        
        }
    
    }
         
    civic.init();
    
} ( jQuery, this ) );