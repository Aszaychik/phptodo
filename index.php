<?php
$nickName = "As Zaychik";

function saveData($waifuList){
  file_put_contents('waifuList.txt', serialize($waifuList));
  header('Location:index.php');
}

$waifuList = [];

if(file_exists('waifuList.txt')){
  $file = file_get_contents('waifuList.txt');
  $waifuList = unserialize($file);
}

if(isset($_POST['name']) && isset($_POST['age'])){
  $nameInput = $_POST['name'];
  $ageInput = $_POST['age'];
  $waifuList[] = [
    "name" => $nameInput,
    "age" => $ageInput
  ];
  saveData($waifuList);
}

if(isset($_GET['delete'])){
  unset($waifuList[$_GET['key']]);
  saveData($waifuList);
}

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
  <form action="" method="POST">
    <fieldset>
      <h1 align='center'>Input Waifu List</h1>
      <label for="name">name</label>
      <input type="text" name="name" id="name" placeholder="<?= $nickName;?>">
      <label for="age">age</label>
      <input type="number" name="age" id="age" placeholder="">
      <button type="submit">Input</button>
    </fieldset>
  </form>
  <h2 align='center'>Waifu List</h2>
  <table border="1" >
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Age</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      
      $i = 0;
      foreach ($waifuList as $key => $value) {
      $i++;
      ?>
      <tr>
        <td><?= $i;?></td>
        <td><?= $value["name"];?></td>
        <?php if($value["age"] == null){
          $value["age"] = "?";
        };?>
        <td><?= $value["age"];?></td>
        <td><a href="index.php?delete=1&key=<?= $key;?>" onclick="return confirm('Delete character from Waifu List ?')">X</a></td>
      </tr>
      <?php 
      };?>
    </tbody>
  </table>
</body>
</html>