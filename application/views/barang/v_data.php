<div class="container my-3">
<div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card border-0 shadow mx-3 bg-white wrapper fadeInDown">

        
        <div class="card-body">
            <h4 class="mb-3">Data Barang</h4>
            <div class="table-responsive">
         <br>
         <?php echo $this->session->flashdata('pesan');?>
        <table class="table table-striped" id="dataTable">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">stok</th>
                <th scope="col">Jumlah Terjual</th>
                <th scope="col">Jumlah Transaksi</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            foreach ($records as $r) {
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $r->nama_barang; ?></td>
                    <td><?php echo $r->stock; ?></td>
                    <td><?php echo $r->jumlah_terjual; ?></td>
                    <td><?php echo $r->tanggal_transaksi; ?></td>
                    <td><?php echo $r->jenis_barang; ?></td>
                    <td><a href="<?php echo base_url('barang/v_edit_barang/' . $r->id_barang); ?>" class="btn btn-success"> <i class="fa fa-edit"></i> Edit</a>
                        <a href="<?php echo base_url('barang/delete_barang/' . $r->id_barang); ?>" class="btn btn-danger" > <i class="fas fa-trash-alt"></i> Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
        <a class="btn btn-primary waves-effect waves-light" data-backdrop="false" data-toggle="modal" data-target="#centralModalSm"> <i class="fas fa-plus"></i> Tambah Data</a>
        <!-------------------------------------------------------Modal Tambah barang------------------------------------------------------------>
        <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">

            <div class="modal-dialog modal-lg" role="document">

                <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel">Form Add Barang</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <form action="<?= base_url('barang/add_barang'); ?>" method="post">
                        <table class="table">
                            <tr>
                                <td><label for="nama_barang">Nama Barang</label></td>
                                <td><input type="text" id="nama_barang" class="form form-control" name="nama_barang" require></td>
                            </tr>
                            <tr>
                                <td> Stock</td>
                                <td><input type="number" class="form form-control" name="stock" Required></td>
                            </tr>
                            <tr>
                                <td>Jumlah Terjual</td>
                                <td><input type="number" class="form form-control" name="jumlah_terjual" Required></td>
                            </tr>
                            <tr>
                                <td>Data Transaksi</td>
                                <td><input type="date" class="form form-control" name="tanggal_transaksi" Required></td>
                            </tr>
                            <tr>
                                <td>Jenis Barang</td>
                                <td><input type="text" class="form form-control" name="jenis_barang" Required></td>
                            </tr>
                            <br>
                            <tr>
                                <td></td>
                                <td><input type="submit" class="btn btn-primary float-right" value="tambah data"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                </div>
            </div>
            </div>

<script>
    $('#dataTable').DataTable()
</script>