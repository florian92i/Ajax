<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Test scroll</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <style>
     ul {
         float: left;
         list-style: none;
         padding: 0px;
         border: 1px solid black;
         margin-top: 0px;
     }

     input, ul {
         width: 250px;
     }

     li:hover {
         background-color: #17a2b8;
         cursor: pointer;
     }
 </style>
</head>
<body class="container-fluid">
  <h1>Autocompletion</h1>

      <input type="text" name="data" id="data"><br>

     <div id="affiche"></div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script>
    $(document).ready(function(){

      $("#data").keyup(function(){

          if ($("#data").val() != "") {
              $.post(
                  "traitement.php",
                  {
                      data: $("#data").val()
                  },
                  function (texte) {

                      $('#affiche').show();
                      $('#affiche').html(texte); // si on met text cela ne prendra pas en compte les baliste html
                  },
                  'JSON'
              );

              return false;
          }

          else {
              $('#affiche').hide(); // permet d'effacer la div lorsqu'elle ne contient rien
          }
      });

      $(document).on('click','li',function () {
          var mot = $(this).text();
          $("#data").val(mot);
          $("#affiche").html("");
      })

    });
  </script>
</body>
</html>
