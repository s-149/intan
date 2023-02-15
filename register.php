
<?php
    include "koneksi.php";
    include "variabel.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$description?>">
    <meta name="author" content="<?=$author?>" >
    <meta name="keyword" content="<?=$keyword?>">

    <title><?=$title?></title>

    <!-- Icon -->
    <link rel="icon" href="<?=$icon?>">
    <link rel="shortcut icon" href="<?=$icon?>" type="image/x-icon">
    

    <!-- Bootstrap CSS-->
    <link href="assets/login/bootstrap.min.css" rel="stylesheet" media="all">
  
    <!-- Main CSS-->
    <link href="assets/login/theme.css" rel="stylesheet" media="all">
    <style>
        body {
            
            background-color:#eee;
            }
    </style>

</head>
<body>
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <!--img width="200px" src="<?=$icon?>"-->
                </div>
                <center>
                    <h3>Silahkan Mendaftar</h3>
                </center><br>
                
                        <?php
                
                    if(isset($_POST['login']))
                        {
                        $UserName=$_POST['UserName'];
                        $Password=$_POST['Password'];
                        $query = mysqli_query($koneksi, "SELECT * FROM `user` WHERE `UserName`='$UserName' AND `Password`='$Password' ");
                        $_Level=mysqli_fetch_array($query);

    
                        if(mysqli_num_rows($query) == 1)
                            {
                                echo " 
                                        <script>
                                            alert('UserName Telah terdaftar.'); 
                                            window:location='index.php' 
                                        </script>";
                            }
                        else
                            {

                            $foto = $_FILES['Gambar']['name'];
                            $lokasi = $_FILES['Gambar']['tmp_name'];

                            $folder='gambar/user/';
                            $Gambar=date('d_M_Y_h_i_s').'_'.$foto;
                            $upload = move_uploaded_file($lokasi,$folder.$Gambar);

                            $sql = $koneksi->query("INSERT INTO `user`(`UserName`, `Password`, `Level`, `Fhoto`) VALUES ('$UserName', '$Password', 'user', '$Gambar')");
                                echo " 
                                        <script>
                                        alert('Selamat, Akun anda telah Terdaftar.'); 
                                            window:location='login.php' 
                                        </script>";                                
                            }
                    
                        }  ?>
                        <div class="login-form">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="text" name="UserName" placeholder="User Name" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="password" name="Password" placeholder="Password" required autofocus>
                                </div>
                                <label>Fhoto :</label>
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="file" name="Gambar" placeholder="Password" required autofocus>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="login">MENDAFTAR</button>
                            </form>
                        </div>
                        <br>
                        <p>Sudah memiliki Akun? Silahkan <a href="login.php">Masuk</a></p>
                    </div>
                </div>
            </div>
        </div>
    <br><br>    
</body>

</html>
<!-- end document-->
