<?php
$pel	= 	array ("Bahasa PHP","Bahasa Delphi","Bahasa MySQL","Bahasa C++","Bahasa PERL");
$nama	=	array (
				array("Anto","Edi","Sita"),
				array("Anto","Budi"),
				array("Nana","Alif","Jordan", "Rahmat"),
				array("Masio","Ruri","Omar"),
				array("Andi")
		 	);

for ($i = 0; $i < count($pel); $i++) {
	echo $pel[$i] . "<br>";
    for ($j = 0; $j < count($nama[$i]); $j++) {
    	echo $j+1 . ". ";
        echo $nama[$i][$j] . "<br>";
    }
    echo "<br>";
}


for ($i = 2004; $i < 2050; $i+= 4) {
    echo $i . "<br><br>";
}

$total = 1000000;

if ($total > 200000) {
	echo "Anda mendapat diskon sebesar 20% <br>";
	echo "total belanja anda = ";
	echo $total - $total * 20 / 100;
} else {
	echo "Anda tidak mendapat diskon <br>";
	echo "total belanja anda = " . $total;
}

$nilai_angka = 101;

if ( 90 <= $nilai_angka && $nilai_angka <= 100) {
	echo "Mendapat Nilai A";
} elseif ( 70 <= $nilai_angka && $nilai_angka <= 89) {
	echo "Mendapat Nilai B";
} elseif ( 50 <= $nilai_angka && $nilai_angka <= 69) {
	echo "Mendapat Nilai C";
} elseif ( 30 <= $nilai_angka && $nilai_angka <= 49) {
	echo "Mendapat Nilai D";
} elseif ( 0 <= $nilai_angka && $nilai_angka <= 29) {
	echo "Mendapat Nilai E";
} else {echo "error";}
?>

