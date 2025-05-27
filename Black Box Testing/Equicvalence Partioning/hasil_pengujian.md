  Tabel Equivalen (Equivalence Partitioning) merupakan tampilkan salah satu teknik dalam pengujian black box untuk memvalidasi input berdasarkan pembagian kelas yang mewakili kemungkinan nilai input.
| **Test Case** | **Deskripsi** | **Hasil Diharapkan** |
|---------------|-------------------------------|----------------------------|
| TC1 | Mengisi semua field registrasi | Data dapat disimpan |
| TC2 | Tidak mengisi salah satu field | System akan memberikan informasi harus diisi yang kosongnya |
| TC3 | Mengupload foto data diri dengan ukuran yang besar | System tidak akan menerima |
| TC4 | Mengisi field nomor telepon dengan huruf | System memerintahkan untuk menggunakan angka |

Tujuan Pengujian
TC1: Menguji bahwa sistem bekerja normal saat semua data registrasi diisi dengan benar.

TC2: Menguji validasi required field — sistem harus memberi tahu jika ada kolom kosong.

TC3: Menguji pembatasan ukuran file upload — sistem tidak boleh menerima file terlalu besar.

TC4: Menguji validasi input numerik — sistem harus mendeteksi jika user mengisi huruf di kolom yang seharusnya angka (misalnya nomor telepon).
