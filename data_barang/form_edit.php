<?php include '../layout/header.php'; ?>

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
                        <label class="col-lg-2 col-form-label">Item Code</label>
                        <label class="col-lg-1 col-form-label text-right">:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="kode_barang" value="<?= $row['kode_barang'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Item Name</label>
                        <label class="col-lg-1 col-form-label text-right">:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="nama_barang" value="<?= $row['nama_barang'] ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Type</label>
                        <label class="col-lg-1 col-form-label text-right">:</label>
                        <div class="col-lg-9">
                            <select name="satuan" class="form-control" required>
                                <?php
                                    foreach ($satuan as $j){
                                        echo "<option value='$j' ";
                                        echo $row['satuan']==$j?'selected="selected"':'';
                                        echo ">$j</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Unit</label>
                        <label class="col-lg-1 col-form-label text-right">:</label>
                        <div class="col-lg-9">
                            <select name="jenis" class="form-control" required>
                                <?php
                                    foreach ($jenis as $j){
                                        echo "<option value='$j' ";
                                        echo $row['jenis']==$j?'selected="selected"':'';
                                        echo ">$j</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Category</label>
                        <label class="col-lg-1 col-form-label text-right">:</label>
                        <div class="col-lg-9">
                            <select name="kategori" class="form-control" required>
                                <?php
                                    foreach ($kategori as $j){
                                        echo "<option value='$j' ";
                                        echo $row['kategori']==$j?'selected="selected"':'';
                                        echo ">$j</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Information</label>
                        <label class="col-lg-1 col-form-label text-right">:</label>
                        <div class="col-lg-9">
                            <textarea class="form-control" name="keterangan" rows="5" placeholder="Keterangan..."><?= $row['keterangan'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 text-right">
                            <a type="button" class="btn btn-danger" href="form_index.php">
                                <i class="fa fa-arrow-circle-o-left mr-5"></i>BACK
                            </a>
                            <button type="submit" class="btn btn-success" href="form_add.php">
                                <i class="fa fa-save mr-5"></i>SAVE DATA
                            </button>
                        </div> 
                    </div>
                </div>
            </div>
        </div>  
    </div>
</form>
</main>
<?php include '../layout/footer.php'; ?>