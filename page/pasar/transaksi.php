            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12"><br>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <form action="" method="POST" enctype="multipart/form-data" >

                <div class="container">
                    <div class="row card">
                        <div class="col-md-12">
                            <div class="panel-heading">
                                <h3 class="title-5 m-b-35">Pesanan Anda:</h3>
                            </div>
                            <div class="table-responsive">
                                <table border="1" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Nama Barang</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Jumlah Item</th>
                                            <th>Total</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $JumlahBarang;
                                            $sql = $koneksi->query("select * from transaksi where UserName='$UserName' and Aksi='1' ");
                                            while ($data= $sql->fetch_assoc()) { 
                                                //mengambil id barang 
                                                $kode=$data['Id'];
                                                //mengambil id barang 
                                                $kunci=$data['IdBarang'];
                                                //menghitung jumlah barang per item
                                                $Jumlah=$data['JumlahBarang'];
                                                //menghitung jumlah pesanan
                                                $JumlahBarang++;
                                            
                                            $sql1 = $koneksi->query("select * from databarang where Id='$kunci' ");
                                            while ($data1= $sql1->fetch_assoc()) {  
                                                //menghitung total harga per item
                                                $total=$data1['HargaJual']*$data['JumlahBarang'];
                                                //menghitung subtotal harga 
                                                $Subtotal+=$total; 
                                                //menyiapkan stok asal
                                                $stok=$data1['Stok']+1;
                                                //mengurangi stok asal dengan jumlah barang per item
                                                $Stok=$data1['Stok']-$Jumlah;  
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?>
                                                <!--paket data transaksi-->
                                                <!--id transaksi-->
                                                <input type="hidden" name="Id[]" value="<?=$kode?>">
                                                <!--total harga peritem-->
                                                <input type="hidden" name="Total[]" value="<?=$total?>">
                                                <!--paket data barang-->
                                                <!--id barang-->
                                                <input type="hidden" name="Id1[]" value="<?=$kunci?>">
                                                <!--Stok-->
                                                <input type="hidden" name="Stok[]" value="<?=$Stok?>">
                                            </td> 
                                            <td><a href="gambar/barang/<?php echo  $data1['Gambar'];?>"> <img src="gambar/barang/<?php echo  $data1['Gambar'];?>" width="75" height="50"></a> </td>
                                            <td><?php echo $data1['NamaBarang'];?></td>
                                            <td><?php echo BuatRp($data1['HargaJual']);?></td> 
                                            <td><?php echo $data1['Stok'];?></td>  

                                        <?php  } ?>
                                            <td><?php echo $data['JumlahBarang'];?></td>  
                                            <td><?php echo BuatRp($total);?></td> 
                                            <td>
                                                <?php 
                                                if ($stok<=$Jumlah) {
                                                    echo "Stok Barang ini Kurang, Silahkan kurangi jumlah pesanan.";
                                                }
                                                else{
                                                    echo "Stok Tersedia.";
                                                }
                                                ?>
                                            </td> 

                                            <td>
                                                <a href="?page=pasar&aksi=ubah_transaksi&id=<?php echo $data['Id']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=pasar&aksi=hapus_transaksi&id=<?php echo $data['Id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                                            </td>

                                        </tr>

                                   <?php } ?>
                                        <tr>
                                            <td colspan="6">Subtotal </td>
                                            <td colspan="3"><?=BuatRp($Subtotal)?>
                                                <input type="hidden" name="Subtotal" value="<?=$Subtotal?>">
                                                <input type="hidden" name="JumlahBarang" value="<?=$JumlahBarang?>">
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>

                            <div class="panel-heading">
                                <h3 class="title-5 m-b-35">Tujuan Pengiriman:</h3>
                            </div>

                            <label> Nama :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Nama"  required autofocus />
                            </div>
                            <label> Alamat :</label>
                            <div class="form-group">
                                <textarea class="form-control" name="Alamat"  required autofocus ></textarea>
                            </div>
                            <label> Telephone :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Telephone"  required autofocus />
                            </div>
                            <label> Komentar :</label>
                            <div class="form-group">
                                <textarea class="form-control" name="Komentar"  required autofocus></textarea>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                            </div>

                        </div>
                    </div>
                </div>
            <!-- END DATA TABLE-->
            </form>

<?php if (isset($_POST['simpan'])) {

    //paket data transaksi
    $Id = $_POST ['Id'];
    $N=count($Id);
    $Total = $_POST ['Total'];

    //paket data barang
    $Id1 = $_POST ['Id1'];
    $Stok = $_POST ['Stok'];

    //paket data pembeli
    $Nama = $_POST ['Nama'];
    $Alamat = $_POST ['Alamat'];
    $Telephone = $_POST ['Telephone'];
    $JumlahBarang = $_POST ['JumlahBarang'];
    $Subtotal = $_POST ['Subtotal'];
    $Komentar = $_POST ['Komentar'];

    if (empty($Id)) {
        # code...
        echo '
                <script type="text/javascript">
                    
                    alert ("Tidak ada pesanan.");
                    window.location.href="?page=pasar";

                </script>';
    }
    else{



        $sql = $koneksi->query("INSERT INTO `datapembeli`(`Nama`, `Alamat`, `Telephone`, `JumlahBarang`, `Subtotal`, `UserName`, `Komentar`, `Aksi`) values('$Nama', '$Alamat', '$Telephone', '$JumlahBarang', '$Subtotal','$UserName', '$Komentar', 'dikemas')");

    for ($i=0; $i < $N ; $i++) 
        { 
        # code...
    

        $sql = $koneksi->query("update  `transaksi` SET `Total`='$Total[$i]', `Aksi`='dikemas' where Id='$Id[$i]'");

        $sql1 = $koneksi->query("update  `databarang` SET  `Stok`='$Stok[$i]' where Id='$Id1[$i]'");
        } 
    }
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=pasar&aksi=pesanan";

                </script>
<?php }  ?>
                             
     