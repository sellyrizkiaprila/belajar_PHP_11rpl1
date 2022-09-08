<?php
$nama = "SELLY RIZKI APRILA";
echo $nama . "<br>";

$nama_array = array("Fariz","Eben","Haikal","Rizki Catur",);
print_r($nama_array); echo "<br>";

echo $nama_array[0] . "<br>";
echo $nama_array[1] . "<br>";
echo $nama_array[2] . "<br>";

echo "<hr>";
// Versi Foreach
foreach ($nama_array AS $datanama) {
    echo $datanama . "<br>";
}

echo "<hr>";
// Versi For 
for ($i = 0; $i < COUNT($nama_array); $i++) {
    echo $nama_array[$i] . "<br>";
}

// Multiple Array
$kelas11rpl1 = array(
    array("Rizky Catur", "L" ,"mancing"),
    array("Eben", "L", "Berenang", "Maen Game")
);

echo "<pre>";
print_r($kelas11rpl1);
echo "</pre>";

?>