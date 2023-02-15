


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
                            <h3 class="title-5 m-b-35">data toko</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <a href="?page=datatoko&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Nama Bank</th>
                                            <th>No Rekening</th>
                                            <th>Atas Nama</th>
                                            <th width="19%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from datatoko ");
                                            while ($data= $sql->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><?php echo $data['Nama'];?></td>
                                            <td><?php echo $data['Alamat'];?></td>
                                            <td><?php echo $data['Telepon'];?></td> 
                                            <td><?php echo $data['NamaBank'];?></td>  
                                            <td><?php echo $data['NoRekening'];?></td>  
                                            <td><?php echo $data['AtasNama'];?></td>  

                                            <td>
                                                <a href="?page=datatoko&aksi=ubah&id=<?php echo $data['Id']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                                                <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=datatoko&aksi=hapus&id=<?php echo $data['Id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

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

