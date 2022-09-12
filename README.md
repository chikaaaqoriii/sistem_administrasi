<h1>Sistem Administrasi Skripsi Prodi Sistem Informasi UNIB</h1>

<h3>Cara Instal Program</h3>
<hr>
<ol>
    <li>Download Repositori Terlebih Dahulu atau Menjalankan Command git clone link_project melalui CMD atau Terminal</li>
    <li>Ekstrak Folder Hasil Download Project</li>
    <li>Masuk ke Folder Hasil Ektrak menggunakan CMD atau Terminal</li>
    <li>Jalankan Perintah composer install, Tapi Sebelumnya Harus Menginstal XAMPP atau sejenisnya dan Composer Terlebih Dahulu</li>
    <li>Jalankan Perintah <i>php artisan migrate:fresh --seed</i> melalui cmd tadi</li>
    <li>Jalankan Perintah <i>php artisan storage:link</i> melalui cmd tadi</li>
    <li>Jalankan Perintah <i>php artisan key:generate</i> melalui cmd tadi</li>
    <li>Jalankan Perintah <i>php artisan serve</i> melalui cmd tadi</li>
</ol>
