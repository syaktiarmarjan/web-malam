<?php
    $nama="syaktiar";
    $uang=60000;
    $aqua=3000;
    $mie_instan=2500;
    $saos=5000;
    $jumlah_aqua=2;
    $total_aqua=$aqua*$jumlah_aqua;
    $jumlah_mie=3;
    $jumlah_saos=1;

    $total_harga=($aqua*$jumlah_aqua)+($mie_instan*$jumlah_mie)+($saos*$jumlah_saos);
    $pengembalian=$uang-$total_harga;

    echo "Nama <br>";
    echo "Uang yang dibawa $uang <br>";
    echo "Jumlah pembelian aqua sebanyak $jumlah_aqua, dengan total $total_aqua <br>";
    echo "jumlah pembelian mie $mie_instan <br>";
    echo "jumlah pembelian saos $saos <br>";

    echo "$nama Harus membayar sebesar Rp.$total_harga <br> dan uang kembalian yang diperoleh syaktiar adalah sebesar Rp.$pengembalian";

?>