<?php include 'header.php'; ?>
<section class="content-header">
    <h1>
        User
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
    </ol>
</section>
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
                        <th>Nama</th>
                        <th>username</th>
                        <th>email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($index = 0; $index < 100; $index++) { ?>
                        <tr>
                            <td>[Nama User]</td>
                            <td>[username]</td>
                            <td>[email]</td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>username</th>
                        <th>email</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>  
</section>
<?php include 'footer.php'; ?>

