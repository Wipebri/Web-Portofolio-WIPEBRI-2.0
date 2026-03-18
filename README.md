# Web-Portofolio-WIPEBRI 2.0

DWI PEBRIYANTO PRADANA | 2409116012 | SISTEM INFORMASI A 2024

Website portfolio pribadi yang menampilkan profil, pengalaman, kemampuan, serta sertifikat yang dimiliki Secara dinamis menggunakan data dari database.

---

## 📌 Deskripsi Project

Website ini dibuat sebagai portfolio personal untuk menampilkan informasi mengenai profil diri, pengalaman organisasi, skill, serta sertifikat yang telah diperoleh.

---

# 🖥️ Tampilan Setiap Section / Fitur

## 🔹 1. Hero Section
<img width="1200" height="675" alt="image" src="https://github.com/user-attachments/assets/e6fa53e6-5adb-4645-a5b6-c691f132fb64" />

Menampilkan:
- Nama lengkap
- Role
- Tombol menuju About Me

---

## 🔹 2. About Me Section
<img width="1200" height="675" alt="image" src="https://github.com/user-attachments/assets/73117caf-6643-4a56-a3b5-ffede31a61eb" />


Menampilkan:
- Deskripsi singkat tentang diri
- Foto profil
- Daftar pengalaman
- Daftar skill dengan progress bar

---

## 🔹 3. Certificates Section
<img width="1200" height="675" alt="image" src="https://github.com/user-attachments/assets/c2f007ce-0521-4c28-bba0-5333e5a02243" />

Menampilkan:
- Daftar sertifikat dalam bentuk card
- Gambar, Judul, Instansi, dan tahun sertifikat

---

## 🔹 4. Navbar
<img width="1200" height="300" alt="image" src="https://github.com/user-attachments/assets/5e735eb5-bedb-4da3-85ad-0cd8a9779237" />

Menampilkan:
- Logo WIPEBRI
- Menu navigasi Home, About, dan Certificates

---

# 💻 Penjelasan Code Setiap Section / Fitur
## 🔹 1. Head
<img width="1200" height="309" alt="image" src="https://github.com/user-attachments/assets/63bf2a9a-a334-4b99-8cdb-c4b5b9bfbf05" />

Bagian head berfungsi untuk Mengatur identitas halaman, mengatur kompatibilitas device, memuat styling eksternal, menentukan font, mengatur SEO dasar. Contohnya pada bagian title disitu Mengatur identitas atau judul halaman menjadi "Portfolio | WIPEBRI". selanjutnya ada bagian mengimport library bootstrap, Google Font, dan CSS.

---

## 🔹 2. Vue App Container
<img width="213" height="40" alt="image" src="https://github.com/user-attachments/assets/970f8842-910b-40d5-bacb-1fc7694eb678" />

Bagian ini adalah wadah utama website. Vue.js bekerja di dalam div ini untuk mengatur data seperti nama, skill, pengalaman, dan sertifikat.

**Data State**
```
data() {
    return {
        name: "",
        role: "",
        description: "",
        skills: [],
        experiences: [],
        certificates: []
    }
}
```
**Fetch Data**
```
fetch('get_data.php')
```
Bagian inti dari aplikasi Vue  yang berfungsi mengambil data atau informasi dari database, kemudian akan ditampilkan di website.

---

## 🔹 3. Navbar
<img width="800" height="195" alt="image" src="https://github.com/user-attachments/assets/e3a6b032-59d0-436d-9ff7-1c486f0f90a3" />

Menampilkan menu navigasi di bagian atas. kemudian fixed-top digunakan agar navbar selalu menempel di atas walaupun halaman di-scroll. 

<img width="843" height="381" alt="image" src="https://github.com/user-attachments/assets/62a3442a-1327-4d89-b15c-971c9cfb915d" />

terdapat 3 menu Home, About, Certificates jika diklik, halaman akan langsung scroll ke bagian tersebut.

---

## 🔹 4. Hero Section

<img width="919" height="403" alt="image" src="https://github.com/user-attachments/assets/e5e2025d-f7ca-41c1-a2ea-1e2ec02606a6" />

bagian pertama yang dilihat pengujung web. di section ini menampilkan Nama karena adanya "{{ name }}", kemudian Role / Jabatan karena "{{ role }} dan "Tombol "About Me". Tanda "{{ }}" artinya data diambil dari Vue.js, bukan ditulis langsung di HTML.

---

## 🔹 5. About Me

<img width="861" height="123" alt="image" src="https://github.com/user-attachments/assets/cb0424ee-347c-411f-af2b-94c349940254" />

