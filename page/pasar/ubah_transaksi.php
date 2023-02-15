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
                            <label> Jumlah Barang :</label>
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="Id" value="<?=$_GET['id']?>" required autofocus />
                                <input type="text" class="form-control" name="JumlahBarang" required autofocus />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            <!-- END DATA TABLE-->


<?php if (isset($_POST['simpan'])) {

    $Id = $_POST ['Id'];
    $JumlahBarang = $_POST ['JumlahBarang'];

        $sql = $koneksi->query("update  `transaksi` SET `JumlahBarang`='$JumlahBarang', `Aksi`='1' where Id='$Id'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diubah");
                    window.location.href="?page=pasar&aksi=transaksi";

                </script>
<?php } ?>
                             