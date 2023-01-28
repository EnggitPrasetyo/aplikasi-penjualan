
<div class="container my-5">
<div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card border-0 shadow mx-3 bg-white">
    
    
    <div class="card-body">
    <h4>Form Add Barang</h4>
    <form action="<?= base_url('barang/add_barang'); ?>" method="post">
        <table class="table">
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" class="form form-control" name="nama"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" class="form form-control" name="harga"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" class="form form-control" name="stock"></td>
            </tr>
            <br>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-primary float-right" value="tambah data"></td>
            </tr>
        </table>
        <div id="formFooter">
            <p class="mt-5 mb-3 text-muted text-center">&copy; Enggit Prasetyo</p>
            </div>
    </form>
</div>

</div>
        </div>
</div>