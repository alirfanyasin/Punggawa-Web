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


# Usage
Lakukan clone pada repository ini dengan menulis perintah 
```sh
git clone git@github.com:alirfanyasin/Punggawa-Web.git
```


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
