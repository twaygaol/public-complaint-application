## PENGKAT - Pengaduan Masyarakat

# About

sistem ini merupakan sistem yang di rancang untuk pelaporan pengaduan yang di lakukan oleh masyarkat desa laut tador kecamatan laut tador kabupaten batu bara

## Fiture

Beberapa fitur di project ini :

- Login & Register (**DONE**).
- Buat pengaduan (**DONE**).
- Balasan pengaduan (**DONE**). 
- Atikel (**DONE**). 
- Hak akses User, admin , petugas & Pimpinan (**DONE**).

## Technology

- PHP 8.2
  Bahasa pemrograman yang digunakan
- [Laravel v10](https://laravel.com/docs/10.x)
  Base framework yang digunakan untuk membangun projek ini.
- [TailwindCSS v3](https://tailwindcss.com/)
  Framework css yang digunakan untuk mendesain projek ini.

  
### Manual Installation

Jalankan perintah ini di terminal

```bash
# copy env file
cp .env.example .env
composer install 
# install dependency js 
npm install
# jalankan migrasi dan seeder
php artisan migrate:refresh --seed
# generate key generate
php artisan key:generate
```

dan pada terminal lain jalankan

```bash
php artisan serve
```


## Access

Home page dapat diakses pada :

- Manual Installation : [http://localhost:8000](http://localhost:8000)

Admin panel dapat diakses pada : 

- Manual Installation : [http://localhost:8000/admin](http://localhost:8000/admin)

## LIcenci 

MIT Licenci (https://github.com/twaygaol)

