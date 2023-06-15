<?php
    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $username = mysqli_real_escape_string($koneksi, $user);
        $password = mysqli_real_escape_string($koneksi, MD5($pass));
    
        //cek username dan password
        $sql=   "select `id`, `role` from `users`
                where `username`='$username' and
                `password`='$password'";
        $query = mysqli_query($koneksi, $sql);
        $jumlah = mysqli_num_rows($query);
        if(empty($user)){
            header("Location:index.php?include=login&gagal=userKosong");
        }else if(empty($pass)){
            header("Location:index.php?include=login&gagal=passKosong");
        }else if($jumlah==0){
            header("Location:index.php?include=login&gagal=userpassSalah");
        }else{
            session_start();
            //get data
            while($data = mysqli_fetch_row($query)){
                $id = $data[0];
                $role = $data[0];
                $_SESSION['id']=$id;
                $_SESSION['role']=$role;
                header("Location:index.php?include=profile");
            }
        }
    }
?>