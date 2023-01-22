<?php

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['foto_produk'];
	if (file_exists("data_img/$fotoproduk"))
	{
		unlink("data_img/$fotoproduk");
	}

	$koneksi->query("DELETE FROM produk WHERE id_produk='$_GET[id]'");
	echo "<script>alert('Produk Dihapus');</script>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=main_admin'>";