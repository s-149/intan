
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
                            <h3 class="title-5 m-b-35">data user</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
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
                                            <th>UserName</th>
                                            <th>Level</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from user ");
                                            while ($data= $sql->fetch_assoc()) {       
                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td> 
                                            <td><a href="gambar/user/<?php echo  $data['Fhoto'];?>"> <img src="gambar/user/<?php echo  $data['Fhoto'];?>" width="75" height="50"></a> </td>
                                            <td><?php echo $data['UserName'];?></td>
                                            <td><?php echo $data['Level'];?></td>
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

