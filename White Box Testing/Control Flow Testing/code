session_start();
require "functions.php";

// Control Flow: Cek jika user sudah login
if (isset($_SESSION["role"])) {
  $role = $_SESSION["role"];
  if ($role == "Admin") {
    header("Location: admin/home.php");
  } else {
    header("Location: user/lapangan.php");
  }
}

// Control Flow: Jika tombol login ditekan
if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Cek apakah user adalah admin
  $cariadmin = query("SELECT * FROM admin_212279 WHERE 212279_email = '$username' AND 212279_password = '$password'");
  
  // Jika bukan admin, cek apakah user biasa
  $cariuser = query("SELECT * FROM user_212279 WHERE 212279_email = '$username' AND 212279_password = '$password'");

  if ($cariadmin) {
    $_SESSION['username'] = $cariadmin[0]['212279_nama'];
    $_SESSION['role'] = "Admin";
    header("Location: admin/admin.php");
  } else if ($cariuser) {
    $_SESSION['email'] = $cariuser[0]['212279_email'];
    $_SESSION['id_user'] = $cariuser[0]['212279_id_user'];
    $_SESSION['role'] = "User";
    header("Location: user/lapangan.php");
  } else {
    echo "<div class='alert alert-warning'>Username atau Password salah</div>
    <meta http-equiv='refresh' content='2'>";
  }
}
