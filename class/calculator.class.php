<!--
Author: Nadir Mesetovic
File: calculator.class.php
 -->
<?php
// Ukljucivanje config fajla koji sadrzi podatke i povezivanje sa bazom podataka
include 'config.php';
class Calculator
{

  public function __construct() {
  }

  // funkcija 'multiply' prima tri argumenta te na osnovu treceg argumenta tj. operationType
  // provjerava da li je rijec o mnozenju 'X' ako jeste, pomnozice prva dva argumenta
  // ako ne, ispisat ce da se radi o nedozvoljenom odnosno ilegalnom operatoru.
  function multiply($x,$y,$z)
  {
    switch ($z) {
      case 'X':
          $result = $x * $y;
          $sql = "INSERT INTO tbl_calculator (factor1, factor2, result, operation)
          VALUES ($x, $y, $result, '$z')";
          if ($conn->query($sql) === TRUE) {
              echo "Uspjesno dodano";
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
        break;
      default:
        echo "Ilegall operator!";
        break;
    }
  }
}

// kreiranje objekta instance klase Calculator
$calculator = new Calculator();

// deklarisanje promjenjivih koji se koriste za prosledjivanje u funkciju mulitply
$firstFactor = $_POST['firstFactor'];
$secondFactor = $_POST['secondFactor'];
$operationType = $_POST['operationType'];

// pozivanje i prosledjivanje varijabli koji se koriste u funkciji multiply
$calculator->multiply($firstFactor, $secondFactor, $operationType);
?>
