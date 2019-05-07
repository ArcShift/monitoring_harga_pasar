<?php include 'header.php'; ?>
<section class="content">
    <div class="box">
        <div class="box-header">
            <button type="submit" class="btn btn-primary pull-right">Tambah</button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Toko</th>
                        <th>Tanggal</th>
                        <th>Lokasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($index = 0; $index < 100; $index++) { ?>
                        <tr>
                            <td>[Nama Produk]</td>
                            <td>Rp. 10.000</td>
                            <td>[Nama Toko]</td>
                            <td>07-05-2019</td>
                            <td>Surabaya</td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Toko</th>
                        <th>Tanggal</th>
                        <th>Lokasi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>  
</section>
<?php include 'footer.php'; ?>