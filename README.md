# Punggawa Web
Merupakan sebuah website dari organisasi punggawa IT Telkom Surabaya

## Contributor Rules
- Mengikuti penulisan template yang telah dibuat
- Sertakan comment di setiap section contohnya seperti di bawah ini
```php
{{-- Header start --}} // ini adalah comment di laravel
        <h1 class="text-3xl text-red-900 font-bold underline">
            Hello world!
        </h1>
{{-- Header end --}}
```
- Pesan commit harus jelas, contoh aturan penulisan commit:
  * **build** : Perubahan yang memengaruhi sistem build atau dependensi eksternal (contoh cakupan: gulp, brokoli, npm)
  * **ci** : Perubahan pada file dan skrip konfigurasi CI kami (contoh cakupan: Circle, BrowserStack, SauceLabs)
  * **docs** : Perubahan documentasi
  * **feat** : Membuat fitur baru
  * **fix** : Memperbaiki bug
  * **perf** : Perubahan kode yang meningkatkan kinerja
  * **refactor** : Perubahan kode yang tidak memperbaiki bug atau menambahkan fitur
  * **style** : Perubahan yang tidak mempengaruhi arti kode (spasi putih, format, titik koma hilang, dll)
  * **tes** : Menambahkan tes yang hilang atau memperbaiki tes yang ada
- Sebelum melakukan push, wajib membuat branch baru sesuai dengan fitur yang di kerjakan contohnya `feature/login` dan dilarang push ke branch `main`
- Sebelum melakukan push, wajib melakukan pull terlebih dahulu ke branch `main` dan merge ke branch yang telah di buat, lalu pull request


## Instalation
Clone Repository
```sh
git clone git@github.com:alirfanyasin/Punggawa-Web.git
```
Tulis perintah dibawah in untuk menginstal depedensi yang di perlukan 
```sh
composer install

npm install
```

Lalu copy file .env 
```sh
cp .env.example .env
```

Setelah itu lakukan generate key
```sh
php artisan key:generate
```

## Running Project
```sh
php artisan serve    

npm run dev
```
## Symblink Route
```sh
// Symblink
Route::get('symblink', function () {
  $targetFolder = base_path() . '/storage/app/public';
  $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
  symlink($targetFolder, $linkFolder);
});
```


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
