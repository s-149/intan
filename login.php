
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
                    <h3>Silahkan Login</h3>
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
                                session_start();
                                    $_SESSION['user']=$UserName;
                                    $_SESSION['password']=$Password;
                                    $_SESSION['level']=$_Level['Level'];
                                echo " 
                                        <script>
                                            alert('Selamat,,, Login Berhasil.'); 
                                            window:location='index.php' 
                                        </script>";
                            }
                        else
                            {
                                echo " 
                                        <script>
                                        alert('Upzz,,, Login Gagal, silahkan ulangi kembali'); 
                                            window:location='login.php' 
                                        </script>";                                
                            }
                    
                        }  ?>
                        <div class="login-form">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="text" name="UserName" placeholder="User Name" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="password" name="Password" placeholder="Password" required autofocus>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="login">MASUK</button>
                            </form>
                        </div>
                        <br>
                        <p>Belum memiliki Akun? Silahkan <a href="register.php">Mendaftar</a></p>
                    </div>
                </div>
            </div>
        </div>
    <br><br>    
</body>

</html>
<!-- end document-->
