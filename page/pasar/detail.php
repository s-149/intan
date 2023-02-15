<?php
    
    $id=$_GET['id'];
?>
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                            <h1 class="title-4">Selamat Datang Kembali
                                <span><?=strtoupper($UserName)?></span>
                            </h1>
                            <hr class="line-seprate">
                                </div>
                                <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Detail Produk</h3>
                        </div>
                        <?php 
                            $sql1 = $koneksi->query("select * from databarang where Id='$id'");
                            while ($data1= $sql1->fetch_assoc()) {       
                        ?>
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="gambar/barang/<?php echo  $data1['Gambar'];?>"> <img class="card-img-top" src="gambar/barang/<?php echo  $data1['Gambar'];?>"></a>
                                    <div class="card-body">
                                        <h4 class="card-title mb-3"><?php echo $data1['NamaBarang'];?></h4>
                                        <p>Harga :<?php echo $data1['HargaJual'];?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                            <tr>
                                                <th>Nama Barang</th>
                                                <td><?php echo $data1['NamaBarang'];?></td>
                                            </tr>
                                            <tr>
                                                <th>Satuan</th>
                                                <td><?php echo $data1['Satuan'];?></td>
                                            </tr>
                                            <tr>
                                                <th>HargaJual</th>
                                                <td><?php echo $data1['HargaJual'];?></td>
                                            </tr>
                                            <tr>
                                                <th>Stok</th>
                                                <td><?php echo $data1['Stok'];?></td>
                                            </tr>
                                            <tr>
                                                <th>Deskripsi</th>
                                                <td><?php echo $data1['Deskripsi'];?></td>
                                            </tr>
                                            </table>
                                        </div>
                                        <div style="float: right;">
                                            <form action="" method="POST" enctype="multipart/form-data" >
                                                <input type="hidden" name="UserName" value="<?php echo $UserName;?>">
                                                <input type="hidden" name="Id" value="<?php echo $data1['Id'];?>">
                                                <button type="submit" name="simpan" class="btn btn-primary"><i class="fas fa-shopping-cart"></i>Tambah ke keranjang</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php  } ?>

                        <div class="col-md-12">
                            <?php
                                $no = 1;
                                $sql = $koneksi->query("select * from databarang ");
                                while ($data= $sql->fetch_assoc()) {       
                            ?>
                            <div class="col-md-4">
                                <a href="?page=pasar&aksi=detail&id=<?php echo $data['Id']; ?>">
                                <div class="card">
                                    <img class="card-img-top" src="gambar/barang/<?php echo  $data['Gambar'];?>">
                                    <div class="card-body" style="color: black;">
                                        <h4 class="card-title mb-3"><?php echo $data['NamaBarang'];?></h4>
                                        <p>Harga :<?php echo $data['HargaJual'];?></p>
                                    </div>
                                </div>
                                </a>
                            </div>

                            <?php  } ?>

                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->


<?php if (isset($_POST['simpan'])) {
 
    $UserName = $_POST ['UserName'];
    $Id = $_POST ['Id'];

        $sql = $koneksi->query("INSERT INTO `transaksi`(`UserName`, `IdBarang`, `JumlahBarang`, `Total`, `Aksi`) values('$UserName','$Id', '0', '0', '0')");

        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=pasar&aksi=keranjang";

                </script>
<?php } ?>
                             
     