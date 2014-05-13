$(function() {

    $('#side-menu').metisMenu();
	


	
	$('.alert').fadeOut(3500);

$("input[type=text].url-input").focus(function() {
   $(this).select();
});
$("input[type='text'].url-input").click(function () {
   $(this).select();
});





$('.resumen').click(function(e) {
    e.preventDefault();
var div=$(this).attr('href');	


$(div).dialog({modal:true, 

 width: "auto",maxWidth: 750 ,
  maxHeight: 600,

  dialogClass: "no-close",
  create: function( event, ui ) {
    // Set maxWidth
    $(this).css("maxWidth", "660px");
  },
  buttons: [
    {
      text: "OK",
      click: function() {
        $( this ).dialog( "close" );
      }
    }
  ]
});







$(".ui-widget-overlay").click(function(){
    $(".ui-dialog-titlebar-close").trigger('click');
});


});






});

$(window).resize(function() {
    $(".detalles-resumen").dialog("option", "position", "center");
});


//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
$(function() {
    $(window).bind("load resize", function() {
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.sidebar-collapse').addClass('collapse')
        } else {
            $('div.sidebar-collapse').removeClass('collapse')
        }
    })
})
