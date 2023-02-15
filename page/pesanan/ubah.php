<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from datapembeli where Id='$_GET[id]'");
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
                            <label> Status Pengiriman :</label>
                            <div class="form-group">
                                <select class="custom-select dblock w-100" name="Aksi" required autofocus>
                                    <option>dikemas</option>
                                    <option>dikirim</option>
                                    <option>diterima</option>
                                </select>
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

    $Aksi = $_POST ['Aksi'];

    $simpan = $_POST ['simpan'];

 	if ($simpan) {
        $sql = $koneksi->query("update  datapembeli set `Aksi`='$Aksi' where Id='$id'");


        
            ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil Diperbaharui");
                    window.location.href="?page=pesanan";

                </script>
            <?php
        
    }

 ?>
                             
                             

