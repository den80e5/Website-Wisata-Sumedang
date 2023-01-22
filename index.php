<?php session_start()?>
<?php require 'header.php'; ?>
<?php
if(isset($_SESSION["admin"]))
{
    require 'sidenav_admin.php';
    require 'navbar_admin.php';
}else {
    require 'sidenav.php';
    require 'navbar.php';
}
?>
<?php 
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="main")
                    {
                        include 'main.php';
                    }
                    elseif ($_GET['halaman']=="main_admin")
                    {
                        include 'main_admin.php';
                    }
                    elseif ($_GET['halaman']=="detail")
                    {
                        include 'detail.php';
                    }
                    elseif ($_GET['halaman']=="keranjang")
                    {
                        include 'keranjang.php';
                    }
                    elseif ($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }
                    elseif ($_GET['halaman']=="login")
                    {
                        include 'login.php';
                    }
                    elseif ($_GET['halaman']=="login_admin")
                    {
                        include 'login_admin.php';
                    }
                    elseif ($_GET['halaman']=="register")
                    {
                        include 'register.php';
                    }
                    elseif ($_GET['halaman']=="checkout")
                    {
                        include 'checkout.php';
                    }
                    elseif ($_GET['halaman']=="hapus_data")
                    {
                        include 'hapus_data.php';
                    }
                    elseif ($_GET['halaman']=="ubah_data")
                    {
                        include 'ubah_data.php';
                    }
                    elseif ($_GET['halaman']=="data_pelanggan")
                    {
                        include 'data_pelanggan.php';
                    }
                    elseif ($_GET['halaman']=="invoice")
                    {
                        include 'invoice.php';
                    }
                    elseif ($_GET['halaman']=="hapus_keranjang")
                    {
                        include 'hapus_keranjang.php';
                    }
                     elseif ($_GET['halaman']=="tambah_kekeranjang")
                    {
                        include 'tambah_kekeranjang.php';
                    }
                }
                else
                {
                    include 'main.php';
                }

?>
<?php require 'footer.php'; ?>
