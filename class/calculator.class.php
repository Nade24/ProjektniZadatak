<!--
Author: Nadir Mesetovic
File: calculator.class.php
 -->
<?php
include 'config.php';
class Calculator
{

  public function __construct() {
  }

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

$calculator = new Calculator();

$firstFactor = $_POST['firstFactor'];
$secondFactor = $_POST['secondFactor'];
$operationType = $_POST['operationType'];

$calculator->multiply($firstFactor, $secondFactor, $operationType);
?>
