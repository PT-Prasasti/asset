<?php include '../layout/header.php'; ?>

<main id="main-container">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <h5>List Data Incoming :</h5>
            </div>
        </div>
        
        <div class="block">
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center"><b>No.</b></th>
                            <th class="text-center"><b>Id Trancation</b></th>
                            <th class="text-center"><b>Date</b></th>
                            <th class="text-center"><b>Item Name</b></th>
                            <th class="text-center"><b>Quantity</b></th>
                            <th class="text-center"><b>Price</b></th>
                            <th class="text-center"><i class="fa fa-cog mr-5"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $hasil = mysqli_query($koneksi, "SELECT masuk.`id`, masuk.`id_masuk`, masuk.`tgl_masuk`, data_barang.`nama_barang`,                                    masuk.`harga_beli`, masuk.`jumlah`
                                                                    FROM masuk JOIN data_barang
                                                                    ON masuk.`kode_barang`=data_barang.`kode_barang` ");
                            while($data = mysqli_fetch_array($hasil)){
                        ?>
                        <tr>
                            <td class="text-center"><?= $no ?></td>
                            <td class="text-center"><?= $data['id_masuk'] ?></td>
                            <td class="text-center"><?= date('d-m-Y', strtotime($data['tgl_masuk'])) ?></td>
                            <td><?= $data['nama_barang'] ?></td>
                            <td class="text-center"><?= $data['jumlah'] ?></td>
                            <td class="text-right"><?= number_format($data['harga_beli'], 0, ".", ".") ?></td>
                            <td class="text-center">
                                <a href="form_edit.php?id=<?= $data['id'] ?>" type="button" class="btn btn-warning"><i class="fa fa-pencil-square"></i></a> |
                                <button onclick="hapus('<?= $data['id'] ?>')" type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-fadein"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php 
                        $no++;
                        } ?>
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
                        <h3 class="block-title">Delete Data</h3>
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
    function hapus(id){
        var hps     = document.querySelector('#delete');
        hps.href    = 'query_delete_all.php?id='+id;
    }
</script>

<?php include '../layout/footer.php'; ?>