<?php include '../layout/header.php'; ?>

<main id="main-container">
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default row">
                <div class="col-md-6">
                    <h3 class="block-title">List Item Data</h3>
                </div>  
                <div class="col-md-6 text-right">
                    <a type="button" class="btn btn-primary" href="form_add.php">
                        <i class="fa fa-plus mr-5"></i>Item Add
                    </a>
                </div> 
            </div>
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center">Item Code</th>
                            <th class="text-center">Item Name</th>
                            <th class="text-center">Unit</th>
                            <th class="text-center">Type</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Information</th>
                            <th class="text-center"><i class="fa fa-cog"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $hasil = mysqli_query($koneksi, "SELECT * FROM data_barang");
                            while($data = mysqli_fetch_array($hasil)){
                        ?>
                        <tr>
                            <td class="text-center"><?= $data['kode_barang'] ?></td>
                            <td><?= $data['nama_barang'] ?></td>
                            <td class="text-center"><?= $data['satuan'] ?></td>
                            <td class="text-center"><?= $data['jenis'] ?></td>
                            <td class="text-center"><?= $data['kategori'] ?></td>
                            <td><?= $data['keterangan'] ?></td>
                            <td class="text-center">
                                <a href="form_edit.php?kode_barang=<?= $data['kode_barang'] ?>" type="button" class="btn btn-warning"><i class="fa fa-pencil-square"></i></a> |
                                <button onclick="hapus('<?= $data['kode_barang'] ?>')" type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-fadein"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-danger">
                        <h3 class="block-title">Data Delete</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>Are you sure to delete the data ???
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">BACK</button>
                    <a type="button" class="btn btn-danger" id="delete">
                        <i class="fa fa-close"></i> DELETE
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function hapus(kode_barang){
        var hps     = document.querySelector('#delete');
        hps.href    = 'query_delete.php?kode_barang='+kode_barang;
    }
</script>
<?php include '../layout/footer.php'; ?>