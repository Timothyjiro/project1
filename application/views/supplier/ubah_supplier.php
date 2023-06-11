<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE</title>
    <link rel="icon" href="<?php base_url('assets/img/logofix.png'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="card mx-64 my-10">
        <div class="py-1.5 text-center bg-gradient-to-r from-[#2d9455] to-[#44ad67] text-white">
            <h5> Ubah Data Barang </h5>
        </div>
        <form action="" method="post">
            <div class="ml-4 mt-3 ">
                <?= validation_errors(); ?>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">Pilih Barang</label>
                    <select name="id_barang" id="" class="form-control">
                        <option value="<?php echo $supplier->id_barang ?>"><?php echo $supplier->nama_barang ?>/ <?php echo $supplier->jenis_barang ?> </option>
                        <?php foreach ($list as $s) : ?>
                            <option value="<?= $s->id_barang  ?>"><?= $s->nama_barang ?>/<?= $s->jenis_barang ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" value="<?php echo $supplier->jumlah ?>">
                    <input type="text" name="id_supplier" class="form-control" value="<?php echo $supplier->id_supplier ?>" hidden>
                </div>
                <div class="">
                    <input type="submit" value="Simpan" class="bg-[#288a49] text-white font-medium rounded p-1 px-3 hover:bg-[#2d9455] transition duration-200">
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>