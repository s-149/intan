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
                                <h3 class="title-5 m-b-35">Riwayat Pemesanan :</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $JumlahBarang;
                                            $sql = $koneksi->query("select * from datapembeli ");
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

                                            <td>
                                                <a href="?page=pesanan&aksi=ubah&id=<?php echo $data['Id']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=pesanan&aksi=hapus&id=<?php echo $data['Id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                                            </td>
                                        </tr>

                                   <?php } ?>

                                    </tbody>

                                </table>
                            </div>

                            
                        </div>
                    </div>
                </div>
            <!-- END DATA TABLE-->