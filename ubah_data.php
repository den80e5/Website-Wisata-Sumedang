 <?php
$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah=$ambil->fetch_assoc();
?> 

 <div class="container-fluid py-4">
        <div class="card">

  <div class="card card-body">
   
<form method="post" enctype="multipart/form-data">
  <div class="input-group mb-3">
    <span class="input-group-text">Nama Wisata</span>
    <input type="text" class="form-control" aria-label="Nama Wisata" name="nama" value="<?php echo $pecah['nama_produk'];?>">
  </div>

  <div class="input-group mb-3">
    <select class="form-select" size="3" aria-label="size 3 select example" name="kategori">
      <option selected><?php echo $pecah['kategori'];?></option>
      <option value="Wisata Alam">Wisata Alam</option>
      <option value="Wisata Air">Wisata Air</option>
      <option value="Kuliner">Kuliner</option>
      <option value="Budaya">Budaya</option>
    </select>
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">Harga Tiket</span>
    <input type="text" class="form-control" aria-label="Harga Tiket" name="harga" value="<?php echo $pecah['harga_produk'];?>">
  </div>

  <div class="input-group mb-3">
    <img src="data_img/<?php echo $pecah['foto_produk']?>" style="width: 100%; height: 332px; object-fit: contain;">
    <input type="file" class="form-control" id="inputGroupFile02" aria-label="Ganti Image" name="foto">
    <label class="input-group-text" for="inputGroupFile02">Ganti Image</label>
  </div>

  <div class="input-group mb-3">
    <span class="input-group-text">Informasi</span>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="informasi" rows="10"><?php echo $pecah['deskripsi_produk']; ?></textarea>
  </div>
  <a href="index.php?halaman=main_admin" class="btn btn-primary btn-sm float-start">Kembali</a>
  <button class="btn btn-primary btn-sm float-end" name="save">Simpan Data</button>
</form>
<?php
        if (isset($_POST['ubah']))
        
        {
            $namafoto=$_FILES ['foto']['name'];
            $lokasifoto=$_FILES ['foto'] ['tmp_name'];
            //Jika foto dirubah

            if (!empty($lokasifoto))
            {
                move_uploaded_file($lokasifoto, "data_img/$namafoto");

                $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',foto_produk='$namafoto',deskripsi_produk='$_POST[deskripsi]',kategori='$_POST[kategori]' WHERE id_produk='$_GET[id]'"); 
            }

            else
            {
                $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]',harga_produk='$_POST[harga]',deskripsi_produk='$_POST[deskripsi]',kategori='$_POST[kategori]' WHERE id_produk='$_GET[id]'"); 
            }
                echo "<script>alert('Data produk telah diubah');</script>";
                echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=main_admin'>";

}
?>
  </div>


                </div>
          </div>