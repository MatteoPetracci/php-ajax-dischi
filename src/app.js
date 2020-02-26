const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function(){
  // alert('ciao');
  $.ajax({
    'url': 'http://localhost/php-ajax-dischi/server-2.php',
    'method': 'GET',
    'success': function (data) {
      // console.log(data);
      printCd(data)
    },
    'error': function(error) {
      alert('error' + error);
    }
  });
});


function printCd(cd) {
  var source = $("#entry-template").html();
  console.log(source);
  var template = Handlebars.compile(source);
  for (var i = 0; i < cd.length; i++) {
    var context = cd[i];
    var html = template(context);
    $('main').append(html);
  }
}
