(function($){

  $('#form_msg').submit(function(e){
    $.post("traitement.php", $('#form_msg').serialize(), function(texte){
      $('#text').append(texte); //probleme car affiche message plusieur fois trouve solution
    });
    return false;
  });

})(jQuery);

// explication pour serialize https://openclassrooms.com/courses/un-site-web-dynamique-avec-jquery/le-fonctionnement-de-ajax#/id/r-1572818
