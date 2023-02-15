
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
                            <h3 class="title-5 m-b-35">data produk</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <a href="?page=databarang&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>NamaBarang</th>
                                            <th>Satuan</th>
                                            <th>HargaBeli</th>
                                            <th>HargaJual</th>
                                            <th>Stok</th>
                                            <th>Kategori</th>
                                            <th>Deskripsi</th>
                                            <th width="19%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from databarang ");
                                            while ($data= $sql->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><a href="gambar/barang/<?php echo  $data['Gambar'];?>"> <img src="gambar/barang/<?php echo  $data['Gambar'];?>" width="75" height="50"></a> </td>
                                            <td><?php echo $data['NamaBarang'];?></td>
                                            <td><?php echo $data['Satuan'];?></td>
                                            <td><?php echo BuatRp($data['HargaBeli']);?></td>  
                                            <td><?php echo BuatRp($data['HargaJual']);?></td>  
                                            <td><?php echo $data['Stok'];?></td>  
                                            <td><?php echo $data['Kategori'];?></td>  
                                            <td><?php echo $data['Deskripsi'];?></td>  

                                            <td>
                                                <a href="?page=databarang&aksi=ubah&id=<?php echo $data['Id']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=databarang&aksi=hapus&id=<?php echo $data['Id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                                            </td>
                                        </tr>

                                        <?php  } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

