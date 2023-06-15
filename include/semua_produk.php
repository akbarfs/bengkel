<div class="container mx-auto">
    <div class="mx-4 md:mx-20">
    <nav class="flex mb-6" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
            <a href="index.php#home" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-white dark:text-gray-400 dark:hover:text-white">
                <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                Home
            </a>
            </li>
            <li>
            <div class="flex items-center">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <p href="index.php?include=semua-produk" class="ml-1 text-sm font-medium text-gray-700 hover:text-white md:ml-2 dark:text-gray-400 dark:hover:text-white">Semua Produk</p>
            </div>
            </li>
        </ol>
    </nav>

    <div class="w-fit h-fit flex flex-row justify-between items-center gap-[11px]">
        <div class="w-[8px] h-[30px] bg-[#d4d0d0] flex flex-col"></div>
        <h2 class="text-[32px] font-[600] leading-[48px]">Semua Produk</h2>
    </div>

    <div class="w-full h-fit grid grid-cols-2 md:grid-cols-5 gap-[24px] my-[42px]">
        <?php 
            $sql_p = "SELECT `id_produk`,`nama_produk`,`harga`,`foto`,`kategori`.`kategori` FROM `produk` 
            INNER JOIN `kategori` ON `produk`.`id_kategori` =   `kategori`.`id_kategori`";

            $sql_p .= " order by `id_produk`";
            $query_p = mysqli_query($koneksi,$sql_p); 
            while($data_p = mysqli_fetch_row($query_p)){ 
            $id_produk = $data_p[0]; 
            $nama_produk = $data_p[1]; 
            $harga = $data_p[2];
            $foto = $data_p[3];
            $kategori = $data_p[4];
        ?>
            <div class="shot-thumbnail <?php echo $kategori;?>">
            <a href="index.php?include=detail-produk&data=<?php echo $id_produk;?>">
            <div class="relative w-full md:w-[200px] h-[250px] md:h-[200px] bg-cover bg-[url('./auth/gambar/produk/<?php echo $foto;?>')]">
                <div class="absolute bottom-0 h-fit bg-slate-400 p-2 rounded-tl-xl">
                    <?php echo $nama_produk;?>
                    <span class="text-red-950">(Rp.<?php echo $kategori;?>,-.)</span>
                </div>
            </div>
        </a>
            </div>
        <?php } ?>
        </div>

    </div>
</div>