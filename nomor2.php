<html>
<head>
	<title>Membuat Program Prima</title>
</head>
<body>
<form method="POST">
<table>	
	<tr>
		<p> membuat program bilangan prima </p>
		<td>Masukkan angka : <input type="number" name="angka"></td>
	</tr>
</table>
	<input type="submit" name="submit">
</form>
<?php
$angka = $_POST['angka'];
for($a=1;$a<=$angka;$a++){ // perulangan 1 sampai angka inputan
    $k=0;
    for($b=1;$b<=$a;$b++){ // perulangan bilangan pembagi
        if($a % $b == 0){ // modulus
            $k++;
        }
    }
        if($k == 2){ // salah satu syarat 2 bukan merupakan bilangan prima
        echo $a.'bilangan prima'.'<br/>';
        }
		else {
		echo $a. "bukan bilangan prima".'<br/>';
		}
}
 
?>