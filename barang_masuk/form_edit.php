<?php include '../layout/header.php' ?>

<?php
    $id        = $_GET['id'];
 
    $barang     = mysqli_query($koneksi, "SELECT masuk.`kode_barang`, masuk.`id`, masuk.`id_masuk`, masuk.`tgl_masuk`, data_barang.`nama_barang`, masuk.`harga_beli`, masuk.`jumlah`
    FROM masuk JOIN data_barang
    ON masuk.`kode_barang`=data_barang.`kode_barang` WHERE masuk.`id`='$id'");
    $row        = mysqli_fetch_array($barang);
?>
<main id="main-container">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <h5>Edit Data Incoming : </h5>
            </div>
        </div>
        <div class="block">
            <form action="query_edit.php" method="post">
                <div class="block-content row">
                    <div class="col-md-5">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">ID Transaction</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="id" value="<?= $row['id'] ?>" readonly hidden>
                                <input type="text" class="form-control" name="id_masuk" value="<?= $row['id_masuk'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Update Date</label>
                            <div class="col-lg-9">
                                <input type="" class="form-control" name="tgl_masuk" value="<?php echo date("d-m-Y"); ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Item name</label>
                            <div class="col-lg-9">
                                <input type="hidden" class="form-control" name="kode_barang" value="<?= $row['kode_barang'] ?>" readonly>
                                <input type="" class="form-control" name="" value="<?= $row['kode_barang'] ?> - <?= $row['nama_barang'] ?>" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Quantity</label>
                            <div class="col-lg-9">
                                <input type="number" class="form-control" name="jumlah" placeholder="0" value="<?= $row['jumlah'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Price</label>
                            <div class="col-lg-9">
                                <input type="" class="form-control text-right" name="harga_beli" placeholder="0" id="rupiah1" value="<?= number_format($row['harga_beli'], 0, ".", ".") ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label"></label>
                            <div class="col-lg-10 text-right">
                                <a type="button" class="btn btn-danger" href="index.php"><i class="fa fa-close mr-5"></i>BACK</a>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-edit mr-5"></i>SAVE DATA</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main> 

    <script>
        var rupiah1 = document.getElementById("rupiah1");
        rupiah1.addEventListener("keyup", function(e) {
        rupiah1.value = convertRupiah(this.value, "");
        });
        rupiah1.addEventListener('keydown', function(event) {
            return isNumberKey(event);
        });
        
        function convertRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, "").toString(),
            split  = number_string.split(","),
            sisa   = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        
            if (ribuan) {
                separator = sisa ? "." : "";
                rupiah += separator + ribuan.join(".");
            }
        
            rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
            return prefix == undefined ? rupiah : rupiah ? prefix + rupiah : "";
        }
        
        function isNumberKey(evt) {
            key = evt.which || evt.keyCode;
            if ( 	key != 188 // Comma
                && key != 8 // Backspace
                && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
                && (key < 48 || key > 57) // Non digit
                ) 
            {
                evt.preventDefault();
                return;
            }
        }
    </script>
    
<?php include '../layout/footer.php' ?>