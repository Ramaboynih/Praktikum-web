<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganjil Genap</title>
</head>
<body>
<h2>Menentukan bilangan Ganjil Genap di PHP</h2>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
  Bilangan: <input type="text" name="bil">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<br>
<?php
$tampil = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bil = $_POST["bil"];
        
        if ($bil % 2 == 0){ //Kondisi
            echo "$bil Merupakan Bilangan Genap"; //Kondisi true
    }else {
            echo "$bil Merupakan Bilangan Ganjil"; //Kondisi false
    }
}
?>
</body>
</html>