<nav class="grid grid-cols-2 bg-gradient-to-r from-[#2d9455] to-[#44ad67]">
    <div class="flex m-2 space-x-4 font-medium text-white">
        <a href="<?php echo site_url('barang') ?>" class="transition duration-200 hover:text-[#000000e1] p-1.5 px-2.5 rounded text-decoration-none text-white">Barang</a>
        <a href="<?php echo site_url('supplier') ?>" class="transition duration-200 hover:text-[#000000e1] p-1.5 px-2.5 rounded text-decoration-none text-white">Supplier</a>
    </div>
    <div class="flex justify-end m-2 mr-3">
        <a href="<?php echo site_url('user/logout') ?>" class="bg-[#288a49] text-white font-medium rounded p-1.5 px-2.5 hover:bg-[#2d9455] transition duration-200 left text-decoration-none">Logout</a>
    </div>
</nav>