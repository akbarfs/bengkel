<?php 
    $id = $_SESSION['id'];
    $item = $_POST['keranjang'];
    $ongkir = 0;
    $total = 0;
    $bukti_pembayaran = '0';
    $status = 'Calcluate';

    if(empty($item)){
        header("Location:index.php?include=keranjang&notif=tambahkosong&jenis=item");
    }else{ 
        $sql = "INSERT INTO `transaksi` 
        (`id_customer`,`ongkir`,`total`,
        `bukti_pembayaran`,`status`)
        VALUES ('$id','$ongkir','$total',
        '$bukti_pembayaran','$status')";

        mysqli_query($koneksi,$sql);
        $id_transaksi = mysqli_insert_id($koneksi);    

        if(!empty($item)){
            foreach($item as $keranjang){
                $hide = 'yes';

                // $sql_g = "SELECT `produk`.`id_produk`,`produk`.`stock`,`kuantitas` FROM `keranjang`
                // INNER JOIN `produk` ON `keranjang`.`id_produk` =   `produk`.`id_produk` 
                // WHERE `keranjang`.`id_item`='$keranjang'";
                // $query_g = mysqli_query($koneksi, $sql_g);
                // while($data_g = mysqli_fetch_row($query_g)){
                // $id_produk = $data_g[0];
                // $stock = $data_g[1];
                // $qty = $data_g[2];
                // $sisa_stock = $stock-$qty;
                // }                
            
                $sql_i = "INSERT INTO `orders` (`id_keranjang`, `id_transaksi`) 
                VALUES ('$keranjang', '$id_transaksi')";
                mysqli_query($koneksi,$sql_i);

                $sql_up = "UPDATE `keranjang` SET `hide`='$hide'
                WHERE `id_item`='$keranjang'";
                mysqli_query($koneksi,$sql_up);        

                // $sql_x = "UPDATE `produk` SET `stock`='$sisa_stock' WHERE `id_produk`='$id_produk'";
                // mysqli_querry($koneksi,$sql_x);
            }
        }
        header("Location:index.php?include=keranjang&notif=tambahberhasil");
    }
?>