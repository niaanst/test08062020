<?php
$kata  = "IFS Solusi Integrasi,PT";
$huruf = str_split($kata);
$tampil= count($huruf);
$kecil = strtolower($kata);
echo 'kata yang diinput di dalam file coding adalah '. $kata. '<br/>';
echo 'huruf yang ada di dalam array :  '.'<br>' ;
for ($x = 0; $x<count($huruf);$x++){
	echo  $huruf[$x] . '<br/>' ;
}

echo '<br/>'.'banyak huruf i yang terdapat pada kata diatas adalah ' .substr_count($kecil, "i").'<br/>';
?>