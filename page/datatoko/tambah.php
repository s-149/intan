
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
                            <label> Nama Toko :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Nama"  required autofocus />
                            </div>
                            <label> Alamat Toko :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Alamat"  required autofocus />
                            </div>
                            <label> Telepon :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Telepon"  required autofocus />
                            </div>
                            <label> Nama Bank :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="NamaBank"  required autofocus />
                            </div>
                            <label> No Rekening :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="NoRekening"  required autofocus />
                            </div>
                            <label> Atas Nama :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="AtasNama"  required autofocus />
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

    $Nama = $_POST ['Nama'];
    $Alamat = $_POST ['Alamat'];
    $Telepon = $_POST ['Telepon'];
    $NamaBank = $_POST ['NamaBank'];
    $NoRekening = $_POST ['NoRekening'];
    $AtasNama = $_POST ['AtasNama'];

    $simpan = $_POST ['simpan'];


    if ($simpan) {
        $sql = $koneksi->query("INSERT INTO `datatoko`(`Nama`, `Alamat`, `Telepon`,`NamaBank`,`NoRekening`,`AtasNama`) values('$Nama','$Alamat', '$Telepon','$NamaBank','$NoRekening','$AtasNama')");

        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=datatoko";

                </script>
            <?php
        
    }

 ?>
                             
  