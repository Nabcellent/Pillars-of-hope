$( '.navbar-nav a' ).on( 'click', function () {
    $( '.navbar-nav' ).find( 'li a.active' ).removeClass( 'active' );
    $( this ).parent( 'li>.a' ).addClass( 'active' );
});