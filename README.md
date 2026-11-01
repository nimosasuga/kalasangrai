# Kala Sangrai Coffee Roasters — EXPROSA Website Starter (Sektor 04)

> Micro-Roastery Artisan & Bar Seduh Kopi Nusantara di Kebayoran Baru, Jakarta Selatan.  
> Dikembangkan berbasis arsitektur **EXPROSA Laravel Starter** dengan desain editorial bergaya BrewLab, adaptive motion physics, dan sistem pemesanan langsung terintegrasi WhatsApp.

---

## ☕ Fitur Utama & Arsitektur

* **Barista Extraction Suite**:
  * Filter temperatur saji real-time (*Hot Only ♨️*, *Iced / Cold ❄️*, *Pastry Hangat 🥐*).
  * Pencarian instan kata kunci menu & catatan rasa (*instant client-side search*).
  * Modal interaktif kustomisasi sajian (Oat Milk, Extra Shot) dengan live WhatsApp message compiler.
* **Roastery Cupping Radar & Biji Kopi Sangrai**:
  * Katalog Single Origin & Signature Blend dengan tanggal sangrai segar (*roast date*).
  * Visualizer partikel seduh Mahlkönig EK43 (Biji Utuh, Espresso, V60, Cold Brew) dalam rentang mikron.
* **Precision Extraction Dashboard**:
  * Indikator intensitas seduhan beranimasi dinamis (Acidity, Body, Sweetness).
  * Kalkulator harga paket dinamis (200g vs 1kg) dengan tombol pesan langsung WhatsApp.
* **Engineering & Water Chemistry Story**:
  * Visualisasi mekanis mesin sangrai drum ganda Giesen W6A dengan simulasi putaran RPM.
  * Standarisasi air seduh reverse osmosis remineralisasi 140 PPM SCA.
* **Ruang & Suasana Kedai**:
  * Fitur simulasi pencahayaan kedai interaktif (*Siang Alami ☀️* vs *Senja Temaram 🌙*).
  * Galeri foto arsitektur dan meja kerja komunal dengan modal lightbox navigasi keyboard.
* **Wholesale B2B Commercial Calculator**:
  * Range slider kalkulator kebutuhan volume biji kopi bulanan (5kg — 100kg+).
  * Perhitungan diskon berjenjang dan benefit sampel uji coba otomatis.
* **Kontak & Navigasi Multimodal**:
  * Beacon lampu hijau berdenyut *Barista Sedang Menyeduh* real-time.
  * Panduan transit multimodal terintegrasi (Stasiun MRT Blok M, Busway, Area Parkir).

---

## 🛠️ Tech Stack

* **Backend**: Laravel 12.x (Target PHP 8.4)
* **Frontend**: Laravel Blade, Tailwind CSS v4, Alpine.js v3
* **Icons**: Lucide Icons
* **Motion & Physics**: GSAP ScrollTrigger, Lenis Smooth Scroll, Canvas Aroma Particles
* **Database**: MySQL 8.x
* **Security**: Anti-bot honeypot, input sanitization, non-public environment isolation

---

## 🚀 Panduan Instalasi Lokal

### 1. Clone Repositori
```bash
git clone https://github.com/nimosasuga/kalasangrai.git
cd kalasangrai
```

### 2. Instalasi Dependensi PHP & JavaScript
```bash
composer install
npm install
```

### 3. Konfigurasi Lingkungan (.env)
```bash
cp .env.example .env
php artisan key:generate
```

Sesuaikan kredensial database di file `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=exprosa_coffeeshop_demo
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Migrasi & Seeder Database
```bash
php artisan migrate --seed --class=CoffeeShopSeeder
```

### 5. Kompilasi Aset Frontend
```bash
# Mode development (live reload)
npm run dev

# Mode production build
npm run build
```

### 6. Jalankan Server Lokal
```bash
php artisan serve
```
Buka browser pada: `http://127.0.0.1:8000`

---

## 🧪 Pengujian Unit & Fitur

Jalankan rangkaian tes otomatis PHPUnit (13 tes, 54 assertions):
```bash
php vendor/bin/phpunit
```

---

## 📄 Lisensi & Hak Cipta

© 2026 Kala Sangrai Coffee Roasters. Bagian dari ekosistem EXPROSA Web Starter Kit.
