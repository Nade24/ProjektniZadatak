<!--
Author: Nadir Mesetovic
File: index.php
 -->
<?php
echo "<html>
<head>
<script
      src='https://code.jquery.com/jquery-3.4.1.js'
      integrity='sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU='
      crossorigin='anonymous'></script>
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
</head>
<body>
  <div class='container'>
    <div class='row'>
    <form id='form_calculation'>
      <table class='table table-responsive'>";
    $operation = "X";
    for($i = 1; $i <= 10; $i++)
    {
      echo "<tr>";
      for($j = 1; $j <= 10; $j++)
      {
      echo "<td class='id' data-factor1='$i' data-factor2='$j' data-operation='$operation'>"
                .$i." ".$operation." ".$j.
              "</td>";
      }
      echo "</tr>";
    }
    echo "</table>
         </form>
         <h1 class='result'></h1>
        </div>
      </div>
    </body>
  </html>";
?>

<script type="text/javascript">
// pritiskom na kolonu koja ima ime klase ID uzima se vrijednosti iz data atributa
// te spremamo atribute u promjenjive. Nakon toga, u klasi 'result' smjestamo rezultat
$( document ).ready(function() {
  $('.id').click(function(){
      var factor1 = $(this).data('factor1');
      var factor2 = $(this).data('factor2');
      var operation = $(this).data('operation');
      $('.result').text("Result is: "+factor1*factor2);

// pozivanje AJAX metodom POST koja ide na klasu Calculator te prosljedjuje parametre
// prvi faktor, drugi faktor te tip operacije koji se koriste
// kao rezultat "SUCCESS" iskoristen je TOAST poruka iz Materialize CSS kao notifikacija
// da se radi o uspjeno obavljenom poslu
  $.ajax({
     type: "POST",
     url: "class/calculator.class.php",
     data: {firstFactor: factor1, secondFactor: factor2, operationType: operation},
     success: function(data){
       M.toast({html: 'SUCCESSFULLY ADDED TO DATABASE'})
     }
    });
  });
});
</script>
