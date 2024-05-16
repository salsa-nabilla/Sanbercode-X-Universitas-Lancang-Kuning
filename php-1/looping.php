
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php 
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";

        echo "<h5>LOOPING PERTAMA</h5>";
        $awal = 2;
        while ($awal <= 20){
            echo $awal . " - I Love PHP <br>";
            $awal+=2;
        }

        echo "<h5>LOOPING KEDUA</h5>";
        $akhir = 20;
        while ($akhir >= 2){
            echo $akhir . " - I Love PHP <br>";
            $akhir-=2;
        }

        echo "<h3>Soal No 2 Looping Array Modulo </h3>";
        /* 
            Soal No 2
            Looping Array Module
            Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
            Tampung ke dalam array baru bernama $rest 
        */

        $numbers = [18, 45, 29, 61, 47, 34];
        echo "array numbers: ";
        print_r($numbers);
        foreach ($numbers as $number) {
            $rest[] = $number%5;
        }

        echo "<br>";
        echo "Array sisa baginya adalah:  "; 
        echo "<br>";
        print_r($rest);

        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        
        $items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];

        foreach ($items as $value){
            $data = [
                "id" => $value[0],
                "name" => $value[1],
                "price" => $value[2],
                "description" => $value[3],
                "source" => $value[4],
            ];

            print_r($data);
            echo "<br>";
        };
         
        
        echo "<h3>Soal No 4 Asterix </h3>";
       
        echo "Asterix: "; 
        echo "<br>";
        
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        
    ?>

</body>
</html>