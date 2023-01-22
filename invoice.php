 <?php
session_start();
if(!isset($_SESSION["admin"]))
{
    echo "<script>location = 'index.php';</script>"; 
}
?>


 <div class="container-fluid py-4">

<div class="card">
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

<?php $ambil=$koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan"); ?>
<?php while ($pecah = $ambil->fetch_assoc()){ ?>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm"><?php echo $pecah['tanggal_pembelian']; ?></h6>
                    <span class="text-xs"><?php echo $pecah['nama_pelanggan']; ?></span>
                  </div>
                  <div class="d-flex align-items-center text-sm">
                    Rp. <?php echo number_format($pecah['total_pembelian']); ?>
                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1" aria-hidden="true"></i> PDF</button>
                  </div>
                </li>

<?php } ?>
              </ul>
            </div>
          </div>