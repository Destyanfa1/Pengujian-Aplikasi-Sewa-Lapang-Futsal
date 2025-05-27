Model Loop Testing :
Loop Testing adalah teknik pengujian yang fokus pada pemeriksaan dan identifikasi error yang berkaitan dengan proses perulangan (loop) dalam program. Loop digunakan untuk mengeksekusi blok kode tertentu beberapa kali. Kesalahan dapat terjadi jika perulangan tidak diimplementasikan dengan benar, seperti tidak berhenti, hanya berjalan sebagian, atau gagal menangani kondisi kosong.

| **Kasus Uji** | **Deskripsi**                                        | **Ekspektasi Output**                                                                                   |
| ------------- | ---------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| Kasus Uji 1   | Query tidak mengembalikan baris (hasil kosong).      | Fungsi `query()` mengembalikan array kosong: <code>\[]</code> tanpa error.                              |
| Kasus Uji 2   | Query mengembalikan satu baris data.                 | Loop berjalan satu kali, `query()` mengembalikan array dengan satu elemen (1 record).                   |
| Kasus Uji 3   | Query mengembalikan banyak baris (n baris).          | Loop berjalan sebanyak jumlah baris, seluruh data dimasukkan ke array, dan dikembalikan dengan lengkap. |
| Kasus Uji 4   | Query mengembalikan data besar (misal > 1000 baris). | Loop tetap stabil, tidak menimbulkan error memori atau kinerja, seluruh data dikembalikan dengan benar. |

