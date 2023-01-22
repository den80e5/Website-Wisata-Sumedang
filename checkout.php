<div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-xl-6 mb-xl-0 mb-4">
              <div class="card bg-transparent shadow-xl">
                <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/card-visa.jpg');">
                  <span class="mask bg-gradient-dark"></span>
                  <div class="card-body position-relative z-index-1 p-3">
                    <i class="fas fa-wifi text-white p-2" aria-hidden="true"></i>
                    <h5 class="text-white mt-4 mb-5 pb-2">4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852</h5>
                    <div class="d-flex">
                      <div class="d-flex">
                        <div class="me-4">
                          <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                          <h6 class="text-white mb-0">Kelompok SM</h6>
                        </div>
                        <div>
                          <p class="text-white text-sm opacity-8 mb-0">Expires</p>
                          <h6 class="text-white mb-0">11/22</h6>
                        </div>
                      </div>
                      <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                        <img class="w-60 mt-2" src="assets/img/logos/mastercard.png" alt="logo">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                        <i class="fas fa-landmark opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                      <h6 class="text-center mb-0">Kelompok SM</h6>
                      <span class="text-xs">Sisa Saldo</span>
                      <hr class="horizontal dark my-3">
                      <h5 class="mb-0">+Rp. 1.350.000</h5>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                        <i class="fab fa-paypal opacity-10" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                      <h6 class="text-center mb-0">Kelompok SM</h6>
                      <span class="text-xs">Sisa Saldo Paypal</span>
                      <hr class="horizontal dark my-3">
                      <h5 class="mb-0">+Rp. 570.000</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h6 class="mb-0">Bayar dengan Kartu Kredit</h6>
                    </div>
                    <div class="col-6 text-end">
                      <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i class="fas fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Pembayaran Lainya</a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-md-6 mb-md-0 mb-4">
                      <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                        <img class="w-10 me-3 mb-0" src="assets/img/logos/mastercard.png" alt="logo">
                        <h6 class="mb-0">4343&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852</h6>
                        <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" aria-hidden="true" aria-label="Edit Card"></i><span class="sr-only">Edit Card</span>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                        <img class="w-10 me-3 mb-0" src="assets/img/logos/visa.png" alt="logo">
                        <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;5248</h6>
                        <i class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" aria-hidden="true" aria-label="Edit Card"></i><span class="sr-only">Edit Card</span>
                      </div>
                    </div>
                  </div>

                <form method="post">
                    <Button type="submit" name="checkout" class="btn btn-primary btn-lg d-block" style="width: 100%;">Pembayaran Selesai</Button>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Invoices</h6>
                </div>
                <div class="col-6 text-end">
                  <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                </div>
              </div>
            </div>
            <div class="card-body p-3 pb-0">
              <ul class="list-group">

                                    <?php $nomor=1; ?>
                                    <?php $totalbelanja = 0; ?>
                                    <?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah):?>
                                    <!-- Menampilkan yang sedang di perulangkan berdasarkan id produk -->
                                    <?php
                                    $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                                    $pecah = $ambil->fetch_assoc();
                                    $subharga = $pecah ["harga_produk"]*$jumlah;?>

                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">Tiket Wisata <?php echo $pecah['nama_produk'];?></h6>
                    <span class="text-xs">Jumlah : <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $jumlah; ?></span>
                  </div>
                  <div class="d-flex align-items-center text-sm">
                    Rp. <?php echo number_format($subharga); ?></span></span>
                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1" aria-hidden="true"></i> PDF</button>
                  </div>
                </li>

                                        <?php $nomor++; ?>
                                        <?php $totalbelanja+=$subharga; ?>
                                        <?php endforeach ?>
            <?php
            if(isset($_POST["checkout"]))
                {
                    $id_pelanggan = $_SESSION["pelanggan"]["id_pelanggan"];
                    $tanggal_pembelian = date("Y-m-d");

                    $total_pembelian = $totalbelanja + $tarif;
                    $koneksi->query("INSERT INTO pembelian (id_pelanggan,tanggal_pembelian,total_pembelian) VALUES ('$id_pelanggan','$tanggal_pembelian','$total_pembelian')");

                    $id_pembelian_barusan = $koneksi->insert_id;
                    foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) 
                    {

                        $ambilprdk=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                        $perproduk = $ambilprdk->fetch_assoc();
                        $nama=$perproduk['nama_produk'];
                        $harga=$perproduk['harga_produk'];

                        $subharga = $perproduk['harga_produk']*$jumlah;

                        $koneksi->query("INSERT INTO pembelian_produk (id_pembelian,id_produk,jumlah,nama,harga,subharga) VALUES ('$id_pembelian_barusan','$id_produk','$jumlah','$nama','$harga','$subharga')");
                    }
                    unset($_SESSION["keranjang"]);
                    echo "<script>alert('pembelian sukses');</script>";
                    echo "<script>location = 'index.php?halaman=detail&id=$id_pembelian_barusan';</script>"; 
                    
                }
                ?>
              </ul>
                            <input class="form-control text-center mt-2" type="text" placeholder="Total Pembayaran Rp. <?php echo number_format($totalbelanja) ?>" readonly></div>

            </div>
          </div>
        </div>
      </div>

