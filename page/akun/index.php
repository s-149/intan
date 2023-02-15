
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
                            <h3 class="title-5 m-b-35">Perbarui Akun</h3>
                        </div>

                        <form action="" method="POST" enctype="multipart/form-data" >
                            <label> User Name :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="UserName" required autofocus />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="user" value="Simpan" class="btn btn-primary">
                            </div>
                        </form>
                            <?php if (isset($_POST['user'])) {
                                $UserName = $_POST ['UserName'];

                                $sql = $koneksi->query("update  `user` SET `UserName`='$UserName' where UserName='$UserName'");
                                header("Location: login.php");
                            } ?>

                        <form action="" method="POST" enctype="multipart/form-data" >
                            <label> Password :</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Password" required autofocus />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="pass" value="Simpan" class="btn btn-primary">
                            </div>
                        </form>
                            <?php if (isset($_POST['pass'])) {
                                $Password = $_POST ['Password'];

                                $sql = $koneksi->query("update  `user` SET `Password`='$Password' where UserName='$UserName'");
                                header("Location: login.php");
                            } ?>

                        <form action="" method="POST" enctype="multipart/form-data" >
                            <label> Ganti Fhoto :</label>
                            <div class="form-group">
                                <input type="file" class="form-control" name="Gambar" />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="fhoto" value="Simpan" class="btn btn-primary">
                            </div>
                        </form>
                            <?php if (isset($_POST['fhoto'])) {

                                $foto = $_FILES['Gambar']['name'];
                                $lokasi = $_FILES['Gambar']['tmp_name'];

                                $folder='gambar/barang/';
                                $Gambar=date('d_M_Y_h_i_s').'_'.$foto;
                                $upload = move_uploaded_file($lokasi,$folder.$Gambar);

                                $sql = $koneksi->query("update  `user` SET `Gambar`='$Gambar' where UserName='$UserName'");
                                header("Location: login.php");
                            } ?>
                        </div>
                    </div>
                </div>
            <!-- END DATA TABLE-->
