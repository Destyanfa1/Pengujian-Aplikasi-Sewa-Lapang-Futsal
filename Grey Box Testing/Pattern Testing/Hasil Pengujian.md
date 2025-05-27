## Test Case Fitur Dasar – Pemesanan

## 1. Menguji Fungsionalitas Dasar
| **Test Case** | **Fitur Dasar** | **Deskripsi**                | **Dokumentasi**         |
|---------------|------------------|-------------------------------|--------------------------|
| E01           | Pemesanan        | User memesan sewa lapangan   | ![Pattern 1](pattern_1_1.png) |

## Hasil Uji Fitur Pemesanan

| **Hasil Uji**                                         | **Checklist** | **Deskripsi**                                            | **Dokumentasi**                                  |
|--------------------------------------------------------|----------------|-----------------------------------------------------------|--------------------------------------------------|
| UI ditampilkan dengan benar                            | ✅              | UI ditampilkan sesuai dengan fitur pemesanan              | ![Pattern 2](pattern_1_2.png)                   |
| Mencoba melakukan pemesanan                            | ✅              | Fungsional fitur pesan berjalan dengan baik               | ![Pattern 3](pattern_1_3.png) ![Pattern 4](pattern_1_4.png) |
| Melihat pesanan apakah sudah terjadi                   | ✅              | Pesanan bisa dilihat di bagian pembayaran                 | ![Pattern 5](pattern_1_5.png)                   |
| Mencoba mengedit pemesanan                             | ❌              | Tidak tersedia fitur edit pesanan                         | -                                                |
| Melihat pembaruan pesanan apakah sudah terjadi         | ❌              | Tidak tersedia fitur edit pesanan                         | -                                                |
| Mencoba menghapus pemesanan                            | ✅              | Pesanan bisa dihapus                                      | ![Pattern 6](pattern_1_6.png)                   |
| Melihat penghapusan pesanan apakah sudah terjadi       | ✅              | Pesanan sudah tidak ada lagi di bagian pembayaran         | ![Pattern 7](pattern_1_7.png)                   |

> **Catatan:**  
> Fitur edit pesanan **belum tersedia** sehingga semua skenario terkait pembaruan tidak dapat diuji dan ditandai sebagai **tidak berhasil (❌)**. Penghapusan dan pemesanan berjalan **sesuai ekspektasi**.
