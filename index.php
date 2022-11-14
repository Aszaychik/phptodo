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
    <label for="username">username</label>
    <input type="text" name="username" id="username" placeholder="<?= $nickName;?>">
    <label for="password">password</label>
    <input type="password" name="password" id="password" placeholder="********">
  </form>
  
  <table border="1" >
    <h2>Waifu List</h2>
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