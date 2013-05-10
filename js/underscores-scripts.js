/**
 * Underscores.me specific javascript functionality
 */
 jQuery( function( $ ) {
 	var advanced, simple,
 		form = $('#generator-form');
 	
	advanced = $('<a href="#" class="generator-form-optionstoggle">Advanced Options</a>').appendTo('.generator-form-primary');
	simple   = $('<a href="#" class="generator-form-optionstoggle">Simple Options</a>').appendTo('.generator-form-secondary');
 	
 	advanced.click( function( event ) {
		form.removeClass('generator-form-skinny');
		event.preventDefault();
 	});
 	
 	simple.click( function( event ) {
 		form.addClass('generator-form-skinny');
		event.preventDefault();
 	});
 });