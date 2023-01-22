 <?php
session_start();
if(!isset($_SESSION["admin"]))
{
    echo "<script>location = 'index.php';</script>"; 
}
?>


 <div class="container-fluid py-4">
<div class="card">
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">Data Pelanggan</h6>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">

<?php $ambil=$koneksi->query("SELECT * FROM pelanggan"); ?>
<?php while ($tmplplg = $ambil->fetch_assoc()){ ?>
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm"><?php echo $tmplplg['nama_pelanggan'];?></h6>
                    <span class="mb-2 text-xs">Alamat: <span class="text-dark font-weight-bold ms-sm-2"><?php echo $tmplplg['alamt_pelanggan'];?></span></span>
                    <span class="mb-2 text-xs">Email Address: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $tmplplg['email_pelanggan'];?></span></span>
                    <span class="mb-2 text-xs"> Telepon: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $tmplplg['telepon_pelanggan'];?></span></span>
                  </div>
                  <div class="ms-auto text-end">
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="index.php?halaman=hapus_pelanggan&id=<?php echo $tmplplg['id_pelanggan']; ?>"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>Delete</a>
                  </div>
                </li>
<?php } ?>
              </ul>
            </div>
          </div>