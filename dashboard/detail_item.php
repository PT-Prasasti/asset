<?php include '../layout/header_detail.php'; ?>

<main id="main-container">
    <div class="content row">
        <div class="col-md-6">
            <div class="block">
                <div class="block-header block-header-default row">
                    <div class="col-md-6">
                        <h3 class="block-title">Latest Stock : OFFICE</h3>
                    </div>  
                </div>
                <div class="block-content block-content-full">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center">Item Code</th>
                                <th class="text-center">Item Name</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Stock</th>
                                <th class="text-center">Unit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $hasil = mysqli_query($koneksi, "SELECT data_barang.`kode_barang`, data_barang.`nama_barang`, data_harga.`harga_beli`,data_barang.`stok` , data_barang.`satuan`, data_barang.`kategori`
                                    FROM data_barang JOIN data_harga
                                    ON data_barang.`kode_barang`=data_harga.`kode_barang` 
                                    WHERE data_barang.`kategori`='office' GROUP BY data_barang.`kode_barang`");
                                while($data = mysqli_fetch_array($hasil)){
                            ?>
                            <tr>
                                <td class="text-center"><?= $data['kode_barang'] ?></td>
                                <td><?= $data['nama_barang'] ?></td>
                                <td class="text-right"><?= number_format($data['harga_beli'], 0, ".", ".") ?></td>
                                <td class="text-center"><?= $data['stok'] ?></td>
                                <td class="text-center"><?= $data['satuan'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
        <div class="col-md-6">
            <div class="block">
                <div class="block-header block-header-default row">
                    <div class="col-md-6">
                        <h3 class="block-title">Latest Stock : KITCHEN</h3>
                    </div>  
                </div>
                <div class="block-content block-content-full">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center">Item Code</th>
                                <th class="text-center">Item Name</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Stock</th>
                                <th class="text-center">Unit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $hasil = mysqli_query($koneksi, "SELECT data_barang.`kode_barang`, data_barang.`nama_barang`, data_harga.`harga_beli`,data_barang.`stok` , data_barang.`satuan`, data_barang.`kategori`
                                    FROM data_barang JOIN data_harga
                                    ON data_barang.`kode_barang`=data_harga.`kode_barang` 
                                    WHERE data_barang.`kategori`='kitchen' GROUP BY data_barang.`kode_barang`");
                                while($data = mysqli_fetch_array($hasil)){
                            ?>
                            <tr>
                                <td class="text-center"><?= $data['kode_barang'] ?></td>
                                <td><?= $data['nama_barang'] ?></td>
                                <td class="text-right"><?= number_format($data['harga_beli'], 0, ".", ".") ?></td>
                                <td class="text-center"><?= $data['stok'] ?></td>
                                <td class="text-center"><?= $data['satuan'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
        <div class="col-md-6">
            <div class="block">
                <div class="block-header block-header-default row">
                    <div class="col-md-6">
                        <h3 class="block-title">Latest Stock : Transport</h3>
                    </div>  
                </div>
                <div class="block-content block-content-full">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center">Item Code</th>
                                <th class="text-center">Item Name</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Stock</th>
                                <th class="text-center">Unit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $hasil = mysqli_query($koneksi, "SELECT data_barang.`kode_barang`, data_barang.`nama_barang`, data_harga.`harga_beli`,data_barang.`stok` , data_barang.`satuan`, data_barang.`kategori`
                                    FROM data_barang JOIN data_harga
                                    ON data_barang.`kode_barang`=data_harga.`kode_barang` 
                                    WHERE data_barang.`kategori`='transport' GROUP BY data_barang.`kode_barang`");
                                while($data = mysqli_fetch_array($hasil)){
                            ?>
                            <tr>
                                <td class="text-center"><?= $data['kode_barang'] ?></td>
                                <td><?= $data['nama_barang'] ?></td>
                                <td class="text-right"><?= number_format($data['harga_beli'], 0, ".", ".") ?></td>
                                <td class="text-center"><?= $data['stok'] ?></td>
                                <td class="text-center"><?= $data['satuan'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
        <div class="col-md-6">
            <div class="block">
                <div class="block-header block-header-default row">
                    <div class="col-md-6">
                        <h3 class="block-title">Latest Stock : SPARTA</h3>
                    </div>  
                </div>
                <div class="block-content block-content-full">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center">Item Code</th>
                                <th class="text-center">Item Name</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Stock</th>
                                <th class="text-center">Unit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $hasil = mysqli_query($koneksi, "SELECT data_barang.`kode_barang`, data_barang.`nama_barang`, data_harga.`harga_beli`,data_barang.`stok` , data_barang.`satuan`, data_barang.`kategori`
                                    FROM data_barang JOIN data_harga
                                    ON data_barang.`kode_barang`=data_harga.`kode_barang` 
                                    WHERE data_barang.`kategori`='sparta' GROUP BY data_barang.`kode_barang`");
                                while($data = mysqli_fetch_array($hasil)){
                            ?>
                            <tr>
                                <td class="text-center"><?= $data['kode_barang'] ?></td>
                                <td><?= $data['nama_barang'] ?></td>
                                <td class="text-right"><?= number_format($data['harga_beli'], 0, ".", ".") ?></td>
                                <td class="text-center"><?= $data['stok'] ?></td>
                                <td class="text-center"><?= $data['satuan'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </div>
</main>

<?php include '../layout/footer.php'; ?>