// This may also be shorthand for $( document ).ready()
// https://learn.jquery.com/using-jquery-core/document-ready/
;( function( utilities, $, window, document, axios, moment, undefined ) {

    // This allows for javascript that should work pretty consistently across browsers and platforms.
    'use strict';

    // Initialize the datepicker
    // https://bootstrap-datepicker.readthedocs.io/en/latest/
    $( '.use-datepicker' ).datepicker({
        'autoclose': true
        }
    );

// confirms whether the user is sure if they want to complete the given action
} )( window.utilities = window.utilities || {},
    window.jQuery,
    window,
    document,
    window.axios,
    window.moment
  );

  // Down here is the code the defines the parameters used at the top of this
  // self-executing function. undefined is not defined so it is undefined. LOL
