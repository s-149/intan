<?php
    
    // metta
    $description="Sistem Pemasaran";
    $author="MR S-149 dan Team Peneliti Nusaputra Sukabumi (Sabar, Elsa Yulia Rahman, Atika Fauzia Akbari, Dea Siti Rahima Juliansa";
    $keyword="Sistem Pemasaran, Vanila ";

    // title
    $title="CV VANILLA GEMSTONE";

    // nama/organisasi/lembaga (Sesingkat Mungkin memberi nama pada variabel ini,gunakan huruf kapital)
    $organisasi="CV VANILLA GEMSTONE";

    // icon
    $icon="gambar/favicon.ico";

    $Tahun_Sekarang=date('Y');
    $KodeTransaksi=date('d_M_Y_h_i_s');

    // jumlah user

    $login="select * from `user` ";
    $query=mysqli_query($koneksi,$login);
    $jml_user=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $jml_user++;
            }

    // jumlah item terjual

    $sql1="select * from `transaksi` ";
    $query1=mysqli_query($koneksi,$sql1);
    $_terjual=0;
        while($data1=mysqli_fetch_array($query1)) 
            { 
                $_terjual+=$data1['JumlahBarang'];
            }

    // jumlah penjualan

    $sql2="select * from `transaksi` ";
    $query2=mysqli_query($koneksi,$sql2);
    $_penjualan=0;
        while($data2=mysqli_fetch_array($query2)) 
            { 
                $_penjualan+=$data2['Total'];
            }

    // jumlah barang

    $sql3="select * from `databarang` ";
    $query3=mysqli_query($koneksi,$sql3);
    $_barang=0;
    $_beli=0;
    $_jual=0;
        while($data3=mysqli_fetch_array($query3)) 
            { 
                $_barang+=$data3['Stok'];
                $_beli+=$data3['HargaBeli'];
                $_jual+=$data3['HargaJual'];
            }

    // keuntungan

    $_profit=$_jual-$_beli;

    //data toko
    $_toko=mysqli_fetch_array(mysqli_query($koneksi,"select * from `datatoko` "));
?> 