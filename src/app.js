const $ = require("jquery");
const Handlebars = require("handlebars");

$(document).ready(function() {

$.ajax(
  {
    "url": "http://localhost/php-ajax-dischi/api.php",
    "method": "GET",
    "success": function(data){
      renderAlbum(data, );
      console.log(data);
    },
    "error": function(err){
      alert("Errore");
    }
  }
)


//Funzione render renderAlbum
function renderAlbum(array) {

  var source = $("#album-template").html();
  var template = Handlebars.compile(source);

  for (var i = 0; i<array.length; i++) {
    console.log(array[i]);

    var context = {
     "poster": array[i]["poster"],
     "title": array[i]["title"],
     "artist": array[i]["author"],
     "year": array[i]["year"],
    }
    var html = template(context);
    $(".grid").append(html);
  }
}

})
