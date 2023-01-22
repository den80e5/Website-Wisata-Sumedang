 <?php 
session_start();
$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$_GET[id]'");
$detail = $ambil->fetch_assoc();
 ?>


<div class="container-fluid py-4">
<?php $ambil=$koneksi->query("SELECT DISTINCT nama FROM pembelian_produk JOIN produk ON pembelian_produk.id_produk WHERE pembelian_produk.id_pembelian='$_GET[id]'"); ?>
<?php while($pecah=$ambil->fetch_assoc()){ ?>
<div class="col-xl-6 mb-xl-0 mb-4">
              <div class="card bg-transparent shadow-xl">
                <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('https://wapemala.files.wordpress.com/2013/03/dream-village-hd-hd-desktop-wallpaper.jpg');">
                  <span class="mask bg-gradient-dark"></span>
                  <div class="card-body position-relative z-index-1 p-3">
                    <i class="fas fa-wifi text-white p-2" aria-hidden="true"></i>
                    <h5 class="text-white mt-4 mb-5 pb-2">Tiket Wisata <?php echo $pecah['nama']; ?></h5>
                    <div class="d-flex">
                      <div class="d-flex">
                        <div class="me-4">
                          <p class="text-white text-sm opacity-8 mb-0">Nama Pembeli :</p>
                          <h6 class="text-white mb-0"><?php echo $detail['nama_pelanggan']; ?></h6>
                        </div>
                        <div>
                          <p class="text-white text-sm opacity-8 mb-0">Dibeli Tanggal :</p>
                          <h6 class="text-white mb-0"><?php echo $detail['tanggal_pembelian']; ?></h6>
                        </div>
                      </div>
                      <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                        <img class="w-60 mt-2" src="assets/img/barcode.png" alt="logo">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php $nomor++; ?>
<?php } ?>