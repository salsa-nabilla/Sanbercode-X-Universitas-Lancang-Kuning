<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";
/* 
contoh: greetings("abduh");
Output: "Halo Abduh, Selamat Datang di Sanbercode!"
*/

function greetings($nama) {
    echo "Halo $nama, Selamat Datang di Sanbercode!";
    echo "<br>";
}

// Hapus komentar untuk menjalankan code!
greetings("Bagas");
greetings("Wahyu");
greetings("Salsa");

echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";
/* 
reverseString("abdul");
Output: ludba
*/
function balik($kata){
    $panjangKata = strlen($kata);
    $Reverse = "";
    for ($i=$panjangKata-1; $i >= 0 ; $i--){
        $Reverse .= $kata[$i];
    }
    return $Reverse;

}
function reverseString($string){
    $revString = balik($string);
    echo $revString . "<br>";
}

// Hapus komentar di bawah ini untuk jalankan Code
reverseString("nama peserta");
reverseString("Sanbercode");
reverseString("We Are Sanbers Developers");
echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";
/* 
Contoh: 
palindrome("katak") => output : "true"
palindrome("jambu") => output : "false"
*/
function palindrome($word){
    $reverseWord = balik($word);

    if ($reverseWord == $word) {
        echo "$word : true <br>";
    } else {
        echo "$word : false <br>";
    }
}

// Hapus komentar di bawah ini untuk jalankan code
palindrome("civic") ; // true
palindrome("nababan") ; // true
palindrome("jambaban"); // false
palindrome("racecar"); // true


echo "<h3>Soal No 4 Tentukan Nilai </h3>";
/*
Soal 4
buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar 
sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
*/

function tentukan_nilai($nilai){
    if ($nilai >= 85 && $nilai <= 100){
        echo "$nilai => Sangat Baik <br>";
    } else if ($nilai >= 70 && $nilai <85) {
        echo "$nilai => Baik <br>";
    } else if ($nilai >= 60 && $nilai <70) {
        echo "$nilai => Cukup <br>";
    } else {
        echo "$nilai => Kurang <br>";
    }
}

// Hapus komentar di bawah ini untuk jalankan code
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang


?>

</body>

</html>