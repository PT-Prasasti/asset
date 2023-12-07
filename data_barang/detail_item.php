<?php include '../layout/header_detail.php'; ?>

<?php
    $kode_barang        = $_GET['kode_barang'];
 
    $barang     = mysqli_query($koneksi, "select * from data_barang where kode_barang='$kode_barang'");
    $row        = mysqli_fetch_array($barang);

    $satuan     = array('PCS','Set','Kg','Liter','KWH','Box','Roll');
    $jenis     = array('Product','Bergerak','Non Bergerak');
    $kategori     = array('Office','Kitchen','Transport', 'SPARTA');
?>

<main id="main-container">
<form action="query_edit.php" method="post">
    <div class="content row">
        <div class="col-md-2"></div>
        <div class="col-md-8">  
            <div class="block">
                <div class="block-content block-content-full">
                    <div class="form-group row">
                        <label class="col-lg-12 col-form-label">Item Code</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="kode_barang" value="<?= $row['kode_barang'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-12 col-form-label">Item Name</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="nama_barang" value="<?= $row['nama_barang'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-12 col-form-label">Type</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="jenis" value="<?= $row['jenis'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-12 col-form-label">Unit</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="satuan" value="<?= $row['satuan'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-12 col-form-label">Category</label>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="kategori" value="<?= $row['kategori'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-12 col-form-label">Information</label>
                        <div class="col-lg-12">
                            <textarea class="form-control" name="keterangan" rows="5" placeholder="Keterangan..." readonly><?= $row['keterangan'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</form>
</main>
<?php include '../layout/footer.php'; ?>