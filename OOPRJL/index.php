<form action="" method="POST">

<input type="number" name="bulan" placeholder="Masukan Bulan">
<input type="number" name="tanggal" placeholder="Masukan tanggal">
<input type="submit" name="submit" value="kirim" >




</form>






<?php
    require_once "zodiac.php";



    // $rumus= new Rumus;

//    echo $rumus-> luasLingkaran(5);
//    echo '<br>';
//    echo $rumus-> kelilingLingkaran(5);
//    echo '<br>';
//    echo $rumus-> luasPersegiPanjang(5,3);
//    echo '<br>';
//    echo $rumus-> kelilingPersegiPanjang(5,3);
//    echo '<br>';
//    echo $rumus-> luasSegitiga(5,3);
//    echo '<br>';
//    echo $rumus-> kelilingSegitiga(3);
//    echo '<br>';



//  $zodiac= new Zodiac;
// echo $zodiac -> zodiak(1,1);

if (isset($_POST['submit'])) 
{
    $b = $_POST['bulan'];
    $t = $_POST['tanggal'];
    echo Zodiac:: zodiak($b,$t);
}





?>