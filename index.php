<?php

  error_reporting(0);
    session_start();
    
    include "koneksi.php";
    include "rupiah.php";
    include "variabel.php";

    if($_SESSION['admin'] || $_SESSION['user']){

      // memanggil data login tiap user

      $UserName=$_SESSION['user'];
      $Password=$_SESSION['password'];
      $Level=$_SESSION['level'];

      $akun=mysqli_fetch_array(mysqli_query($koneksi,"select * from `user` where `UserName` ='$UserName'"));
      $Fhoto=$akun['Fhoto'];

    include "kepala.php";

?>

        <?php 
                      
            $page = $_GET['page'];
            $aksi = $_GET['aksi'];


                if ($page=="") 
                    {
                        include "page/pasar/index.php";
                    }
                elseif ($page == "dashboard" ) 
                    {
                        include "home.php";
                    }

                elseif ($page == "user" ) 
                    {
                        if ($aksi == "") 
                            {
                                include "page/user/index.php";
                            }
                        elseif ($aksi == "tambah") 
                            {
                                include "page/user/tambah.php";
                            }
                        elseif ($aksi == "ubah") 
                            {
                                include "page/user/ubah.php";
                            }
                        elseif ($aksi == "hapus") 
                            {
                                include "page/user/hapus.php";
                            }
                    }


                elseif ($page == "akun" ) 
                    {
                        if ($aksi == "") 
                            {
                                include "page/akun/index.php";
                            }
                        elseif ($aksi == "tambah") 
                            {
                                include "page/akun/tambah.php";
                            }
                        elseif ($aksi == "ubah") 
                            {
                                include "page/akun/ubah.php";
                            }
                        elseif ($aksi == "hapus") 
                            {
                                include "page/akun/hapus.php";
                            }
                    }

                elseif ($page == "datatoko" ) 
                    {
                        if ($aksi == "") 
                            {
                                include "page/datatoko/index.php";
                            }
                        elseif ($aksi == "tambah") 
                            {
                                include "page/datatoko/tambah.php";
                            }
                        elseif ($aksi == "ubah") 
                            {
                                include "page/datatoko/ubah.php";
                            }
                        elseif ($aksi == "hapus") 
                            {
                                include "page/datatoko/hapus.php";
                            }
                    }

                elseif ($page == "databarang" ) 
                    {
                        if ($aksi == "") 
                            {
                                include "page/databarang/index.php";
                            }
                        elseif ($aksi == "tambah") 
                            {
                                include "page/databarang/tambah.php";
                            }
                        elseif ($aksi == "ubah") 
                            {
                                include "page/databarang/ubah.php";
                            }
                        elseif ($aksi == "hapus") 
                            {
                                include "page/databarang/hapus.php";
                            }
                    }

                elseif ($page == "pesanan" ) 
                    {
                        if ($aksi == "") 
                            {
                                include "page/pesanan/index.php";
                            }
                        elseif ($aksi == "tambah") 
                            {
                                include "page/pesanan/tambah.php";
                            }
                        elseif ($aksi == "ubah") 
                            {
                                include "page/pesanan/ubah.php";
                            }
                        elseif ($aksi == "hapus") 
                            {
                                include "page/pesanan/hapus.php";
                            }
                    }

                elseif ($page == "pasar" ) 
                    {
                        if ($aksi == "") 
                            {
                                include "page/pasar/index.php";
                            }
                        elseif ($aksi == "detail") 
                            {
                                include "page/pasar/detail.php";
                            }
                        elseif ($aksi == "keranjang") 
                            {
                                include "page/pasar/keranjang.php";
                            }
                        elseif ($aksi == "hapus_keranjang") 
                            {
                                include "page/pasar/hapus_keranjang.php";
                            }
                        elseif ($aksi == "transaksi") 
                            {
                                include "page/pasar/transaksi.php";
                            }
                        elseif ($aksi == "ubah_transaksi") 
                            {
                                include "page/pasar/ubah_transaksi.php";
                            }
                        elseif ($aksi == "hapus_transaksi") 
                            {
                                include "page/pasar/hapus_transaksi.php";
                            }
                        elseif ($aksi == "pesanan") 
                            {
                                include "page/pasar/pesanan.php";
                            }
                    }


        ?>
                       

<?php
    include "kaki.php";

    }else{
        header("location:login.php");
    }
?>
