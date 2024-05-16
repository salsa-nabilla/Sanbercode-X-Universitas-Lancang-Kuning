<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
    
        /* 
            Contoh: 
            $string = "PHP is never old";
            Output:
            Panjang string: 16, 
            Jumlah kata: 4 
        */
 
        $first_sentence = "Hello PHP!" ;

        echo "panjang first_sentence: " . strlen($first_sentence) . "<br>";
        echo "jumlah kata first_sentence: " . str_word_count($first_sentence) . "<br><br>";

        $second_sentence = "I'm ready for the challenges"; 
        
        echo "panjang second_sentence: " . strlen($second_sentence) . "<br>";
        echo "jumlah kata second_sentence: " . str_word_count($second_sentence) . "<br>";
        

        echo "<h3> Soal No 2</h3>";
        
        $string2 = "I love PHP";
        
        echo "<label>String2: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        echo "Kata kedua: " . substr($string2, 2, 5) . "<br>";
        echo "Kata Ketiga: " . substr($string2, 6) . "<br>";;


        echo "<h3> Soal No 3 </h3>";
        
        $string3 = "PHP is old but sexy!";
        echo "String: \"$string3\" " . "<br>"; 
        echo "Change: " . str_replace("sexy", "awesome", $string3) . "<br>";

    ?>
</body>
</html>