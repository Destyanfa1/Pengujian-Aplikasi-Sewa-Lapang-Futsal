Pengujian desk checking pada tabel adalah verifikasi manual perhitungan Output Total Harga (InputHarga×InputDurasi). Semua langkah "Passed" karena hasil perhitungan sesuai, kecuali langkah 4 yang "Failed", kemungkinan karena aturan bisnis tidak mengizinkan durasi nol, meskipun perhitungan matematisnya benar.

| Step | Input Harga (per jam) | Input Durasi (jam) | Proses           | Output Total Harga | Hasil          |
|------|------------------------|---------------------|------------------|---------------------|------------     |
| 1    | 100000                | 2                   | 100000 x 2       | 200000              | Passed           |
| 2    | 75000                 | 3                   | 75000 x 3        | 225000              | Passed           |
| 3    | 50000                 | 1                   | 50000 x 1        | 50000               | Passed           |
| 4    | 120000                | 0                   | 120000 x 0       | 0                   | Failed           |
