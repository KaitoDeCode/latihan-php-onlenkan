<?php
    $nama = "Adi Kurniawan";
    $umur = 17;
    $makananFav = array("Bakso",'Soto',"Nasi goreng");
    echo "Halo Namaku ".$nama." umurku ".$umur." tahun, Makanan favorit saya adalah ".$makananFav[1];
    echo "<br/>";
    echo "<ul>";
foreach ($makananFav as $makanan) {
    echo "<li>".$makanan."</li> <br/>";
}

    echo "</ul>";

?>