<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from datatoko where Id='$_GET[id]'");
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
                            <label> Nama Toko :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Nama"  value="<?php echo $data['Nama'];?>" required autofocus />
                            </div>
                            <label> Alamat Toko :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Alamat" value="<?php echo $data['Alamat'];?>" required autofocus />
                            </div>
                            <label> Telepon :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Telepon" value="<?php echo $data['Telepon'];?>" required autofocus />
                            </div>
                            <label> NamaBank :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="NamaBank" value="<?php echo $data['NamaBank'];?>" required autofocus />
                            </div>
                            <label> NoRekening :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="NoRekening" value="<?php echo $data['NoRekening'];?>" required autofocus />
                            </div>
                            <label> AtasNama :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="AtasNama" value="<?php echo $data['AtasNama'];?>" required autofocus />
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
//Teleph`Id`, `Nama`, `Alamat`, `Telepon`, `Tempat_Lahir`, `Tanggal_Lahir`, `Alamat`, `No_Hp`, `Status`, `Fungsi`, `Jabatan`, `one`
        $sql = $koneksi->query("update  datatoko set `Nama`='$Nama', `Alamat`='$Alamat', `Telepon`='$Telepon', `NamaBank`='$NamaBank', `NoRekening`='$NoRekening', `AtasNama`='$AtasNama' where Id='$id'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?page=datatoko";

                </script>
            <?php
        
    }

 ?>
                             
                             

