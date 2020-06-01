<?php
//array
//Variabel yang dapat memiliki banyak nilai

//cara lama
// $lama = array("Senin","Selasa","Rabu");
// var_dump($lama);


//cara baru
// $baru = ['Senin','Selasa','Rabu'];
// var_dump($baru)

//kita akan menggunakan cara baru

//menambah array
$baru = ['Senin','Selasa','Rabu'];
$baru[] = "Kamis";
var_dump($baru)
?>