<?php
// Percabangn IF ELSE
$total_belanja = 150000;
$umur = 13; // Kalau di atas 18 akan menjadi else
$nilai = 88; // Kalau di atas 18 akan menjadi else

if($total_belanja > 100000){
    echo "Anda dapat hadiah!"; echo "<br \>";
}

if($umur < 18){
    echo "Kamu tidak boleh membuka situs ini!";
} else{
    echo "Selamat datang di website kami!";
} echo "<br \>";

// Percabangan IF/Elseif/ELSE

if($nilai > 90) { // Atribut nilai bisa di ubah
    $grade = "A";
} elseif($nilai > 80) {
    $grade = "B";
} elseif($nilai > 60) {
    $grade = "C";
} elseif($nilai > 40) {
    $grade = "D";
} elseif($nilai > 30) {
    $grade = "E";
} else {
    $grade = "F";
}

echo "Nilai Anda: $nilai<br>";
echo "Grade: $grade"; echo "<br \>";

// Percabangan SWITCH/CASE

$level = 9; // Untuk memilih case
switch($level) {
    case 1:
        echo "Pelajari HTML";
        break;
    case 2:
        echo "Pelajari CSS";
        break;
    case 3:
        echo "Pelajari PHP";
        break;
    default:
        echo "Kamu bukan Progammer!";
} echo "<br \>";

/* IMPLEMENTASI */

echo "Contoh Implementasi Percabangan"; echo "<br \>";

$weather = "Sunny";     // Kondisi Cuaca

if ($weather == "Rainy") {
    echo "Don't forget your umberella!";    // Jika kondisi cuaca adalah hujan, tampilkan pesan "Jangan lupa payung!".
} elseif ($weather == "Sunny") {
    echo "Enjoy the sunshine!";     // Jika cuaca cerah, tampilkan pesan "Nikmati sinar matahari!".
} else {
    echo "Check the weather conditions for the day.";       // Jika kondisinya tidak cocok dengan keduanya, tampilkan pesan "Periksa cuaca hari ini".
} echo "<br \>";

/* Switch Case */

$day = "Monday";        // Bergantung pada nilai variabel $day

switch ($day) {     
    case "Monday":
        echo "It's the beginning of the week.";     // Ini awal minggu
        break;
    case "Wednesday":
        echo "Halfway trough the week.";        // Setengah perjalanan minggu
        break;
    case "Friday":
        echo "Weekend is near!";        // Akhir pekan sudah dekat
        break;
    default: 
        echo "It's a regular day.";     // Ini adalah hari biasa
}

?>