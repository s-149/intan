<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from databarang where Id='$_GET[id]'");
    $data = $sql->fetch_assoc();

?>

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
                            <h3 class="title-5 m-b-35">Perbarui data</h3>
                        </div>

                        <form method="POST" enctype="multipart/form-data" >
                            <label> Nama Barang :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="NamaBarang"   value="<?php echo $data['NamaBarang'];?>"  required autofocus />
                            </div>
                            <label> Satuan :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Satuan"   value="<?php echo $data['Satuan'];?>"  required autofocus />
                            </div>
                            <label> HargaBeli :</label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="HargaBeli"    value="<?php echo $data['HargaBeli'];?>" required autofocus />
                            </div>
                            <label> HargaJual :</label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="HargaJual"    value="<?php echo $data['HargaJual'];?>" required autofocus />
                            </div>
                            <label> Stok :</label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="Stok"   value="<?php echo $data['Stok'];?>"  required autofocus />
                            </div>
                            <label> Gambar :</label>
                            <a href="gambar/barang/<?php echo  $data['Gambar'];?>"> <img src="gambar/barang/<?php echo  $data['Gambar'];?>" width="75" height="50"></a><br><br>
                            <label> Ganti Gambar :</label>
                            <div class="form-group">
                                <input type="file" class="form-control" name="Gambar" />
                            </div>
                            <label> Kategori :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Kategori"   value="<?php echo $data['Kategori'];?>"  required autofocus />
                            </div>
                            <label> Deskripsi :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Deskripsi"   value="<?php echo $data['Deskripsi'];?>"  required autofocus />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            <!-- END DATA TABLE-->

 <?php

   
    $NamaBarang = $_POST ['NamaBarang'];
    $Satuan = $_POST ['Satuan'];
    $HargaBeli = $_POST ['HargaBeli'];
    $HargaJual = $_POST ['HargaJual'];
    $Stok = $_POST ['Stok'];
    $Kategori = $_POST ['Kategori'];
    $Deskripsi = $_POST ['Deskripsi'];

    $foto = $_FILES['Gambar']['name'];
    $lokasi = $_FILES['Gambar']['tmp_name'];

    $folder='gambar/barang/';
    $Gambar=date('d_M_Y_h_i_s').'_'.$foto;


    $simpan = $_POST ['simpan'];


    if ($simpan) {
        if (!empty($lokasi)) {
           
        $upload = move_uploaded_file($lokasi,$folder.$Gambar);
        
        $sql = $koneksi->query("update  `databarang` SET `NamaBarang`='$NamaBarang', `Satuan`='$Satuan', `HargaBeli`='$HargaBeli', `HargaJual`='$HargaJual', `Stok`='$Stok', `Gambar`='$Gambar',`Kategori`='$Kategori', `Deskripsi`='$Deskripsi' where Id='$id'");

        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=databarang";

                </script>
            <?php
        
    }else{
        $sql = $koneksi->query("update  `databarang` SET `NamaBarang`='$NamaBarang', `Satuan`='$Satuan', `HargaBeli`='$HargaBeli', `HargaJual`='$HargaJual', `Stok`='$Stok', `Kategori`='$Kategori', `Deskripsi`='$Deskripsi' where Id='$id'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=databarang";

                </script>
            <?php
    }

     }

 ?>
                             
                             

