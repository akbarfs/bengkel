<?php include("koneksi/koneksi.php");?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Telo Speedshop</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <!--META-->
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" href="css/output.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

<body class="bg-[#222831] leading-[18px] font-[Poppins] text-[#eeeeee] text-[12px] pt-[150px]">
    <?php include("include/header.php");?>
    <?php include("include/login.php");?>

    <?php 
        if(isset($_GET["include"])){
            $include = $_GET["include"];
            if($include=="semua-produk"){
                include("include/semua_produk.php");                
            }else if($include=="detail-produk"){
                include("include/detail_produk.php");    
            }else if($include=="index.php#home"){
                include("include/index.php#home");
            }else if($include=="index.php#produk"){
                include("include/index.php#produk");
            }else if($include=="index.php#about"){
                include("include/index.php#about");
            }else if($include=="index.php#produk"){
                include("include/index.php#produk");
            }else if($include=="index.php#testi"){
                include("include/index.php#testi");                
            }
            
            }else{
            include("include/index.php");
            }
        ?>
    <?php include("include/footer.php")?>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="https://use.fontawesome.com/4c21d5d794.js"></script>
</body>

</html>