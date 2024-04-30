### **Panduan Instalasi**

- Buka terminal atau command line, kemudian arahkan ke folder ***pretest-one***
- Jalankan perintah:
  ```
  composer install
  ```
- Langkah selanjutnya, jalankan perintah:
  ```
  php -r "copy('.env.example', '.env');";
  ```
- Kemudian, jalankan perintah:
  ```
  php artisan key:generate
  ```
- Buat database dengan nama ***pretest-one***
- Kemudian, buka aplikasi untuk menjalankan SQL seperti (HeidiSQL/phpmyadmin)
- Import SQL dengan cara buka folder SQL pada folder project. 
- Langkah selanjutnya, sesuaikan parameter pada file **.env**, seperti berikut:
  ```
  APP_URL=http://localhost

  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=pretest-one
  DB_USERNAME=root
  DB_PASSWORD=
  ```
- Selanjutnya, jalankan perintah:
  ```
  php artisan migrate --seed
  ```
- Jalankan perintah berikut untuk compiled assets (development):
  ```
  - npm install
  - npm run dev
  ```
- Buka command line yang baru, jalankan perintah:
  ```
  php artisan serve
  ```
- Buka browser dengan url [http://localhost:8000](http://localhost:8000)
