<?php include '../layout/header.php' ?>

<?php
    $query = mysqli_query($koneksi, "SELECT max(id_masuk) as kodeMax FROM masuk");
    $data = mysqli_fetch_array($query);
    $kodeMasuk = $data['kodeMax'];
    $urutan = (int) substr($kodeMasuk, 3, 3);
    $urutan++;
    $huruf = "BM-";
    $kodeMasuk = $huruf . sprintf("%03s", $urutan);
?>
<main id="main-container">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <h5>Input Data : <?php echo $kodeMasuk ?> / <?php echo date("d-m-Y"); ?></h5>
            </div>
            <div class=" col-md-6 text-right">
                <a type="submit" class="btn btn-primary" href="query_simpan.php"><i class="fa fa-save mr-5"></i>SAVE DATA</a>
            </div>
        </div>
        
        <form action="query_add.php" method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="block">
                        <div class="block-content">
                            <div class="form-group row" hidden>
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" name="id_masuk" value="<?php echo $kodeMasuk ?>" readonly>
                                    <input type="" class="form-control" name="tgl_masuk" value="<?php echo date("d-m-Y"); ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Item Name</label>
                                <label class="col-lg-1 col-form-label text-right">:</label>
                                <div class="col-lg-8">
                                    <select class="form-control" name="kode_barang">
                                        <option selected disabled>- Pilih -</option>
                                        <?php
                                                $query ="SELECT * FROM data_barang";
                                                $hasil = mysqli_query($koneksi, $query);
                                                while($data = mysqli_fetch_array($hasil))
                                                {
                                            ?>
                                        <option value="<?= $data['kode_barang'] ?>"><?= $data['kode_barang'] ?> - <?= $data['nama_barang'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Quantity</label>
                                <label class="col-lg-1 col-form-label text-right">:</label>
                                <div class="col-lg-8">
                                    <input type="number" class="form-control" name="jumlah" placeholder="0">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Price</label>
                                <label class="col-lg-1 col-form-label text-right">:</label>
                                <div class="col-lg-8">
                                    <input type="" class="form-control text-right" name="harga_beli" placeholder="0" id="rupiah1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"></label>
                                <div class="col-lg-10 text-right">
                                    <a type="button" class="btn btn-danger" href="index.php"><i class="fa fa-close"></i> BACK</a>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-mail-forward"></i> ADD ITEM</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8" style="font-size: 12px;">
                    <div class="block">
                        <div class="block-content">
                            <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center"><b>No.</b></th>
                                        <th class="text-center"><b>Item</b></th>
                                        <th class="text-center"><b>Unit</b></th>
                                        <th class="text-center"><b>QTY</b></th>
                                        <th class="text-center"><b>Price</b></th>
                                        <th class="text-center"><b>Total</b></th>
                                        <th class="text-center"><i class="fa fa-cog mr-5"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no = 1;
                                        $hasil = mysqli_query($koneksi, "SELECT masuk_sementara.`id`, masuk_sementara.`harga_beli`, data_barang.`kode_barang`, data_barang.`nama_barang`, data_barang.`satuan`, masuk_sementara.`tgl_masuk`, masuk_sementara.`jumlah`, CONCAT(masuk_sementara.`harga_beli` * masuk_sementara.`jumlah`) AS 'total' FROM data_barang JOIN masuk_sementara ON data_barang.`kode_barang` = masuk_sementara.`kode_barang`");
                                        while($data = mysqli_fetch_array($hasil)){
                                    ?>
                                    <tr>
                                        <td class="text-center"><?= $no ?></td>
                                        <td><?= $data['kode_barang'] ?> - <?= $data['nama_barang'] ?></td>
                                        <td><?= $data['satuan'] ?></td>
                                        <td class="text-center"><?= $data['jumlah'] ?></td>
                                        <td class="text-right"><?= number_format($data['harga_beli'], 0, ".", ".") ?></td>
                                        <td class="text-right"><?= number_format($data['total'], 0, ".", ".") ?></td>
                                        <td class="text-center">
                                            <a href="query_delete.php?id=<?= $data['id'] ?>" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
            </div>
        </form>
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
        if (    key != 188 // Comma
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