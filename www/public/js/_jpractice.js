;( function( $, window, undefined ) {
    'use strict';
    
    var butt = {
    
        holder : $( "div.json textarea" ),
        crap : $("div.json button.json_click" ),
        json : "",
    
        init : function () {
            
            butt.crap.on( 'click', function() {
                $.ajax({
                   type : "GET",
                   url : "/public/json/info.json",
                   contentType: "application/json; charset=utf-8",
                   dataType : "text",
                   success : function( data ) {
                       butt.json = $.parseJSON( data );
                       butt.holder.text( butt.json.user[0].name + " " + butt.json.user[0].id + " " + butt.json.user[0].join_date );
                       
                   } 
                });
            });
        
        }
    
    }
         
    butt.init();
    
} ( jQuery, this ) );