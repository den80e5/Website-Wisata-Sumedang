<?php session_start()?>
 <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0">

<ul class="nav nav-pills nav-justified mb-3" id="ex1">
  <li class="nav-item">
    <a class="nav-link" href="index.php?halaman=login" style="background: #eaebec;">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?halaman=register" style="background-color: #7ba7e2 !important; color: #f8f9fa;">Register</a>
  </li>
</ul>
            </div>
            <div class="card-body">
                        <form method="post">
                          <div class="mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder="Nama Lengkap" aria-label="Username" name="nama" required="">
                          </div>
                          <div class="mb-3">
                            <input type="email" class="form-control form-control-lg" placeholder="Email Anda" aria-label="Email" name="email" required="">
                          </div>
                          <div class="mb-3">
                            <input type="password" class="form-control form-control-lg" placeholder="Kata Sandi" aria-label="Password" name="password" required="">
                          </div>
                          <div class="mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder="Alamat Lengkap" aria-label="Alamat" name="alamat" required="">
                          </div>
                          <div class="mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder="No Telp/Hp" aria-label="Telepon" name="telepon" required="">
                          </div>
                          <div class="text-center">
                            <button type="submit" name="daftar" class="btn btn-lg btn-success btn-lg w-100 mt-4 mb-0">Register</button>
                          </div>
                        </form>

              <?php
              if(isset($_POST["daftar"]))
              {

                $nama = $_POST["nama"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $alamat = $_POST["alamat"];
                $telepon = $_POST["telepon"];

                $ambil = $koneksi->query("SELECT * FROM pelanggan 
                  WHERE email_pelanggan='$email'");
                $yangcocok = $ambil->num_rows;
                if ($yangcocok==1)
                {
                  echo "<script>alert('Pendaftaran gagal, email sudah digunakan');</script>";
                  echo "<script>location = 'index.php?halaman=register';</script>"; 
                  
                }
                else
                {
                  $koneksi->query("INSERT INTO pelanggan(email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan,alamt_pelanggan) VALUES ('$email','$password','$nama','$telepon','$alamat') ");
                  echo "<script>alert('Pendaftaran sukses, silahkan login');</script>";
                  echo "<script>location = 'index.php?halaman=login';</script>"; 

                }
              }
              ?>
                        
                </div>
          </div>