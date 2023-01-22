
<?php $ambil = $koneksi->query("SELECT * FROM produk ORDER BY RAND()"); ?>

    <div class="container-fluid py-4">

      <div class="row">

<section class="splide" aria-label="Splide Basic HTML Example">
  <div class="splide__track" style="border-radius: 15px;">
    <ul class="splide__list">
<?php while($caur1 = $ambil->fetch_assoc()){ ?>
      <li class="splide__slide"><img class="cropden" src="data_img/<?php echo $caur1['foto_produk'];?>"></li>
<?php }?>
    </ul>
  </div>
</section>

      </div>



      <div class="row mt-4">

<?php $ambil = $koneksi->query("SELECT * FROM produk ORDER BY RAND()"); ?>
<?php while($perproduk = $ambil->fetch_assoc()){ ?>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
<form method="post">
            <img alt="Image placeholder" class="card-img-top mb-2" src="data_img/<?php echo $perproduk['foto_produk'];?>">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold"><?php echo $perproduk['nama_produk'];?></p>
                    <h5 class="font-weight-bolder">
                      Rp. <?php echo number_format($perproduk['harga_produk']);?>
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">10%</span>
                      Diskon
                    </p>
                  </div>
                </div>
              <div class="col-4 text-end">
                  <a href="index.php?halaman=tambah_kekeranjang&id=<?php echo $perproduk['id_produk'];?>" class="icon icon-shape bg-gradient-warning shadow-warning text-center">
                    <i class="ni ni-cart text-lg opacity-10"></i>
                  </a>
                </div>
              </div>

<div class="d-flex justify-content-between mt-2">
                <button type="button" class="btn btn-sm btn-success float-right mb-0 d-block" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $perproduk['id_produk'];?>" style="font-size: 14px;">
                  Informasi
                </button>

                <a href="index.php?halaman=tambah_kekeranjang&id=<?php echo $perproduk['id_produk'];?>" name="checkout" class="btn btn-sm btn-primary mb-0 d-block" style="font-size: 14px;">Beli Tiket</a>
</div>
</form>
            </div>
          </div>
        </div>
<?php }?>

                    <?php if (isset($_POST["keranjang"])) {
                      $jmlkrj = $_POST["jumlah"];
                      $_SESSION["keranjang"] [$id_produk] = $jmlkrj;
                      echo "<script>alert('Produk telah masuk ke keranjang belanja');</script>";
                      echo "<script>location = 'index.php?halaman=keranjang';</script>";

                    }elseif (isset($_POST["checkout"])) {
                      $jmlchk = $_POST["jumlah"];
                      $_SESSION["checkout"] [$id_produk] = $jmlchk;
                      echo "<script>location = 'index.php?halaman=keranjang';</script>";
                    } ?>

      </div>
      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">Jumlah Pengunjung</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-arrow-up text-success"></i>
                <span class="font-weight-bold">9% naik</span> di 2021
              </p>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card card-carousel overflow-hidden h-100 p-0">
            <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
              <div class="carousel-inner border-radius-lg h-100">

<?php $ambil = $koneksi->query("SELECT * FROM produk ORDER BY RAND()"); ?>
<?php while($caur2 = $ambil->fetch_assoc()){ ?>
                <div class="carousel-item h-100 active" style="background-image: url('data_img/<?php echo $caur2['foto_produk'];?>');index.php?halaman=tambah_kekeranjang&id=<?php echo $perproduk['id_produk'];?>
      background-size: cover;">
                  <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                    <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                      <i class="ni ni-camera-compact text-dark opacity-10"></i>
                    </div>

                    <h5 class="text-white mb-1"><?php echo $ddlm['nama_produk'];?></h5>
                    <p><?php echo $ddlm['deskripsi_produk'];?></p>

                  </div>
                </div>
<?php }?>

              </div>
              <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>

