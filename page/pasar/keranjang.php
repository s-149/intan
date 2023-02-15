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

                <div class="container">
                    <div class="row card">
                        <div class="col-md-12">
                        <div class="panel-heading">
                            <h3 class="title-5 m-b-35">Keranjang Anda</h3>
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data" >
                            <div class="table-responsive">
                                <table border="1" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pilih</th>
                                            <th>Jumlah Item</th>
                                            <th>Gambar</th>
                                            <th>Nama Barang</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Deskripsi</th>
                                            <th width="19%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from transaksi where UserName='$UserName' and Aksi='0' ");
                                            while ($data= $sql->fetch_assoc()) {  
                                            $kunci=$data['IdBarang'];
                                            $IdTransaksi=$data['Id'];
                                            ?>

                                        <?php
                                            
                                            $sql1 = $koneksi->query("select * from databarang where Id='$kunci' ");
                                            while ($data1= $sql1->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td>
                                                <input type="checkbox" name="Id[]" value="<?php echo $IdTransaksi;?>">
                                            </td>
                                            <td>
                                                <div class="col-6">
                                                    <input type="number" class="form-control" name="JumlahBarang[]" placeholder="jml item:">
                                                </div>
                                            </td>
                                            <td><a href="gambar/barang/<?php echo  $data1['Gambar'];?>"> <img src="gambar/barang/<?php echo  $data1['Gambar'];?>" width="75" height="50"></a> </td>
                                            <td><?php echo $data1['NamaBarang'];?></td>
                                            <td><?php echo BuatRp($data1['HargaJual']);?></td>  
                                            <td><?php echo $data1['Stok'];?></td>  
                                            <td><?php echo $data1['Deskripsi'];?></td>  

                                            <td>
                                                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=pasar&aksi=hapus_keranjang&id=<?php echo $data['Id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                                            </td>

                                        <?php  } ?>

                                        </tr>
                                        <?php } ?>

                                    </tbody>

                                </table>
                            </div>
                            <div class="form-group" style="float: right;">
                                <button type="submit" name="simpan" class="btn btn-primary">Lanjutkan <i class="fa fa-arrow-right"></i></button>
                            </div>

                                   
                        </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->


<?php if (isset($_POST['simpan'])) {

    $Id = $_POST ['Id'];
    $N=count($Id);
    $JumlahBarang = $_POST ['JumlahBarang'];

    if (empty($Id)) {
        # code...
        echo '
                <script type="text/javascript">
                    
                    alert ("Anda belum memilih pesanan.");
                    window.location.href="?page=pasar&aksi=keranjang";

                </script>';
    }
    else{


    for ($i=0; $i < $N ; $i++) 
        { 
        # code...
    

        $sql = $koneksi->query("update  `transaksi` SET `JumlahBarang`='$JumlahBarang[$i]', `Aksi`='1' where Id='$Id[$i]'");
        } 
    }

            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=pasar&aksi=transaksi";

                </script>
<?php } ?>
                             
     