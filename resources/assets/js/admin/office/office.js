
/* boton mostrar enviados */
$("#btn-sends").click(function(){
  $('#recived').css({"display" : "none"});
  $('#deleted').css({"display" : "none"});
  $('#sends').removeAttr("style");
});

/* boton mostrar eliminados */
$("#btn-deleted").click(function(){
  $('#recived').css({"display" : "none"});
  $('#sends').css({"display" : "none"});
  $('#deleted').removeAttr("style");
});

/* boton mostrar bandeja correo */
$("#btn-recived").click(function(){
  $('#sends').css({"display" : "none"});	
  $('#deleted').css({"display" : "none"});
  $('#recived').removeAttr("style");
});