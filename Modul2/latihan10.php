<?php

$arrNilai=array('ani'=>80,'otim'=>90,'ana'=>75,'budi'=>85);
echo 'menampilkan isi array dengan foreach : <br>';
	foreach($arrNilai as $nama=>$nilai){
	echo 'nilai '.$nama.' = '.$nilai.'<br>';
	}
	reset($arrNilai);
	echo 'menampilkan isi array dengan while dan list : <br>';
	while(list($nama,$nilai)=each($arrNilai))
	{
		echo 'nilai '.$nama.' = '.$nilai.'<br>';
	}
	
?>