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
                                <h3 class="title-5 m-b-35">Riwayat Pesanan Anda:</h3>
                            </div>
                            <div class="panel-heading">
                                <p>Silahkan untuk menyelesaikan Pembayaran jika status pengiriman masih dikemas.</p>
                                <p>Pembayaran dapat dilakukan dengan mentransfer nominal pembayaran ke Rekening:</p>
                                <table>
                                    <tr>
                                        <td>Nama Bank</td>
                                        <td> : </td>
                                        <td><?=$_toko['NamaBank']?></td>
                                    </tr>
                                    <tr>
                                        <td>No Rekening</td>
                                        <td> : </td>
                                        <td><?=$_toko['NoRekening']?></td>
                                    </tr>
                                    <tr>
                                        <td>Atas Nama</td>
                                        <td> : </td>
                                        <td><?=$_toko['AtasNama']?></td>
                                    </tr>
                                </table><br>
                                <p>Terima Kasih.</p>
                            </div>
                            <div class="table-responsive">
                                <table border="1" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Jumlah Item</th>
                                            <th>Total</th>
                                            <th>Komentar</th>
                                            <th>Status Pengiriman</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $JumlahBarang;
                                            $sql = $koneksi->query("select * from datapembeli where UserName='$UserName' ");
                                            while ($data= $sql->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['Tanggal'];?></td>
                                            <td><?php echo $data['Nama'];?></td>
                                            <td><?php echo $data['Alamat'];?></td> 
                                            <td><?php echo $data['Telephone'];?></td> 
                                            <td><?php echo $data['JumlahBarang'];?></td> 
                                            <td><?php echo BuatRp($data['Subtotal']);?></td> 
                                            <td><?php echo $data['Komentar'];?></td> 
                                            <td><?php echo $data['Aksi'];?></td> 
                                        </tr>

                                   <?php } ?>

                                    </tbody>

                                </table>
                            </div>

                            
                        </div>
                    </div>
                </div>
            <!-- END DATA TABLE-->