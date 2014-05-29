$( document ).ready(function () {

    $( "p" ).removeClass( "hidden" );
    $( "a.disappear" ).click(function( shit ) {
        shit.preventDefault();
        $( this ).hide( "slow");
    });
});
