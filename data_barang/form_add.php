<?php include '../layout/header.php'; ?>

<?php
    $query = mysqli_query($koneksi, "SELECT max(kode_barang) as kodeMax FROM data_barang");
    $data = mysqli_fetch_array($query);
    $kodeBarang = $data['kodeMax'];
    $urutan = (int) substr($kodeBarang, 3, 3);
    $urutan++;
    $huruf = "DB-";
    $kodeBarang = $huruf . sprintf("%03s", $urutan);
?>

<main id="main-container">
<form action="query_add.php" method="post">
    <div class="content row">
        <div class="col-md-2"></div>
        <div class="col-md-8">  
            <div class="block">
                <div class="block-content block-content-full">
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Item Code</label>
                        <label class="col-lg-1 col-form-label text-right">:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="kode_barang" value="<?php echo $kodeBarang ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Item Name</label>
                        <label class="col-lg-1 col-form-label text-right">:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="nama_barang" placeholder="Item Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Type</label>
                        <label class="col-lg-1 col-form-label text-right">:</label>
                        <div class="col-lg-9">
                            <select class="form-control" name="jenis">
                                <option selected disabled>- Select -</option>
                                <option value="Product">Product</option>
                                <option value="Bergerak">Bergerak</option>
                                <option value="Non Bergerak">Non Bergerak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Unit</label>
                        <label class="col-lg-1 col-form-label text-right">:</label>
                        <div class="col-lg-9">
                            <select class="form-control" name="satuan">
                                <option selected disabled>- Select -</option>
                                <option value="PCS">PCS</option>
                                <option value="Set">Set</option>
                                <option value="Kg">Kg</option>
                                <option value="Gram">Gram</option>
                                <option value="Liter">Liter</option>
                                <option value="KWH">KWH</option>
                                <option value="Box">Box</option>
                                <option value="Roll">Roll</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Category</label>
                        <label class="col-lg-1 col-form-label text-right">:</label>
                        <div class="col-lg-9">
                            <select class="form-control" name="satuan">
                                <option selected disabled>- Select -</option>
                                <option value="Office">Office</option>
                                <option value="Kitchen">Kitchen</option>
                                <option value="Transport">Transport</option>
                                <option value="SPARTA">SPARTA</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Information</label>
                        <label class="col-lg-1 col-form-label text-right">:</label>
                        <div class="col-lg-9">
                            <textarea class="form-control" name="keterangan" rows="5" placeholder="Information..."></textarea>
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