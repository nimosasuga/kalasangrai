# EXPROSA Workspace Rules & Automated Protocols

## 1. Automated Mode: Caveman Style (Always On)
- **Terse & High Density**: Eliminasi pembuka percakapan, basa-basi, filler ("Baik, saya akan...", "Tentu!"), dan penutup sopan santun.
- **Efisiensi Token**: Gunakan gaya telegrafis, to-the-point, fokus sinyal teknis tertinggi.
- **Proteksi Kode & Sintaks 100%**: JANGAN PERNAH meringkas, memotong, atau mengubah blok kode, query SQL, HTML, Blade template, JSON, command terminal, path file, atau error log. Presisi teknis tetap absolut.

## 2. Automated Protocol: Obsidian Memory (Always On)
- **Sumber Memori Utama**: Selalu rujuk dan sinkronkan progres ke [EXPROSA-OBSIDIAN-MEMORY.md](file:///c:/laragon/www/web-2026-6-sektor/EXPROSA_PRD_SPLIT_v1/EXPROSA-OBSIDIAN-MEMORY.md).
- **Wajib Catat Keputusan**: Setiap kali ada keputusan arsitektur, pemilihan paket sektor, perubahan skema/stack, atau progres teknis selesai, catat ke section `Log Memori & Riwayat Keputusan` di file Obsidian dengan template standar:
  ```markdown
  ## YYYY-MM-DD — Judul Keputusan
  - Status: final | provisional | open
  - Area: product | backend | database | security | deployment | UI | sector
  - Keputusan: [Isi keputusan]
  - Alasan: [Alasan teknis/bisnis]
  - Dampak: [Dampak terhadap file/arsitektur]
  - File/dokumen yang diperbarui: [Path file]
  - Langkah berikutnya: [Action items]
  ```
- **Verifikasi Fisik**: Jangan pernah mengklaim memori tersimpan sebelum file benar-benar ditulis ke disk.

## 3. Aturan Teknis EXPROSA Laravel Starter
- **Stack Inti**: Laravel 12/13 (target PHP 8.4), Blade, Tailwind CSS, Alpine.js / Vanilla JS, Lucide/Tabler Icons.
- **Hosting cPanel Multi-Client**: 1 instalasi Laravel dan 1 database MySQL terpisah per klien. Dilarang arsitektur database bersama / multi-tenant pada tahap awal.
- **Isolasi Keamanan**: Document root hanya mengarah ke folder `public/`. File core Laravel dan file `.env` berada di luar direktori publik.
- **Konfigurasi Identitas**: Data bisnis dibaca dari `.env` via `config/site.php`. Dilarang hard-code di file Blade.
- **Anti-Template Policy**: Setiap website dari 6 sektor (Restaurant, Catering, Bakery, Coffee Shop, Industrial, Automotive) wajib memiliki visual direction, struktur informasi, dan copywriting otentik sesuai industri.

## 4. STRICT UI/UX DESIGN RULES (ANTI-AI SLOP & EDITORIAL HOSPITALITY)

### 4.1 BANNED AI CLICHÉS (DO NOT USE):
- **NO pill badges or status dots above headings**: Dilarang tag `rounded-full` dengan status dot (misal: "• SIGNATURE MASTERPIECE" atau "PROMAX").
- **NO mid-sentence color changes in headings**: H1 dan H2 wajib solid, warna seragam off-white/cream; DILARANG mewarnai kata tengah dengan gradasi emas/oranye.
- **NO generic centered sub-page banners**: DILARANG mengulang pola klise [Orange Eyebrow + Centered H1 + Gray Subtext on dark box] di seluruh halaman.
- **NO SaaS-style card framing for hero images**: DILARANG membungkus foto makanan dengan frame kartu gelap `rounded-2xl` dan border tipis ala template software SaaS.
- **NO glowing radial gradients & floating pill buttons**: DILARANG pendaran cahaya radial di belakang teks/kartu, dan DILARANG tombol filter kategori berbentuk pill melayang.

### 4.2 REQUIRED ARCHITECTURAL DIRECTION (BESPOKE CULINARY / EDITORIAL):
- **Layout**: Gunakan 12-column Swiss/Editorial grid asimetris dengan negative space lega dan pemisah garis rambut tegas (`1px solid rgba(255,255,255,0.08)` / hairline dividers).
- **Hero Section**: Gunakan *full-bleed atmospheric photography* dengan vignette bawah yang subtil dan tipografi editorial rata bawah, ATAU layout *asymmetric split* dengan foto vertikal murni tanpa frame dan tipografi serif berukuran besar (`tracking-tight`, `leading-[0.95]`).
- **Borders & Corners**: Terapkan sudut tajam atau micro-rounded (`rounded-none` atau `rounded-sm` maksimal 2px) pada seluruh tombol, input, dan kontainer gambar untuk menghadirkan kesan menu cetak mewah (*fine print menu*).
- **Navigation & Filters**: Ganti tombol tab pill oranye dengan navigasi teks minimalis yang dipisahkan oleh garis vertikal halus atau indikator garis bawah aktif (`border-b`).
- **Color Restraint**: Ganti warna oranye jenuh teknologi (`#F59E0B` / `#EA580C`) dengan palet warna kuliner mewah terkendali: *muted warm bronze* / *aged brass* (`#C5A059`), *dark espresso* (`#0F0D0B`), dan *warm alabaster* (`#F4F1EA`).
- **Copywriting**: Gunakan bahasa Indonesia kuliner yang membumi, berbasis sensori rasa dan bahan otentik. HAPUS kata-kata jargon teknologi/marketing ("Promax", "3D Stage", "Mahakarya", "Solusi", "Kanal Komunikasi Resmi").
