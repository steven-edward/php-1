<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = ["Mike" , "Dustin" , "Will" , "Lucas" , "Max" , "Eleven"]; // Lengkapi di sini
        print_r ($kids);
        echo "<br>";
        $adults = ["Hopper" , "Nancy" ,  "Joyce" , "Jonathan" , "Murray"]; 
        print_r ($adults);


        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: " . count($kids); // Berapa panjang array kids
        echo "<br>";
        echo "<ol>";
        echo "<li> $kids[0] </li>";
        // Lanjutkan
        for ($i = 1; $i < count($kids); $i++) {
            echo "<li> {$kids[$i]} <br> </li>";
        }
        echo "</ol>";
        
        echo "Total Adults: ". count($kids) ;// Berapa panjang array adults
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        // Lanjutkan
        for ($i = 1; $i < count($adults); $i++) {
            echo "<li> {$adults[$i]} <br> </li>";
        }
        echo "</ol>";

        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */


        echo "<h3> Soal 3</h3>";
        $data = [
            [
                "Name"      => "Will Byers" ,
                "Age"       => 12 ,
                "Aliases"   => "Will the Wise" ,
                "Status"    => "Alive"
            ],

            [
                "Name"      => "Mike Wheeler" ,
                "Age"       => 12 ,
                "Aliases"   => "Dungeon Master" ,
                "Status"    => "Alive"
            ],

            [
                "Name"      => "Jim Hopper" ,
                "Age"       => 43 ,
                "Aliases"   => "Chief Hopper" ,
                "Status"    => "Deceased"
            ],

            [
                "Name"      => "Eleven" ,
                "Age"       => 12 ,
                "Aliases"   => "El" ,
                "Status"    => "Alive"
            ]
        ];
        for ($i = 0; $i < count($data); $i++) {
            echo "<h4>{$data[$i]["Name"]}</h4>";
            echo "<ul>";
            echo "<li>Nama      : {$data[$i]["Name"]} <br> </li>";
            echo "<li>Umur      : {$data[$i]["Age"]} <br> </li>";
            echo "<li>Aliases   : {$data[$i]["Aliases"]} <br> </li>";
            echo "<li>Status    : {$data[$i]["Status"]} <br> </li>";
            echo "</ul>";
        }

    ?>
</body>
</html>
