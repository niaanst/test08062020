<?php
$huruf = array('d','u','x','y','a','g','q','v','j','s');
$tampil= count($huruf);
echo 'huruf yang ada di dalam array  ' ;
for ($x = 0; $x<count($huruf);$x++){
	echo  $huruf[$x] . ',' ;
}

//sort untuk mengurutkan ascending
echo '<br>'.'hasil pengurutan dari array diatas adalah ' ;
sort($huruf);
foreach($huruf as $value){
    echo $value . ',';
}

?>