<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE</title>
    <link rel="icon" href="assets/img/logofix.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <div>
        <div class="grid grid-cols-2 mt-3 bg-gradient-to-r from-[#2d9455] to-[#44ad67] w-[850px] h-[50px] absolute top-[80px] right-[258px] rounded shadow-md">
            <div class="flex justify-center mr-[255px] mt-1.5 text-white">
                <h1 class="font-bold text-2xl">Data Supplier</h1>
            </div>
            <div class="flex justify-center ml-[16.7rem] mt-[0.540rem]">
                <a href="<?php echo site_url('supplier/simpan') ?>">
                    <h1 class="bg-[#288a49] text-white font-medium rounded p-1 px-2 hover:bg-[#2d9455] transition duration-200 left">Tambah Supplier</h1>
                </a>
            </div>
        </div>

        <center>
            <div class="flex justify-center mt-[50px]">
                <table class="table-auto w-15 shadow-md">
                    <thead>
                        <tr class="bg-white text-[#5e9462]">
                            <th class="border-b-2 border-[#DDDDDD] text-left p-3 pt-[3.25rem]">ID Supplier</th>
                            <th class="border-b-2 border-[#DDDDDD] w-52 text-left px-3 pt-10">Nama Barang</th>
                            <th class="border-b-2 border-[#DDDDDD] w-32 text-left pt-10">Jenis Barang</th>
                            <th class="border-b-2 border-[#DDDDDD] w-36 text-left px-3 pt-10">Jumlah Masuk</th>
                            <th class="border-b-2 border-[#DDDDDD] w-48 text-left px-3 pt-10">Tanggal Masuk</th>
                            <th class="border-b-2 border-[#DDDDDD] w-24 text-left pt-10">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($supplier as $s) : ?>
                            <tr class="bg-white">
                                <td class="border-b-2 border-[#DDDDDD] p-3"> <?php echo $s->id_supplier ?> </td>
                                <td class="border-b-2 border-[#DDDDDD] px-3"> <?php echo $s->nama_barang ?> </td>
                                <td class="border-b-2 border-[#DDDDDD]"> <?php echo $s->jenis_barang ?> </td>
                                <td class="border-b-2 border-[#DDDDDD] px-3"> <?php echo $s->jumlah ?> </td>
                                <td class="border-b-2 border-[#DDDDDD] px-3"> <?php echo $s->tanggal_masuk ?> </td>
                                <td class="border-b-2 border-[#DDDDDD]">
                                    <a href="<?php echo site_url('supplier/ubah/' . $s->id_supplier) ?>" class="">📝</a> |
                                    <a href="<?php echo site_url('supplier/hapus/' . $s->id_supplier) ?>" class="">🗑</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </center>
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