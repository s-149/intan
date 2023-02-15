                           

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
                            <h3 class="title-5 m-b-35">tambah data</h3>
                        </div>

                        <form method="POST" enctype="multipart/form-data" >
                            <label> Nama Barang :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="NamaBarang"  required autofocus />
                            </div>
                            <label> Satuan :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Satuan"  required autofocus />
                            </div>
                            <label> HargaBeli :</label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="HargaBeli"  required autofocus />
                            </div>
                            <label> HargaJual :</label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="HargaJual"  required autofocus />
                            </div>
                            <label> Stok :</label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="Stok"  required autofocus />
                            </div>
                            <label> Gambar :</label>
                            <div class="form-group">
                                <input type="file" class="form-control" name="Gambar"  required autofocus />
                            </div>
                            <label> Kategori :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Kategori"  required autofocus />
                            </div>
                            <label> Deskripsi :</label>
                            <div class="form-group">
                                <textarea class="form-control" name="Deskripsi"  required autofocus></textarea>
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
    $upload = move_uploaded_file($lokasi,$folder.$Gambar);

    $simpan = $_POST ['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("INSERT INTO `databarang`(`NamaBarang`, `Satuan`, `HargaBeli`, `HargaJual`, `Stok`, `Gambar`, `Kategori`, `Deskripsi`) values('$NamaBarang','$Satuan', '$HargaBeli', '$HargaJual', '$Stok', '$Gambar', '$Kategori', '$Deskripsi')");
        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=databarang";

                </script>
            <?php
        
    }

 ?>
                             
                             




    
                