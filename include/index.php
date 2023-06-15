<div class="container mx-auto">
    <div class="mx-4 md:mx-20">
        <section id="home" class="w-full h-fit pb-20 md:pb-0 md:h-[500px] bg-no-repeat bg-bottom flex flex-col md:flex-row justify-between" style="background-image: url('./images/hero-bg.png');">
        <div class="w-full md:w-[500px] h-full md:mb-0 mb-20 flex flex-col items-center md:items-start bg-bottom" style="background: linear-gradient(90deg, #222831 7.14%, rgba(34, 40, 49, 0.260417) 77.89%, rgba(34, 40, 49, 0) 100%);">
            <h1 class="text-[36px] font-[800] leading-[60px] mt-[24px] text-center md:text-left">Menyediakan <br class="hidden md:block"> Segala Jenis <br class="hidden md:block"> Suku Cadang, Lengkap !</h1>
            <p class="w-[338px] font-[400] mt-[16px] mb-[30px] text-center md:text-justify"> Lorem ipsum dolor sit amet cons vida ectetur adipiscing
                elit, sed do eiusmod tempor incididunt ut labore 
                et dolore magna aliqua. Ut enim ad minim </p>
            <a href="index.php?include=semua-produk"><button class="w-[132px] h-[38px] rounded-[10px] bg-[#fd7014] font-[800]">Lihat Produk >></button></a>
            <p class="font-[800] text-center md:text-left mt-[16px]">Original, Lengakap & Garansi 100%</p>
        </div>
        <div class="relative w-full md:w-[500px] h-full bg-bottom" style="background: linear-gradient(90deg, #222831 50%, rgba(34, 40, 49, 0.260417) 86.98%, rgba(34, 40, 49, 0) 100%);transform: matrix(-1, 0, 0, 1, 0, 0);">
            <div class="absolute hidden md:block w-[500px] h-[397px]" style="background: linear-gradient(90deg, #222831 4.57%, rgba(34, 40, 49, 0.260417) 75.15%, rgba(34, 40, 49, 0) 100%);"></div>
            <img class="w-full md:w-[500px] h-[397px] border-[#eeeeee] border-[1px] md:rounded-tr-[150px] md:rounded-none rounded-3xl  object-cover" src="./images/slide.jpg" alt="">          
        </div>
        </section>
    </div>
</div>

<section id="about" class="w-full h-fit py-[50px] bg-[#fd7014]">
    <div class="container mx-auto">
        <div class="mx-4 md:mx-20">
        <div class="w-fit h-fit flex flex-row justify-between items-center gap-[11px]">
            <div class="w-[8px] h-[30px] bg-[#d4d0d0] flex flex-col"></div>
            <h2 class="text-[32px] font-[600] leading-[48px]">About</h2>
        </div>
        <p class="mt-[25px] mb-[40px]">
        Lorem ipsum dolor sit amet cons vida ectetur adipiscing elit, sed do eiusmod temporsplat incididunt ut labore et dolore magna aliqua. Ut enim ad minim et dolore magna aliqua. Ut enim ad minim 
        Lorem ipsum dolor sit amet cons vida ectetur adipiscing elit, sed do eiusmod tempor right incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
        </p>
        <div class="w-fit h-fit flex flex-row justify-between items-center gap-[17px] text-xl">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
        </div>
        </div>
    </div>
</section>

<section id="produk" class="w-full h-fit">
    <div class="container mx-auto mt-[98px]">
        <div class="mx-4 md:mx-20">
        <div class="w-fit h-fit flex flex-row justify-between items-center gap-[11px]">
            <div class="w-[8px] h-[30px] bg-[#d4d0d0] flex flex-col"></div>
            <h2 class="text-[32px] font-[600] leading-[48px]">Products</h2>
        </div>
        <div class="w-full h-fit grid grid-cols-2 md:grid-cols-5 gap-[24px] my-[42px]">
        <?php 
            $sql_p = "SELECT `id_produk`,`nama_produk`,`harga`,`foto` FROM `produk` ";

            $sql_p .= " order by `id_produk` asc limit 6";
            $query_p = mysqli_query($koneksi,$sql_p); 
            while($data_p = mysqli_fetch_row($query_p)){ 
            $id_produk = $data_p[0]; 
            $nama_produk = $data_p[1]; 
            $harga = $data_p[2];
            $foto = $data_p[3];
        ?>
        <a href="index.php?include=detail-produk&data=<?php echo $id_produk;?>">
            <div class="relative w-full md:w-[200px] h-[250px] md:h-[200px] bg-cover bg-[url('./auth/gambar/produk/<?php echo $foto;?>')]">
                <div class="absolute bottom-0 h-fit bg-slate-400 p-2 rounded-tl-xl">
                    <?php echo $nama_produk;?>
                    <span class="text-red-950">(Rp.<?php echo $harga;?>,-.)</span>
                </div>
            </div>
        </a>
        <?php } ?>
        </div>
            <a href="index.php?include=semua-produk">
                <button class="w-full h-[38px] rounded-[10px] bg-[#fd7014] font-[800]">Lihat Produk >></button>
            </a>
        </div>
    </div>
</section>

<section id="#cta" class="w-full h-fit bg-[#393E46] pt-[40px] pb-[56px] mt-[130px]">
    <div class="container mx-auto">
        <div class="mx-4 md:mx-20 justify-center text-center">
        <h2 class="text-2xl">Ada pertanyaan seputar dunia otomotif & mesin ?</h2>
        <button class="w-[241px] h-[62px] rounded-[20px] bg-[#d9d9d9] font-[600] my-[29px] text-[#222831] text-lg">Hubungi Kami</button>
        <p class=" items-center">
            Lorem ipsum dolor sit amet cons vida ectetur adipiscing elit, sed do labore <br>
            vida ectetur adipiscing elit et dolore magna aliqua..
        </p>
        </div>
    </div>
</section>

<section id="testi" class="w-full h-fit pt-[151px] pb-[108px]">
    <div class="container mx-auto">
        <div class="mx-4 md:mx-20 justify-center text-center">
        <p class="text-[14px] font-semibold leading-[21px]">Testimonial</p>
        <h2 class="text-[24px] font-semibold leading-[36px] mb-[70px]">Apa Kata Mereka?</h2>
        <div class="w-full h-fit flex flex-col md:flex-row justify-between items-center gap-16">
        <?php 
        $sql = "SELECT `id_testi`,`nama_tester`,`isi_testi`,`foto_tester` FROM `testi`";
        $query = mysqli_query($koneksi,$sql);
        while($data = mysqli_fetch_row($query)){
        $id_t = $data[0];
        $nama = $data[1];
        $isi = $data[2];
        $foto = $data[3];
        ?>
            <div class="relative w-full md:w-[367px] h-fit pt-[110px] p-[50px] text-justify rounded-[15px] bg-[#393E46]" style="box-shadow: 0px 4px 40px rgba(0, 0, 0, 0.25);">
            <div class="absolute -top-[56px] left-1/2 -translate-x-1/2 w-[122px] h-[122px] bg-center bg-cover rounded-full border-[10px] border-[#222831]" style="background-image: url('./auth/gambar/foto-tester/<?php echo $foto;?>');"></div>
            <p><?php echo $isi;?></p>
            <p class="text-right mt-3 font-semibold"><?php echo $nama;?></p>
            </div>
        <?php }?>
        </div>
        </div>
    </div>
</section>
