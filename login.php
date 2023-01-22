 <?php
session_start();
if(isset($_SESSION["pelanggan"]))
{
    echo "<script>location = 'index.php';</script>"; 
}
?>

 <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0">
              <ul class="nav nav-pills nav-justified mb-3" id="ex1">
                <li class="nav-item">
                  <a class="nav-link" href="index.php?halaman=login" style="background-color: #868be6 !important; color: #f8f9fa;">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?halaman=register" style="background: #eaebec;">Register</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
                  <form method="post">
                    <div class="mb-3">
                      <input type="email" class="form-control form-control-lg" placeholder="Masukan Email Anda" aria-label="Email" name="email" required="">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" placeholder="Masukan Kata Sandi" aria-label="Password" name="password" required="">
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
              if(isset($_POST["login"]))
              {

                $email = $_POST["email"];
                $password = $_POST["password"];

                $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$password'");

                $akunyangcocok = $ambil->num_rows;

                if($akunyangcocok==1)
                {
                  $akun = $ambil->fetch_assoc();
                  $_SESSION["pelanggan"] = $akun;
                  echo "<div class='alert alert-info'>Login Sukses</div>";
                  echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                }
                else
                {
                  echo "<div class='alert alert-danger'>Login Gagal</div>";
                  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=login'>";
                }
              }
              ?>

                </div>
          </div>