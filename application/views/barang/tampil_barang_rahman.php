<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="shortcut icon" href="<?= base_url('assets/img/logoskatel.png');  ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="
    https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

</head>

<body>
    <div class="container mx-auto">
        <nav class="grid grid-cols-2 bg-blue-700 ">
            <div class="text-3xl space-x-5 text-white m-2 flex">
                <a href="<?= site_url() ?>">
                    <p class="hover:text-amber-600">Home</p>
                </a>
                <a href="<?= site_url('siswa') ?>">
                    <p class="hover:text-red-200">Siswa</p>
                </a>
                <a href="/guru">
                    <p class="hover:text-red-200">Guru</p>
                </a>
                <a href="/nilai">
                    <p class="hover:text-red-200">Nilai</p>
                </a>
            </div>
            <div class="text-2xl space-x-5 text-white mb-2 mt-3 mr-3 flex justify-end">
                <a href="/login">
                    <p class="bg-amber-500 pl-4 pr-4 pb-1 rounded-md hover:bg-amber-800 ">Login</p>
                </a>
            </div>
        </nav>

        <div class="flex justify-center m-5">
            <div class="mr-[270px] text-2xl font-bold ">
                <h1>Data Barang</h1>
            </div>
            <div class="mb-3 text-white">
                <a href="<?php echo site_url('barang/simpan') ?>" class="bg-blue-500 rounded-lg p-2 hover:bg-blue-800">Tambah Data</a>
            </div>
        </div>
        <div class="mx-20">
            <table id="table_id" class="table table-striped">
                <thead>
                    <tr>
                        <th class="border">ID Barang</th>
                        <th class="border">Nama Barang</th>
                        <th class="border">Jenis Barang</th>
                        <th class="border">Stok</th>
                        <th class="border">Harga</th>
                        <th class="border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($barang as $s) : ?>
                        <tr>
                            <td class="border"><?php echo $s->id_barang ?></td>
                            <td class="border"><?php echo $s->nama_barang ?></td>
                            <td class="border"><?php echo $s->jenis_barang ?></td>
                            <td class="border"><?php echo $s->stok ?></td>
                            <td class="border">Rp.<?php echo number_format($s->harga); ?></td>
                            <td class="border">
                                <a class="btn btn-warning text-white" href="<?php echo site_url('barang/ubah/' . $s->id_barang) ?>">Ubah</a>
                                <a class="btn btn-danger" href="<?php echo site_url('barang/hapus/' . $s->id_barang) ?>">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#table_id').DataTable({
                    paging: false,
                    ordering: false,
                    info: false,
                });
            });
        </script>
</body>

</html>