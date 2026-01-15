# Raihan Fauzan - Portfolio Website (Static HTML)

Portfolio website personal yang dibangun dengan HTML, CSS, dan JavaScript murni tanpa backend PHP.

## 🚀 Fitur

- **Halaman Beranda** - Tampilan utama dengan informasi singkat
- **Tentang Saya** - Informasi detail tentang profil
- **Resume** - CV dan pengalaman kerja
- **Portfolio** - Showcase proyek-proyek yang telah dikerjakan
- **Kontak** - Form kontak dan informasi komunikasi
- **Desain Responsif** - Optimal di semua perangkat
- **Animasi Modern** - Menggunakan AOS (Animate On Scroll)

## 🛠️ Teknologi

- **HTML5** - Struktur halaman web
- **CSS3** - Styling dan desain
- **JavaScript** - Interaktivitas
- **Bootstrap 5** - Framework CSS responsif
- **Libraries**: 
  - AOS (Animate On Scroll)
  - GLightbox (Image Gallery)
  - Typed.js (Text Animation)
  - Isotope Layout (Portfolio Filter)

## 📋 Struktur Folder

```
raihan_profile1/
├── index.html          # Halaman beranda
├── about.html          # Halaman tentang
├── resume.html         # Halaman resume
├── portfolio.html      # Halaman portfolio
├── contact.html        # Halaman kontak
├── css/
│   └── main.css       # File CSS utama
├── js/
│   └── main.js        # File JavaScript utama
├── img/               # Folder gambar
│   ├── profile/       # Foto profil
│   └── portfolio/     # Gambar portfolio
└── vendor/            # Library pihak ketiga
    ├── bootstrap/
    ├── aos/
    ├── glightbox/
    └── ...
```

## ⚡ Cara Menggunakan

### Metode 1: Buka Langsung di Browser
1. Buka folder `raihan_profile1`
2. Double-click file `index.html`
3. Website akan terbuka di browser default Anda

### Metode 2: Menggunakan Live Server (Recommended)
1. Install extension "Live Server" di VS Code
2. Buka folder `raihan_profile1` di VS Code
3. Klik kanan pada `index.html`
4. Pilih "Open with Live Server"

### Metode 3: Menggunakan Python HTTP Server
```bash
cd raihan_profile1
python -m http.server 8000
```
Kemudian buka browser dan akses: `http://localhost:8000`

## 🎨 Kustomisasi

### Mengubah Informasi Profil
Edit file HTML yang sesuai:
- `index.html` - Halaman beranda
- `about.html` - Halaman tentang
- `resume.html` - Halaman resume
- `portfolio.html` - Halaman portfolio
- `contact.html` - Halaman kontak

### Menambah/Mengubah Gambar
1. Upload gambar ke folder `img/`
2. Update path gambar di file HTML yang sesuai

### Mengubah Styling
Edit file `css/main.css` untuk custom styling

### Mengubah Warna Tema
Cari dan edit CSS variables di `css/main.css`:
```css
:root {
  --accent-color: #your-color;
  --background-color: #your-color;
  /* dst... */
}
```

## 📱 Responsive Design

Website ini telah dioptimalkan untuk:
- Desktop (1200px+)
- Tablet (768px - 1199px)
- Mobile (< 768px)

## 🌟 Fitur Form Kontak

Form kontak menggunakan JavaScript untuk menampilkan modal sukses. Untuk menghubungkan dengan backend:
1. Tambahkan endpoint API di form action
2. Atau gunakan service seperti Formspree, EmailJS, atau Web3Forms

## 📄 Lisensi

Free to use for personal and commercial projects.

## 📞 Kontak

Raihan Fauzan
- Instagram: [@amar_0218](https://www.instagram.com/amar_0218?igsh=cmFvNDk4aG9zazE=)
- LinkedIn: [Raihan Fauzan](https://www.linkedin.com/in/raihan-fauzan-7b033732b/)
- GitHub: [rehanFauzan](https://github.com/rehanFauzan/)
- Email: raihanfauzan180208@gmail.com

## 🙏 Credits

- Template design inspiration: BootstrapMade
- Icons: Bootstrap Icons
- Animations: AOS Library
- Image Lightbox: GLightbox
