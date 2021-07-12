
<?php
$angka = array(8,20,50,33,89,35,23,90,101,77,23);
$max = max($angka);
$tampil= count($angka);
for ($x = 0; $x<count($angka);$x++){
	echo 'nilai yang ada di dalam array yang ke  '. $x .' adalah '. $angka[$x] . '<br/>' ;
}
echo 'nilai max dari array diatas adalah '. $max;
?>