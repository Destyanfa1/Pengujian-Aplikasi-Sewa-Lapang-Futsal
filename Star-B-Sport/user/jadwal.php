<?php
session_start();
require "../functions.php";
require "../session.php";
if ($role !== 'User') {
  header("location:../login.php");
};

$id_user = $_SESSION["id_user"];
$id_lpg = $_GET["id"];

$sewa = query("SELECT sewa_212279.*, lapangan_212279.212279_nama, user_212279.212279_nama_lengkap
FROM sewa_212279
JOIN lapangan_212279 ON sewa_212279.212279_id_lapangan = lapangan_212279.212279_id_lapangan
LEFT JOIN user_212279 ON sewa_212279.212279_id_user = user_212279.212279_id_user
WHERE lapangan_212279.212279_id_lapangan = '$id_lpg'
");
$profil = query("SELECT * FROM user_212279 WHERE 212279_id_user = '$id_user'")[0];


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jadwal Lapangan</title>
  <link rel="stylesheet" href="../style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://kit.fontawesome.com/4592f70558.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Navbar -->
  <div class="container ">
    <nav class="navbar fixed-top bg-body-secondary navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../logo.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item ">
              <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="lapangan.php">Lapangan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="bayar.php">Pembayaran</a>
            </li>
          </ul>
          <?php
          if (isset($_SESSION['id_user'])) {
            // jika user telah login, tampilkan tombol profil dan sembunyikan tombol login
            echo '<a href="" data-bs-toggle="modal" data-bs-target="#profilModal" class="btn btn-inti"><i data-feather="user"></i></a>';
          } else {
            // jika user belum login, tampilkan tombol login dan sembunyikan tombol profil
            echo '<a href="login.php" class="btn btn-inti" type="submit">Login</a>';
          }
          ?>
        </div>
      </div>
    </nav>
  </div>
  <!-- End Navbar -->
  <!-- Modal Profil -->
  <div class="modal fade" id="profilModal" tabindex="-1" aria-labelledby="profilModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="profilModalLabel">Profil Pengguna</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-4 my-5">
                <img src="../img/<?= $profil["212279_foto"]; ?>" alt="Foto Profil" class="img-fluid ">
              </div>
              <div class="col-8">
                <h5 class="mb-3"><?= $profil["212279_nama_lengkap"]; ?></h5>
                <p><?= $profil["212279_jenis_kelamin"]; ?></p>
                <p><?= $profil["212279_email"]; ?></p>
                <p><?= $profil["212279_no_handphone"]; ?></p>
                <p><?= $profil["212279_alamat"]; ?></p>
                <a href="../logout.php" class="btn btn-danger">Logout</a>
                <a href="" data-bs-toggle="modal" data-bs-target="#editProfilModal" class="btn btn-inti">Edit Profil</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal Profil -->

  <!-- Edit profil -->
  <div class="modal fade" id="editProfilModal" tabindex="-1" aria-labelledby="editProfilModalLabel" aria-hidden="true">
    <div class="modal-dialog edit modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editProfilModalLabel">Edit Profil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="fotoLama" class="form-control" id="exampleInputPassword1" value="<?= $profil["212279_foto"]; ?>">
          <div class="modal-body">
            <div class="row justify-content-center align-items-center">
              <div class="mb-3">
                <img src="../img/<?= $profil["212279_foto"]; ?>" alt="Foto Profil" class="img-fluid ">
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" class="form-control" id="exampleInputPassword1" value="<?= $profil["212279_nama_lengkap"]; ?>">
                </div>
                <div class="mb-3">
                  <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                  <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki" <?php if ($profil['212279_jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                    <option value="Perempuan" <?php if ($profil['212279_jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">No Telp</label>
                  <input type="number" name="hp" class="form-control" id="exampleInputPassword1" value="<?= $profil["212279_no_handphone"]; ?>">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="<?= $profil["212279_email"]; ?>">
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" value="<?= $profil["212279_alamat"]; ?>">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Foto : </label>
                <input type="file" name="foto" class="form-control" id="exampleInputPassword1">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-inti" name="simpan" id="simpan">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Edit Profil -->

  <section class="lapangan mb-5" id="lapangan">
    <div class="container-fluid">
      <h2 class="text-head"><span>Jadwal</span> Lapangan </h2>
      <form action="" method="post" class="px-4">
        <table class="table my-5">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tanggal Pesan</th>
              <th scope="col">Nama Pemesan</th>
              <th scope="col">Nama Lapangan</th>
              <th scope="col">Jam Main</th>
              <th scope="col">Lama Sewa</th>
              <th scope="col">jam Habis</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($sewa as $row) : ?>
              <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $row["212279_tanggal_pesan"] ?></td>
                <td><?= $row["212279_nama_lengkap"] ?></td>
                <td><?= $row["212279_nama"] ?></td>
                <td><?= $row["212279_jam_mulai"] ?></td>
                <td><?= $row["212279_lama_sewa"] ?></td>
                <td><?= $row["212279_jam_habis"] ?></td>
                <!-- Modal Bayar -->
                <div class="modal fade" id="bayarModal<?= $row["212279_id_sewa"] ?>" tabindex="-1" role="dialog" aria-labelledby="bayarModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Bayar Lapangan <?= $row["212279_nama"]; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="" method="post">
                        <input type="hidden" name="idsewa" value="<?= $row["212279_id_sewa"]; ?>">
                        <div class="modal-body">
                          <!-- konten form modal -->
                          <div class="row justify-content-center align-items-center">
                            <div class="col">
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jam Main</label>
                                <input type="datetime-local" name="tgl_main" class="form-control" id="exampleInputPassword1" value="<?= $row["212279_jam_mulai"]; ?>" disabled>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jam Habis</label>
                                <input type="datetime-local" name="jam_habis" class="form-control" id="exampleInputPassword1" value="<?= $row["212279_jam_habis"]; ?>" disabled>
                              </div>
                            </div>
                            <div class="col">
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Lama Main</label>
                                <input type="number" name="jam_mulai" class="form-control" id="exampleInputPassword1" value="<?= $row["212279_lama"]; ?>" disabled>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Harga</label>
                                <input type="number" name="harga" class="form-control" id="exampleInputPassword1" value="<?= $row["212279_harga"]; ?>" disabled>
                              </div>
                            </div>
                            <div class="input-group ">
                              <div class="input-group-prepend border border-danger">
                                <span class="input-group-text">Total</span>
                              </div>
                              <input type="number" name="total" class="form-control border border-danger" id="exampleInputPassword1" value="<?= $row["212279_total"]; ?>" disabled>
                            </div>
                            <div class="mt-3">
                              <label for="exampleInputPassword1" class="form-label">Upload Bukti</label>
                              <input type="file" name="bukti" class="form-control" id="exampleInputPassword1">
                            </div>
                          </div>
                        </div>
                        <div class="mt-3 mx-3">
                          <h6 class=" text-center border border-danger">Status : Belum Bayar</h6>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-inti" name="bayar" id="bayar">Bayar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- End Modal Bayar -->

                <!-- Modal Detail -->
                <div class="modal fade" id="detailModal<?= $row["212279_id_sewa"] ?>" tabindex="-1" role="dialog" aria-labelledby="bayarModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Detail Pembayaran Lapangan <?= $row["212279_nama"]; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="" method="post">
                        <div class="modal-body">
                          <!-- konten form modal -->
                          <div class="row justify-content-center align-items-center">
                            <div class="col">
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jam Main</label>
                                <input type="datetime-local" name="tgl_main" class="form-control" id="exampleInputPassword1" value="<?= $row["212279_jam_mulai"]; ?>" disabled>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jam Habis</label>
                                <input type="datetime-local" name="jam_habis" class="form-control" id="exampleInputPassword1" value="<?= $row["212279_jam_habis"]; ?>" disabled>
                              </div>
                            </div>
                            <div class="col">
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Lama Main</label>
                                <input type="number" name="jam_mulai" class="form-control" id="exampleInputPassword1" value="<?= $row["212279_lama_sewa"]; ?>" disabled>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Harga</label>
                                <input type="number" name="harga" class="form-control" id="exampleInputPassword1" value="<?= $row["212279_harga"]; ?>" disabled>
                              </div>
                            </div>
                            <div class="input-group ">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Total</span>
                              </div>
                              <input type="number" name="total" class="form-control " id="exampleInputPassword1" value="<?= $row["212279_total"]; ?>" disabled>
                            </div>
                            <div class="mt-3">
                              <label for="exampleInputPassword1" class="form-label">Upload Bukti</label>
                              <input type="file" name="bukti" class="form-control" id="exampleInputPassword1">
                            </div>
                          </div>
                        </div>
                        <div class="mt-3 mx-3">
                          <h6 class="text-center border border-danger">Status : <?= $row["212279_konfirmasi"]; ?></h6>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- End Modal Detail -->

                <!-- Modal Hapus -->
                <div class="modal fade" id="hapusModal<?= $row["212279_id_sewa"]; ?>" tabindex="-1" aria-labelledby="profilModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus Data</h5>
                      </div>
                      <div class="modal-body">
                        <p>Anda yakin ingin menghapus data ini?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <a href="./controller/hapus.php?id=<?= $row["212279_id_sewa"] ?>" class="btn btn-danger">Hapus</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Modal Hapus -->

                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </form>
    </div>
  </section>

  <!-- footer -->
  <footer class="fixed-bottom py-3 mt-5">
    <div class="social">
      <a href=" https://www.instagram.com/destyan_fa/"><i class="fa-brands fa-instagram fa-xl"></i></a>
      <a href="https://www.facebook.com/profile.php?id=61553165546851"><i class="fa-brands fa-facebook fa-xl"></i></a>
      <a href="https://wa.me/6281222187586"><i class="fa-brands fa-whatsapp fa-xl"></i></i></a>
    </div>

    <div class="credit">
      <p>Created by <a href="#">Starboy NPC</a> &copy; 2024</p>
    </div>
  </footer>
  <!-- End Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>