section adalah bagian khusus dalam halaman website. penggunaan id="about" supaya ketika klik “About” pads navbar web akan scroll ke bagian about me. d-flex align-items-center dari Bootstrap, berfungsi supaya isi bagian about me rata tengah secara vertikal.

<img width="812" height="119" alt="image" src="https://github.com/user-attachments/assets/ca1962a3-3429-43e6-82f3-b2dc1a25bee1" />

photo-wrapper digunakan untuk pembungkus foto, photo-box untuk efek background atau dekorasi  dan <img> menampilkan gambar dari folder asets

<img width="677" height="290" alt="image" src="https://github.com/user-attachments/assets/177ef7ea-b9fc-4f39-a8e9-15f82f5c5f3b" />

"col-md-6 order-2 order-md-1" digunakan agar kolom deskripsi, pengalaman dan skill terbagi Setengah layar di kiri pada tampilan desktop, sedangkan mobile deskripsi di tampilkan setelah foto. "{{ description }}" dan "{{ exp }}" adalah data dari Vue.js yang artinya teks deskripsi dan exp tidak ditulis langsung di HTML, tapi diambil dari bagian JavaScript.

<img width="628" height="314" alt="image" src="https://github.com/user-attachments/assets/c8613dd3-6fec-42ab-b6bb-ca41e53b7a74" />

"v-for="skill in skills"" digunakan agar Vue mengulang setiap skill yang ada di data dan menampilkan nama serta persentase skillnya. ":style="{ width: skill.level + '%' }"" digunakan untuk mengatur lebar perogres barnya

----

## 🔹 6. Certificates
<img width="985" height="73" alt="image" src="https://github.com/user-attachments/assets/dc9a6af6-394e-4eb2-9bf7-d6699acda5c6" />

membuat tampilan sertifikat berbentuk kartu menggunakan komponen Bootstrap. h-100 memastikan tinggi semua kartu sama, dan text-center membuat isi kartu rata tengah agar terlihat rapi. kemudian menampilkan gambar sertifikat. Tanda : pada :src menunjukkan bahwa sumber gambar diambil dari data Vue, yaitu cert.image. Artinya setiap sertifikat bisa memiliki gambar yang berbeda sesuai data yang dimasukkan.

<img width="602" height="181" alt="image" src="https://github.com/user-attachments/assets/149c0398-7510-4987-9b03-4ba762bf04b0" />

menampilkan judul sertifikat. Teks di dalam {{ }} diambil langsung dari data Vue, sehingga judul akan otomatis berubah sesuai isi array certificates. kemudian menampilkan nama organisasi dan tahun sertifikat. Sama seperti judul, data ini bersifat dinamis karena diambil dari JavaScript menggunakan Vue.

---
## 🔹 7. Footer
<img width="687" height="111" alt="image" src="https://github.com/user-attachments/assets/0640385b-f5eb-40b5-89e8-80bb58ffbe05" />

Menampilkan bagian paling bawah website yang biasanya berisi tanda hak cipta.

---

## 🔹 8. script
<img width="1200" height="78" alt="image" src="https://github.com/user-attachments/assets/a24180a5-cbbc-4bd3-a5c4-ab8420fd1626" />

memanggil file JavaScript dari Bootstrap agar fitur interaktif Bootstrap bisa berjalan dan Vue.js versi 3 yang membuat website menjadi dinamis.

<img width="327" height="62" alt="image" src="https://github.com/user-attachments/assets/37276fca-fded-42a8-a92b-cde406e51c53" />

mengambil fungsi createApp dari Vue.

---

## 🔹 9. Koneksi Database
```
$conn = mysqli_connect($host, $user, $pass, $db);
```
kode diatas digunakan untuk menghubungkan ke database MySQL. Jika gagal, akan menampilkan error

--- 

## 🔹10. API Data
get_data.php digunakan untuk Mengambil data dari database yaitu data profile, skills, experiences, dan certificates.

```
echo json_encode($data);
```
kode diatas mengubah data menjadi JSON untuk digunakan vue.js

--- 

## 🛠️ Teknologi & Library
* **Bootstrap 5.3.8**: Digunakan untuk tata letak dan komponen UI yang responsif.
* **Vue.js 3 (Global Build)**: Digunakan untuk manajemen data dinamis pada bagian About, Skills, dan Certificates.
* **Google Fonts**: Menggunakan font *Poppins* untuk tipografi yang modern.
* **CSS3 Custom**: Styling tambahan untuk animasi dan dekorasi elemen.
