<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjumlahan</title>
</head>
<body>
<h1> PENJUMLAHAN </h1>
<form method="post">
Nilai A adalah  <input type="text" name="a" value="<?php echo $_POST["a"] ?>" required><br>
Nilai B adalah  <input type="text" name="b" value="<?php echo $_POST["b"] ?>" required><br>
<br><input type="submit" value="Jumlahkan">
<br><br>

<?php
$a=$_POST["a"];
$b=$_POST["b"];
$penjumlahan = $a+$b;
echo "<br>Nilai A adalah $a <br>"; 
echo "Nilai B adalah $b <br>";
echo "Jadi Nilai A ditambah Nilai B adalah $penjumlahan <br>";
?>
</form>
</body>
</html>