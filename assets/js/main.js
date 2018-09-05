/*
 * Copyright: Ariful Islam
 * Start Date: 16-03-2018
 * Licensed under MIT (https://github.com/arif98741/codeigniter_crud)
 * Email: arif98741@gmail.com
 * Web: www.phpdark.com
 * Twitter: www.twitter.com/arif98741
 */
 
 //Datatable Setup
 $(document).ready( function () {
    $('#datatable').DataTable();

    setTimeout(function(args) {
    	$('.message').slideUp(400);
    }, 3000);
} );
 