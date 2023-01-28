<div class="container my-5">
<div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card border-0 shadow mx-3 bg-white wrapper fadeInDown">
    
    
    <div class="card-body">
    <h4>Form Edit Buku</h4>
    <form action="<?= base_url('barang/edit_barang'); ?>" method="post">
        <table class="table">
            <input type="text" name="id_barang" value="<?= $records[0]->id_barang; ?>" hidden>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" class="form form-control" value="<?= $records[0]->nama_barang; ?>" name="nama_barang"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" class="form form-control" value="<?= $records[0]->stock; ?>" name="stock"></td>
            </tr>
            <tr>
                <td>Jumalah Terjual</td>
                <td><input type="text" class="form form-control" value="<?= $records[0]->jumlah_terjual; ?>" name="jumlah_terjual"></td>
            </tr>
            <tr>
                <td>Tanggal Transaksi</td>
                <td><input type="text" class="form form-control" value="<?= $records[0]->tanggal_transaksi; ?>" name="tanggal_transaksi"></td>
            </tr>
            <tr>
                <td>Jenis Barang</td>
                <td><input type="text" class="form form-control" value="<?= $records[0]->jenis_barang ?>" name="jenis_barang"></td>
            </tr>
            <br>
            <tr><td>
                </td>
                
            </tr>
        </table>
        <button type="submit" class="btn btn-primary float-right">Edit Data</button>
        <div id="formFooter">
            <p class="mt-5 mb-3 text-muted text-center">&copy; Enggit Prasetyo</p>
            </div>
    </form>
</div>
</div>
            </div>
        </div>
</div>

