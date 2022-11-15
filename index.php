<?php
$nickName = "As Zaychik";
$waifuList = [
  ["id" => 1,"name" => "Onikata Kayoko", "age" => 18],
  ["id" => 2,"name" => "Angelina Ajimu", "age" => null],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>aszaychik</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="">
    <fieldset>
      <h1 align='center'>Input Waifu List</h1>
      <label for="name">name</label>
      <input type="text" name="name" id="name" placeholder="<?= $nickName;?>">
      <label for="age">age</label>
      <input type="number" name="age" id="age" placeholder="">
    </fieldset>
  </form>
  
  <h2 align='center'>Waifu List</h2>
  <table border="1" >
    <thead>
    <tr>
        <th>Name</th>
        <th>Age</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      foreach ($waifuList as $waifu) {?>
      <tr>
        <td><?= $waifu["name"];?></td>
        <?php if($waifu["age"] == null){
          $waifu["age"] = "?";
        };?>
        <td><?= $waifu["age"];?></td>
      </tr>
      <?php 
      };?>
    </tbody>
  </table>
</body>
</html>