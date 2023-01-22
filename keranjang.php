<?php
session_start();
if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
    echo "<script>alert('Keranjang kosong, Silahkan belanja');</script>";
    echo "<script>location = 'index.php';</script>"; 
}

?>
 <div class="container-fluid py-4">
                    <div class="card ">
                        <div class="card-header py-3">
                            <div class="d-flex justify-content-between mt-2">
                            <a href="index.php" class="btn btn-info btn-sm">Lanjutkan Belanja</a> 
                            <a href="index.php?halaman=checkout" class="btn btn-primary btn-sm">Lanjutkan Checkout</a>
                            </div>
                        </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">

                                    <?php $nomor=1; ?>
                                    <?php $totalbelanja = 0; ?>
                                    <?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah):?>
                                    <!-- Menampilkan yang sedang di perulangkan berdasarkan id produk -->
                                    <?php
                                    $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                                    $pecah = $ambil->fetch_assoc();
                                    $subharga = $pecah ["harga_produk"]*$jumlah;?>
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
<img src="data_img/<?php echo $pecah['foto_produk']; ?>" style="margin-right: 35px;" width="100">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm"><?php echo $pecah['nama_produk'];?></h6>
                    <span class="mb-2 text-xs">Kategori: <span class="text-dark font-weight-bold ms-sm-2"><?php echo $pecah['kategori'];?></span></span>
                    <span class="mb-2 text-xs">Jumlah: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $jumlah; ?></span></span>
                    <span class="mb-2 text-xs"> Harga Satuan: <span class="text-dark ms-sm-2 font-weight-bold">Rp. <?php echo $pecah['harga_produk'];?></span></span>
                    <span class="mb-2 text-xs"> Total Harga: <span class="text-dark ms-sm-2 font-weight-bold">Rp. <?php echo number_format($subharga); ?></span></span>
                  </div>
                  
                  <div class="ms-auto text-end">
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="index.php?halaman=hapus_keranjang&id=<?php echo $id_produk ?>"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>Hapus</a>
                  </div>
                </li>
                                        <?php $nomor++; ?>
                                        <?php $totalbelanja+=$subharga; ?>
                                        <?php endforeach ?>
              </ul>
                                <input class="form-control text-center mt-2" type="text" placeholder="Total Pembayaran Rp. <?php echo number_format($totalbelanja) ?>" readonly>
                            </div>
            </div>
                    <!-- End Content Row -->
                </div>



