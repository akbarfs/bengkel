<?php 
    if(isset($_GET['data'])){
    $id_produk = $_GET['data'];    
    $sql_p = "SELECT `nama_produk`,`harga`,`stock`,`deskripsi`,`foto`,`kategori`.`kategori` FROM `produk`
    INNER JOIN `kategori` ON `produk`.`id_kategori` = `kategori`.`id_kategori`
    WHERE `id_produk`='$id_produk'";

    $query_p = mysqli_query($koneksi,$sql_p); 
    while($data_p = mysqli_fetch_row($query_p)){ 
    $nama_produk = $data_p[0]; 
    $harga = $data_p[1];
    $stock = $data_p[2];
    $desk = $data_p[3];
    $foto = $data_p[4];
    $kat = $data_p[5];
    }
?>
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
                <a href="index.php?include=semua-produk" class="ml-1 text-sm font-medium text-gray-700 hover:text-white md:ml-2 dark:text-gray-400 dark:hover:text-white">Semua Produk</a>
            </div>
            </li>
            <li aria-current="page">
            <div class="flex items-center">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Detail Produk</span>
            </div>
            </li>
        </ol>
    </nav>

        <div class="w-full h-fit flex flex-col md:flex-row gap-[70px] mb-[42px]">
            <div>
                <img class="w-full h-full md:w-[382px] object-cover md:h-[382px]" src="./auth/gambar/produk/<?php echo $foto;?>" alt="produk">
            </div>    
            <div>
                <h1 class="text-[20px] text-center md:text-left font-[600] leading-[30px]"><?php echo $nama_produk;?></h1>
                <div class="flex flex-row gap-5 py-3 text-xs items-center md:items-start">
                    <p class="bg-[#393E46] p-3">Stock : <?php echo $stock;?></p>
                    <p class="bg-[#393E46] p-3">Harga : Rp.<?php echo $harga;?></p>
                    <p class="bg-[#393E46] p-3">Kategori : <?php echo $kat;?></p>
                </div>
                <div class="w-[600px] justify-normal mb-6"><?php echo $desk;?></div>
                <a href="./Auth/index.php?include=tambah-keranjang&data=<?php echo $id_produk;?>"><button class="w-full h-[38px] rounded-[10px] bg-[#fd7014] font-[800]">Add Cart</button></a>
            </div>
        </div>
    </div>
</div>
<?php }?>