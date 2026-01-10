# My Profile - Portfolio Website

Website portfolio personal yang dibangun menggunakan Phalcon PHP Framework dengan desain modern dan responsif.

## 🚀 Fitur

- **Halaman Beranda** - Tampilan utama dengan informasi singkat
- **Tentang Saya** - Informasi detail tentang profil
- **Resume** - CV dan pengalaman kerja
- **Portfolio** - Showcase proyek-proyek yang telah dikerjakan
- **Layanan** - Daftar layanan yang ditawarkan
- **Kontak** - Form kontak dan informasi komunikasi
- **Desain Responsif** - Optimal di semua perangkat
- **Animasi Modern** - Menggunakan AOS (Animate On Scroll)

## 🛠️ Teknologi

- **Backend**: Phalcon PHP Framework
- **Frontend**: Bootstrap 5, HTML5, CSS3, JavaScript
- **Database**: MySQL
- **Libraries**: 
  - AOS (Animate On Scroll)
  - GLightbox (Image Gallery)
  - Swiper (Slider)
  - Typed.js (Text Animation)
  - Isotope Layout (Portfolio Filter)

## 📋 Persyaratan Sistem

- PHP >= 7.4
- Phalcon Extension >= 4.0
- MySQL >= 5.7
- Web Server (Apache/Nginx)
- Composer (opsional)

## ⚡ Instalasi

1. **Clone repository**
   ```bash
   git clone <repository-url>
   cd my_profile
   ```

2. **Konfigurasi Database**
   - Buat database MySQL baru
   - Edit file `app/config/config.php`:
   ```php
   'database' => [
       'adapter'     => 'Mysql',
       'host'        => 'localhost',
       'username'    => 'your_username',
       'password'    => 'your_password',
       'dbname'      => 'your_database',
       'charset'     => 'utf8',
   ],
   ```

3. **Setup Web Server**
   - Arahkan document root ke folder `public/`
   - Pastikan mod_rewrite aktif untuk Apache

4. **Permissions**
   ```bash
   chmod -R 755 cache/
   chmod -R 755 public/
   ```

## 🏗️ Struktur Proyek

```
my_profile/
├── app/
│   ├── config/          # Konfigurasi aplikasi
│   ├── controllers/     # Controller MVC
│   ├── models/          # Model database
│   ├── views/           # Template views
│   ├── library/         # Custom libraries
│   └── migrations/      # Database migrations
├── public/              # Web accessible files
│   ├── css/            # Stylesheets
│   ├── js/             # JavaScript files
│   ├── img/            # Images
│   └── vendor/         # Frontend libraries
├── cache/              # Cache files
└── template_1/         # Static HTML template
```

## 🎨 Kustomisasi

### Mengubah Informasi Profil
Edit file view yang sesuai di `app/views/`:
- `index/index.phtml` - Halaman beranda
- `about/index.phtml` - Halaman tentang
- `resume/index.phtml` - Halaman resume
- `portfolio/index.phtml` - Halaman portfolio

### Menambah Gambar
Upload gambar ke folder yang sesuai di `public/img/`:
- `profile/` - Foto profil
- `portfolio/` - Gambar portfolio
- `services/` - Gambar layanan

### Styling
- Edit `public/css/main.css` untuk custom styling
- Atau gunakan SCSS di `public/scss/`

## 🔧 Pengembangan

### Menambah Controller Baru
```bash
# Jika menggunakan Phalcon DevTools
phalcon create-controller NamaController
```

### Menambah Model
```bash
phalcon create-model NamaModel
```

### Database Migration
```bash
phalcon migration generate
phalcon migration run
```

## 📱 Responsive Design

Website ini menggunakan Bootstrap 5 dan telah dioptimalkan untuk:
- Desktop (1200px+)
- Tablet (768px - 1199px)
- Mobile (< 768px)

## 🌟 Demo

Lihat demo live di: [URL Demo Anda]

## 📸 Screenshots

![Homepage](public/img/screenshot-home.png)
![Portfolio](public/img/screenshot-portfolio.png)

## 🤝 Kontribusi

1. Fork repository ini
2. Buat branch fitur (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📄 Lisensi

Distributed under the MIT License. See `LICENSE` for more information.

## 📞 Kontak

Nama Anda - [@username](https://twitter.com/username) - email@example.com

Project Link: [https://github.com/username/my_profile](https://github.com/username/my_profile)

## 🙏 Acknowledgments

- [Phalcon Framework](https://phalcon.io/)
- [Bootstrap](https://getbootstrap.com/)
- [AOS Library](https://michalsnik.github.io/aos/)
- [GLightbox](https://biati-digital.github.io/glightbox/)
- Template design inspiration dari berbagai sumber