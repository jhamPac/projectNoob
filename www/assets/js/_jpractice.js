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
                   url : "/public/json/info.json",
                   contentType: "application/json; charset=utf-8",
                   dataType : "text",
                   success : function( data ) {
                       civic.json = $.parseJSON( data );
                       civic.holder.text( civic.json.user[0].name + " " + civic.json.user[0].id + " " + civic.json.user[0].join_date );
                       
                   } 
                });
            });
        
        }
    
    }
         
    civic.init();
    
} ( jQuery, this ) );