<?php
require_once 'Dice.php';

  $diceQuant = $_POST['Number_of_Dice'];
  $num_of_sides = $_POST['Number_of_Sides'];
  
  $array = [];
  for($i = 0; $i < $diceQuant; $i ++) {
    $newDice = new Dice($num_of_sides);
    $newDice->roll();
    $array[] = $newDice;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dice-Throwing Game</title>
</head>
<body>

  <form action = "" method = "post">
    <input type = "number" name="Number of Dice" value= ""> 
    <select id = "sides" name = "Number of Sides">
      <option value = "4"> 4 </option>
      <option value = "6"> 6 </option>
      <option value = "10"> 10 </option>
      <option value = "20"> 20 </option>
    <input type ="submit" value = "Submit the form">
  </form>

    <div class = "dice">
      <?php 

        foreach($array as $newDice){
          echo $newDice;
        }

      ?>

  </div>

  <style>

    .dice {
      display:flex;
      flex-flow: row wrap;
    }
    .di {
      border: 1.5px solid black;
      font-size:2em;
      padding: .3em;
      margin:.1em;
    }
    </style>
  
</body>
</html>