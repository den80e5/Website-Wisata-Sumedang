<?php
session_start();
if(isset($_SESSION['admin']))
{
      echo "<div class='alert alert-info'>Sudah Login Sebagai Admin</div>";
      echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=main_admin'>";
}
?>

 <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0">

                          <input type="text" class="form-control form-control-sm text-center mb-2" placeholder="Akun Demo :" readonly="">
                          <textarea class="form-control mb-2 text-center" readonly="">
Username : kelo-sm
Password : 123456</textarea>
            </div>
            <div class="card-body">
                  <form method="post">
                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" placeholder="Masukan Username" aria-label="Username" name="user" required="">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" placeholder="Masukan Kata Sandi" aria-label="Password" name="pass" required="">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" name="login" class="btn btn-lg btn-success btn-lg w-100 mt-4 mb-0">Sign in</button>
                    </div>
                  </form>

              <?php
              if(isset($_POST['login']))
              {
                $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' AND password ='$_POST[pass]'");
                $yangcocok = $ambil->num_rows;
                if ($yangcocok==1)
                {
                  $_SESSION['admin']=$ambil->fetch_assoc();
                  echo "<div class='alert alert-info'>Login Sukses</div>";
                  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=main_admin'>";
                }
                else
                {
                  echo "<div class='alert alert-danger'>Login Gagal</div>";
                  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=login_admin'>";
                }  
                
              }    
              ?>

                </div>
          </div>