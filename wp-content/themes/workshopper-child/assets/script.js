jQuery(document).ready(function($) {
  var home_widgets = $("#home-page-widgets aside").length;
  console.log( home_widgets );
  if ( 3 == home_widgets ) {
    $("#home-page-widgets aside").addClass('third');
  } else if ( 2 == home_widgets ) {
    $("#home-page-widgets aside").addClass('half');
  }
});
