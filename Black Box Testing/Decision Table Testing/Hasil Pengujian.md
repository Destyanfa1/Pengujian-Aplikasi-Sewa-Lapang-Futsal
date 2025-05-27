## Tabel Pengujian Login – Decision Table Testing

Tabel berikut merupakan pengujian skenario login berdasarkan kondisi masukan dan hasil yang diharapkan:

| **ID** | **Kondisi / Aksi**                                                                 | **TC1** | **TC2** | **TC3** |
|--------|-------------------------------------------------------------------------------------|--------|--------|--------|
| **C1** | Form username dan password **kosong**                                              | T      | F      | F      |
| **C2** | Form username tidak kosong & **akun ditemukan di database**                       | F      | T      | F      |
| **C3** | Form username dan password tidak kosong & **akun tidak ditemukan / salah**        | F      | F      | T      |
| **A1** | **Aksi:** Redirect ke halaman login lagi *(karena error atau input tidak valid)*  | E      |        | E      |
| **A2** | **Aksi:** Login berhasil dan masuk ke sistem                                       |        | E      |        |

**Keterangan:**
- **T**: True (Benar)
- **F**: False (Salah)
- **E**: Expected (Aksi yang diharapkan terjadi)

### Interpretasi:
- **TC1**: Gagal login karena form kosong → redirect ulang ke halaman login.
- **TC2**: Login berhasil karena akun valid dan ditemukan.
- **TC3**: Gagal login karena akun salah atau tidak ditemukan → redirect ulang ke halaman login.
