-- MariaDB dump 10.19  Distrib 10.11.3-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db-web-prodi-ti
-- ------------------------------------------------------
-- Server version	10.11.3-MariaDB-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `akreditasis`
--

DROP TABLE IF EXISTS `akreditasis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `akreditasis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `prodi` varchar(255) NOT NULL DEFAULT 'Teknik Informatika',
  `no_sk` varchar(255) NOT NULL,
  `tgl_terbit` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `status` enum('masih berlaku','kadaluarsa') NOT NULL,
  `peringkat` enum('A','B','C','Unggul','Baik Sekali','Baik','Tidak Terakreditasi') NOT NULL,
  `dokumen_sk` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `akreditasis`
--

LOCK TABLES `akreditasis` WRITE;
/*!40000 ALTER TABLE `akreditasis` DISABLE KEYS */;
INSERT INTO `akreditasis` VALUES
(1,'Teknik Informatika','1062/SK/BAN-PT/Akred/S/IV/2019','2019-04-23','2024-04-23','masih berlaku','B','akreditasi_1_teknik-informatika_2019-04-23.pdf','2023-08-02 16:06:10','2023-08-02 16:06:10');
/*!40000 ALTER TABLE `akreditasis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artikels`
--

DROP TABLE IF EXISTS `artikels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artikels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL DEFAULT 'admin',
  `image` varchar(255) DEFAULT NULL,
  `category` enum('pengumuman','berita','kemahasiswaan') NOT NULL DEFAULT 'berita',
  `content_html` text DEFAULT NULL,
  `content_json` mediumtext DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `published_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artikels`
--

LOCK TABLES `artikels` WRITE;
/*!40000 ALTER TABLE `artikels` DISABLE KEYS */;
INSERT INTO `artikels` VALUES
(1,'UNSIQ Peringat Malam Nuzulul Qur\'an 1444 H','unsiq-peringat-malam-nuzulul-quran-1444-h','Humas UNSIQ','berita_1_unsiq-peringat-malam-nuzulul-quran-1444-h.jpg','berita','<p>Universitas Sains Al-Qur\'an (UNSIQ) Jawa Tengah di Wonosobo adakan pengajian Nuzulul Qur\'an di masjid Al Furqon sabtu (8/4). Peringatan nuzulul Qur\'an ini merupakan bagian dari rangkaian kegiatan <strong>harlah UNSIQ ke 35</strong></p><p>Ketua Yayasan Pendidikan Ilmu-Ilmu Al- Qur\'an, H. Heru irianto S.E, M. S. I menyampaikan dalam peringatan nuzulul Qur\'an ini, UNSIQ juga memberikan santunan kepada 400 orang, kepada warga yang ada di lingkungan kampus 1 UNSIQ <em>\"kita memberikan 400 santunan kepada warga disekitar UNSIQ ini sebanyak 400\"</em></p><p>Selain itu dalam moment yang berbahagia ini, peringatan Nuzulul Qur\'an. UNSIQ juga menyerahkan Al-Qur\'an Akbar di karanganyar.</p><p>Rektor UNSIQ Dr. H.Z. Sukawi, M.A. juga menyampaikan Kata Al-Qur’an ini menurut Kamus Lisanul Arab terambil dari kata <em>qa-ra-a, qiraatan, wa qur’anan,</em> yaitu membaca, menelaah dan bacaan atau literasi. Dari kata ini pula lahir iqra, yaitu bacalah (perintah membaca), sebagaimana perintah ayat pertama dari Al-Qur’an al-Alaq. Lalu ada juga kata istiqra, yang berarti meneliti atau observasi, juga lahir kata al-quru-u yaitu yang mengabdikan dirinya. Sacara keseluruhan kata Al-Qur’an, menunjuk pada sifat literasi.</p><p>Dalam peringatan Nuzulul Qur\'an ini hadir pula KH. Supandi dari semarang sebagai pembicara, beliau menyampaikan kebanggaan umat islam memiliki kitab suci Al-Qur\'an.</p><p>Ceramah KH. Supandi selengkapnya bisa di saksikan melalui youtube <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://www.youtube.com/watch?v=qdVMP0e-Itg\">UNSIQ MEDIA CENTER</a></p>','{\"type\":\"doc\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Universitas Sains Al-Qur\'an (UNSIQ) Jawa Tengah di Wonosobo adakan pengajian Nuzulul Qur\'an di masjid Al Furqon sabtu (8/4). Peringatan nuzulul Qur\'an ini merupakan bagian dari rangkaian kegiatan \"},{\"type\":\"text\",\"marks\":[{\"type\":\"bold\"}],\"text\":\"harlah UNSIQ ke 35\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Ketua Yayasan Pendidikan Ilmu-Ilmu Al- Qur\'an, H. Heru irianto S.E, M. S. I menyampaikan dalam peringatan nuzulul Qur\'an ini, UNSIQ juga memberikan santunan kepada 400 orang, kepada warga yang ada di lingkungan kampus 1 UNSIQ \"},{\"type\":\"text\",\"marks\":[{\"type\":\"italic\"}],\"text\":\"\\\"kita memberikan 400 santunan kepada warga disekitar UNSIQ ini sebanyak 400\\\"\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Selain itu dalam moment yang berbahagia ini, peringatan Nuzulul Qur\'an. UNSIQ juga menyerahkan Al-Qur\'an Akbar di karanganyar.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Rektor UNSIQ Dr. H.Z. Sukawi, M.A. juga menyampaikan Kata Al-Qur’an ini menurut Kamus Lisanul Arab terambil dari kata \"},{\"type\":\"text\",\"marks\":[{\"type\":\"italic\"}],\"text\":\"qa-ra-a, qiraatan, wa qur’anan,\"},{\"type\":\"text\",\"text\":\" yaitu membaca, menelaah dan bacaan atau literasi. Dari kata ini pula lahir iqra, yaitu bacalah (perintah membaca), sebagaimana perintah ayat pertama dari Al-Qur’an al-Alaq. Lalu ada juga kata istiqra, yang berarti meneliti atau observasi, juga lahir kata al-quru-u yaitu yang mengabdikan dirinya. Sacara keseluruhan kata Al-Qur’an, menunjuk pada sifat literasi.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Dalam peringatan Nuzulul Qur\'an ini hadir pula KH. Supandi dari semarang sebagai pembicara, beliau menyampaikan kebanggaan umat islam memiliki kitab suci Al-Qur\'an.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Ceramah KH. Supandi selengkapnya bisa di saksikan melalui youtube \"},{\"type\":\"text\",\"marks\":[{\"type\":\"link\",\"attrs\":{\"href\":\"https://www.youtube.com/watch?v=qdVMP0e-Itg\",\"target\":\"_blank\",\"class\":null}}],\"text\":\"UNSIQ MEDIA CENTER\"}]}]}',1,'2023-08-01','2023-08-01 15:05:15','2023-08-01 15:05:15'),
(2,'UNSIQ Jadi Tuan Rumah Musyawarah Wilayah PERMIKOMNAS Wilayah VII Jawa Tengah','unsiq-jadi-tuan-rumah-musyawarah-wilayah-permikomnas-wilayah-vii-jawa-tengah','Himti UNSIQ','kemahasiswaan_2_unsiq-jadi-tuan-rumah-musyawarah-wilayah-permikomnas-wilayah-vii-jawa-tengah.jpg','kemahasiswaan','<p>Wonosobo - Universitas Sains Al-Qur’an (Unsiq) Jawa Tengah di Wonosobo menjadi tuan rumah pelaksanaan Musyawarah Wilayah ke-2 Perhimpunan Mahasiswa Informatika dan Komputer (Permikomnas) wilayah VII Jawa Tengah.</p><p>Pelaksanaan berlangsung selama 3 hari, acara dibuka secara langsung oleh Wakil Rektor III Dr. Ir. Heri Hermanto., M.T. Kegiatan ini diselenggarakan di Aula Al-‘Ala Kampus I Unsiq, pada Jum’at (17/12/2021) yang diikuti oleh mahasiswa Informatika dan komputer dari berbagai perguruan tinggi yang ada di Jawa Tengah.</p><p>Turut hadir Dekan Fastikom Unsiq Nasyiin Faqih., ST., M.T, Kaprodi Teknik Informatika Unsiq Hidayatus Sibyan., M.Kom, dan tamu undangan lainnya. Pelaksanaan Muswil juga diisi dengan berbagai kegiatan diantaranya Opening Ceremony yang dimeriahkan oleh penampilan Tari Lengger khas Wonosobo. Kegiatan muswil kemudian dilanjutkan dengan acara inti yaitu, rangkaian persidangan Musyawarah Wilayah Permikomnas Jateng.</p><p>Didalam rangkaian persidangan tersebut diantaranya membahas Peraturan Wilayah Permikomnas Wilayah VII Jawa Tengah, pemilihan dan penetapan Koordinator Wilayah Permikomnas Jateng, Dewan Pengawas Organisasi,dan Koordinator Daerah. Selain itu, rangkaian pesidangan muswil juga membahas penentuan tuan rumah Rapat Kerja Wilayah (Rakerwil) dan tuan rumah Musyawarah Wilayah Permikomnas Jateng tahun 2022.</p><p>Setelah rangkaian persidangan selesai, pada hari minggu (19/12/2021) Rangkaian Muswil dilanjutkan dengan kegiatan kunjungan wisata ke kompleks Candi Arjuna dan Kawah Sikidang yang menjadi ikon pariwisata Wonosobo.</p><p>Wakil Rektor III dalam sambutannya mengatakan melalui Musyawarah Wilayah ini diharapkan terjalin kerja sama antar mahasiswa informatika dan komputer dari berbagai daerah.</p><p>“Bermusyawarah lah dengan menggunakan argumentasi intelektual dan dapat memberikan kemajuan pada ilmu dan teknologi. Saya ucapkan selamat datang di kampus Unsiq Wonosobo,” ungkap Dr. H. Heri Hermanto., M.T</p><p>Beliau menambahkan, melalui kegiatan ini semoga terjadi peningkatan kompetensi sehingga menjadi bekal bagi anda-anda (peserta muswil) di tengah-tengah masyarakat. Silakan selama disini belajar mengenai berbagai bidang keilmuan melalui kegiatan musyawarah ini.</p><p>Dekan Fastikom Unsiq, mengucapkan selamat atas musyawarah yang dilakukan, semoga sukses dan menghasilkan keputusan mufakat yang diharapkan bersama.&nbsp;Apresiasi setinggi-tingginya terhadap panitia pelaksanaan muswil ke-2, dari muswil diharapkan lahir kompetensi mahasiswa yang meningkat.</p><p>Ketua Himpunan Mahasiswa Teknik Informatika Unsiq (Himti Unsiq), Nur Intan Ayu Nisaa\' mengungkapkan bahwa selain membahas Peraturan Wilayah dan re-organisasi kepemimpinan Permikomnas Jateng, melalui Muswil ini semoga terjalin tali persaudaraan yang lebih kuat antar mahasiswa Informatika dan Komputer di Jawa Tengah.</p><p><em>“Semoga acara ini dapat terselenggara dengan baik dan semoga menghasilkan pemimpin yang membawa dampak perubahan besar dalam tubuh Permikomnas Jateng,”</em> pungkas Nur Intan Ayu Nisaa\'</p>','{\"type\":\"doc\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Wonosobo - Universitas Sains Al-Qur’an (Unsiq) Jawa Tengah di Wonosobo menjadi tuan rumah pelaksanaan Musyawarah Wilayah ke-2 Perhimpunan Mahasiswa Informatika dan Komputer (Permikomnas) wilayah VII Jawa Tengah.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Pelaksanaan berlangsung selama 3 hari, acara dibuka secara langsung oleh Wakil Rektor III Dr. Ir. Heri Hermanto., M.T. Kegiatan ini diselenggarakan di Aula Al-‘Ala Kampus I Unsiq, pada Jum’at (17/12/2021) yang diikuti oleh mahasiswa Informatika dan komputer dari berbagai perguruan tinggi yang ada di Jawa Tengah.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Turut hadir Dekan Fastikom Unsiq Nasyiin Faqih., ST., M.T, Kaprodi Teknik Informatika Unsiq Hidayatus Sibyan., M.Kom, dan tamu undangan lainnya. Pelaksanaan Muswil juga diisi dengan berbagai kegiatan diantaranya Opening Ceremony yang dimeriahkan oleh penampilan Tari Lengger khas Wonosobo. Kegiatan muswil kemudian dilanjutkan dengan acara inti yaitu, rangkaian persidangan Musyawarah Wilayah Permikomnas Jateng.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Didalam rangkaian persidangan tersebut diantaranya membahas Peraturan Wilayah Permikomnas Wilayah VII Jawa Tengah, pemilihan dan penetapan Koordinator Wilayah Permikomnas Jateng, Dewan Pengawas Organisasi,dan Koordinator Daerah. Selain itu, rangkaian pesidangan muswil juga membahas penentuan tuan rumah Rapat Kerja Wilayah (Rakerwil) dan tuan rumah Musyawarah Wilayah Permikomnas Jateng tahun 2022.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Setelah rangkaian persidangan selesai, pada hari minggu (19/12/2021) Rangkaian Muswil dilanjutkan dengan kegiatan kunjungan wisata ke kompleks Candi Arjuna dan Kawah Sikidang yang menjadi ikon pariwisata Wonosobo.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Wakil Rektor III dalam sambutannya mengatakan melalui Musyawarah Wilayah ini diharapkan terjalin kerja sama antar mahasiswa informatika dan komputer dari berbagai daerah.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"“Bermusyawarah lah dengan menggunakan argumentasi intelektual dan dapat memberikan kemajuan pada ilmu dan teknologi. Saya ucapkan selamat datang di kampus Unsiq Wonosobo,” ungkap Dr. H. Heri Hermanto., M.T\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Beliau menambahkan, melalui kegiatan ini semoga terjadi peningkatan kompetensi sehingga menjadi bekal bagi anda-anda (peserta muswil) di tengah-tengah masyarakat. Silakan selama disini belajar mengenai berbagai bidang keilmuan melalui kegiatan musyawarah ini.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Dekan Fastikom Unsiq, mengucapkan selamat atas musyawarah yang dilakukan, semoga sukses dan menghasilkan keputusan mufakat yang diharapkan bersama. Apresiasi setinggi-tingginya terhadap panitia pelaksanaan muswil ke-2, dari muswil diharapkan lahir kompetensi mahasiswa yang meningkat.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Ketua Himpunan Mahasiswa Teknik Informatika Unsiq (Himti Unsiq), Nur Intan Ayu Nisaa\' mengungkapkan bahwa selain membahas Peraturan Wilayah dan re-organisasi kepemimpinan Permikomnas Jateng, melalui Muswil ini semoga terjalin tali persaudaraan yang lebih kuat antar mahasiswa Informatika dan Komputer di Jawa Tengah.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"marks\":[{\"type\":\"italic\"}],\"text\":\"“Semoga acara ini dapat terselenggara dengan baik dan semoga menghasilkan pemimpin yang membawa dampak perubahan besar dalam tubuh Permikomnas Jateng,”\"},{\"type\":\"text\",\"text\":\" pungkas Nur Intan Ayu Nisaa\'\"}]}]}',1,'2023-08-01','2023-08-01 15:08:32','2023-08-01 15:08:32'),
(3,'PENERJUNAN KULIAH PENGABDIAN MASYARAKAT (KPM) Ke- 46 TAHUN 2023','penerjunan-kuliah-pengabdian-masyarakat-kpm-ke-46-tahun-2023','Admin','berita_3_penerjunan-kuliah-pengabdian-masyarakat-kpm-ke-46-tahun-2023.jpg','berita','<p>Sabtu (4/2/2023), dilaksanakan upacara pengarahan dan penerjunan Program Kuliah Pengabdian Masyarakat Universitas Sains Al-Qur\'an Jawa Tengah di Wonosobo Ke-46 Tahun 2023 yang dihadiri secara virtual oleh Rektor UNSIQ Jawa Tengah di Wonosobo, Wakil Rektor, Dekan, Kepala Lembaga LP3M, segenap pejabat Struktural UNSIQ, Dosen Pembimbing Lapangan (DPL) dan 113 Kepala Desa serta sejumlah 1295 mahasiswa peserta KPM.</p><p>Bertemakan “Implementasi KPM-MBKPM BINA DESA”, kegiatan upacara penerjunan diselenggarakan secara daring pada platform Zoom.</p><p>Laporan Kepala LP3M oleh Dr. Ahmad Khoiri, M.Pd., pada angkatan ini, UNSIQ menerjunkan 1295 mahasiswa KPM yang dibimbing oleh 50 Dosen Pembimbing Lapangan (DPL).</p><p>Program ini akan dilaksanakan di 6 Kabupaten dan 113 Desa yaitu Wonosobo (100 Desa), Temanggung (5 Desa), Magelang (1 Desa), Kebumen (4 Desa), Purbalingga (1 Desa) dan Purworejo(2 Desa).</p><p>Dr. H. Z. Sukawi, MA., Rektor UNSIQ Jawa Tengah di Wonosobo memberikan arahan dan mengajak mahasiswa untuk mengupdate kreatifitas, mencari solusi yang bermanfaaat untuk masyarakat, serta senantiasa membumikan nilai-nilai Ke-AlQur\'an-an semata-mata untuk meraih ridho Allah. Setelah itu dilanjut dengan pembacaan doa.</p><p>Sinergitas Perguruan Tinggi, Permerintah dan Masyarakat dengan program terwujudnya KPM-MBKM UNSIQ terintegrasi Al-Qur\'an berdampak pada kehidupan yang transformatif dan humanis, ketahanan pangan masyarakat, kemiskinan ekstrim, pengelolaan dan pemanfaatan sampah, intensifikasi pekarangan rumah melalui gerakan tanam sayur, program stunting, struktur ekonomi yang produktif, mandiri dan berdaya saing dan mencapai lingkungan hidup yang berkelanjutan.</p>','{\"type\":\"doc\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Sabtu (4/2/2023), dilaksanakan upacara pengarahan dan penerjunan Program Kuliah Pengabdian Masyarakat Universitas Sains Al-Qur\'an Jawa Tengah di Wonosobo Ke-46 Tahun 2023 yang dihadiri secara virtual oleh Rektor UNSIQ Jawa Tengah di Wonosobo, Wakil Rektor, Dekan, Kepala Lembaga LP3M, segenap pejabat Struktural UNSIQ, Dosen Pembimbing Lapangan (DPL) dan 113 Kepala Desa serta sejumlah 1295 mahasiswa peserta KPM.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Bertemakan “Implementasi KPM-MBKPM BINA DESA”, kegiatan upacara penerjunan diselenggarakan secara daring pada platform Zoom.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Laporan Kepala LP3M oleh Dr. Ahmad Khoiri, M.Pd., pada angkatan ini, UNSIQ menerjunkan 1295 mahasiswa KPM yang dibimbing oleh 50 Dosen Pembimbing Lapangan (DPL).\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Program ini akan dilaksanakan di 6 Kabupaten dan 113 Desa yaitu Wonosobo (100 Desa), Temanggung (5 Desa), Magelang (1 Desa), Kebumen (4 Desa), Purbalingga (1 Desa) dan Purworejo(2 Desa).\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Dr. H. Z. Sukawi, MA., Rektor UNSIQ Jawa Tengah di Wonosobo memberikan arahan dan mengajak mahasiswa untuk mengupdate kreatifitas, mencari solusi yang bermanfaaat untuk masyarakat, serta senantiasa membumikan nilai-nilai Ke-AlQur\'an-an semata-mata untuk meraih ridho Allah. Setelah itu dilanjut dengan pembacaan doa.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Sinergitas Perguruan Tinggi, Permerintah dan Masyarakat dengan program terwujudnya KPM-MBKM UNSIQ terintegrasi Al-Qur\'an berdampak pada kehidupan yang transformatif dan humanis, ketahanan pangan masyarakat, kemiskinan ekstrim, pengelolaan dan pemanfaatan sampah, intensifikasi pekarangan rumah melalui gerakan tanam sayur, program stunting, struktur ekonomi yang produktif, mandiri dan berdaya saing dan mencapai lingkungan hidup yang berkelanjutan.\"}]}]}',1,'2023-08-01','2023-08-01 15:09:43','2023-08-01 15:09:43'),
(4,'KEPALA LLDIKTI WILAYAH VI SEBUT UNSIQ PERGURUAN TINGGI BESAR','kepala-lldikti-wilayah-vi-sebut-unsiq-perguruan-tinggi-besar','Admin','berita_4_kepala-lldikti-wilayah-vi-sebut-unsiq-perguruan-tinggi-besar.jpg','berita','<p>Dalam kesempatan pembekalan dan workshop dosen, admin PDPT yang diadakan UNIVERSITAS SAINS AL-QUR\'AN Jawa Tengah Di Wonosobo Kepala LLDIKTI Wilayah VI Bhimo Widyo Andoko SH. MH menyebutkan bahwa UNSIQ adalah perguruan tinggi besar.</p><p>Bhimo menyebutkan UNSIQ adalah perguruan tinggi besar dilihat dari segi peringkat akreditasi yang tinggi, jumlah mahasiswa yang banyak, budaya dan tradisi akademik yang sudah berjalan serta lingkungan yang kondusif untuk dilaksanakan pembelajaran.</p><p>Acara pembekalan dan workshop yang dihadiri oleh Rektor, Wakil rektor, Dekan, Dosen dan admin di aula pasca sarjana ini, adalah pembinaan mengenai pelaporan dan pengelolaan sistem yang terintegrasi dengan dikti</p><p>Rektor UNSIQ Dr. H.Z. Sukawi, M.A. berharap semua admin UNSIQ dan fakultas dapat mengelola sistem dengan baik \"Pengelolaan dan penyelenggaraan universitas kedepan itu memang harus mengikuti perkembangan, maka berbagai urusan, tugas, kewajiban,&nbsp; dan sekaligus pengembangan dari karir dosen itu ya semuanya harus berbasis data, maka memang harus ada pengelola yaitu admin, semua harus masuk ke LLDIKTI\"</p><p>Pembekalan dan workshop yang diadakan satu hari penuh ini juga menghadirkan para narasumber dari LLDIKTI yang turut langsung mengawal kaprodi dan admin fakultas agar bisa terkoneksi dengan sistem LLDIKTI.</p><p>Selain itu rektor UNSIQ juga berkomitmen pelaporan semua data rapi \"Karna itu kuncinya harus ada satu data yang kjita gunakan, dengan demikian sistem yang dikelola ini sistem yang terkoneksi terintegrasi terutama pada LLDIKTI\" pungkasnya.</p>','{\"type\":\"doc\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Dalam kesempatan pembekalan dan workshop dosen, admin PDPT yang diadakan UNIVERSITAS SAINS AL-QUR\'AN Jawa Tengah Di Wonosobo Kepala LLDIKTI Wilayah VI Bhimo Widyo Andoko SH. MH menyebutkan bahwa UNSIQ adalah perguruan tinggi besar.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Bhimo menyebutkan UNSIQ adalah perguruan tinggi besar dilihat dari segi peringkat akreditasi yang tinggi, jumlah mahasiswa yang banyak, budaya dan tradisi akademik yang sudah berjalan serta lingkungan yang kondusif untuk dilaksanakan pembelajaran.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Acara pembekalan dan workshop yang dihadiri oleh Rektor, Wakil rektor, Dekan, Dosen dan admin di aula pasca sarjana ini, adalah pembinaan mengenai pelaporan dan pengelolaan sistem yang terintegrasi dengan dikti\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Rektor UNSIQ Dr. H.Z. Sukawi, M.A. berharap semua admin UNSIQ dan fakultas dapat mengelola sistem dengan baik \\\"Pengelolaan dan penyelenggaraan universitas kedepan itu memang harus mengikuti perkembangan, maka berbagai urusan, tugas, kewajiban,  dan sekaligus pengembangan dari karir dosen itu ya semuanya harus berbasis data, maka memang harus ada pengelola yaitu admin, semua harus masuk ke LLDIKTI\\\"\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Pembekalan dan workshop yang diadakan satu hari penuh ini juga menghadirkan para narasumber dari LLDIKTI yang turut langsung mengawal kaprodi dan admin fakultas agar bisa terkoneksi dengan sistem LLDIKTI.\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Selain itu rektor UNSIQ juga berkomitmen pelaporan semua data rapi \\\"Karna itu kuncinya harus ada satu data yang kjita gunakan, dengan demikian sistem yang dikelola ini sistem yang terkoneksi terintegrasi terutama pada LLDIKTI\\\" pungkasnya.\"}]}]}',1,'2023-08-01','2023-08-01 15:11:30','2023-08-01 15:11:30'),
(5,'Pendaftaran SP Kelompok dan Remidi Semester Genap TA. 2022/2023 KELAS A / REGULER','pendaftaran-sp-kelompok-dan-remidi-semester-genap-ta-20222023-kelas-a-reguler','Admin',NULL,'pengumuman','<p>Diberitahukan kepada seluruh mahasiswa FASTIKOM. Untuk pendaftaran SP Kelompok dan Remidi&nbsp;Semester Genap T.A. 2022/2023 telah dibuka hingga <strong>Minggu, 6 Agustus 2023</strong>, adapun ketentuan pendaftaran sebagai berikut:</p><ul><li><p><strong>Pendaftaran dengan cara mengisi form terlebih dahulu melalui link:</strong> <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://forms.gle/n5LwXFBEKFiuruFY9\"><strong>klik disini</strong></a></p></li><li><p><strong>Pengumuman detail biaya yang harus di bayarkan serta pendaftaran yang ditolak untuk&nbsp;SP Kelompok dan Remidi&nbsp;Semester Genap T.A. 2022/2023 akan kami umumkan melalui&nbsp;</strong><a target=\"_blank\" rel=\"noopener noreferrer\" href=\"http://web.fastikom-unsiq.ac.id/\"><strong>web fastikom</strong></a><strong>&nbsp;pada tanggal&nbsp;8 Agustus 2023.</strong></p></li><li><p>Minimal peserta untuk SP Kelompok adalah 5 mahasiswa</p></li><li><p><strong>Maksimal total SKS SP Kelompok&nbsp;Semester Gasal + Genap 2022/2023 adalah 9 SKS</strong></p></li><li><p>Pembayaran dilakukan secara langsung ke Mas Harri di Fakultas <strong>(Maksimal bayar tanggal 10 Agustus 2023)</strong></p></li></ul><p>Demikian pemberitahuan ini kami sampaikan, atas perhatiannya kami haturkan terima kasih.</p>','{\"type\":\"doc\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Diberitahukan kepada seluruh mahasiswa FASTIKOM. Untuk pendaftaran SP Kelompok dan Remidi Semester Genap T.A. 2022/2023 telah dibuka hingga \"},{\"type\":\"text\",\"marks\":[{\"type\":\"bold\"}],\"text\":\"Minggu, 6 Agustus 2023\"},{\"type\":\"text\",\"text\":\", adapun ketentuan pendaftaran sebagai berikut:\"}]},{\"type\":\"bulletList\",\"content\":[{\"type\":\"listItem\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"marks\":[{\"type\":\"bold\"}],\"text\":\"Pendaftaran dengan cara mengisi form terlebih dahulu melalui link:\"},{\"type\":\"text\",\"text\":\" \"},{\"type\":\"text\",\"marks\":[{\"type\":\"link\",\"attrs\":{\"href\":\"https://forms.gle/n5LwXFBEKFiuruFY9\",\"target\":\"_blank\",\"class\":null}},{\"type\":\"bold\"}],\"text\":\"klik disini\"}]}]},{\"type\":\"listItem\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"marks\":[{\"type\":\"bold\"}],\"text\":\"Pengumuman detail biaya yang harus di bayarkan serta pendaftaran yang ditolak untuk SP Kelompok dan Remidi Semester Genap T.A. 2022/2023 akan kami umumkan melalui \"},{\"type\":\"text\",\"marks\":[{\"type\":\"link\",\"attrs\":{\"href\":\"http://web.fastikom-unsiq.ac.id/\",\"target\":\"_blank\",\"class\":null}},{\"type\":\"bold\"}],\"text\":\"web fastikom\"},{\"type\":\"text\",\"marks\":[{\"type\":\"bold\"}],\"text\":\" pada tanggal 8 Agustus 2023.\"}]}]},{\"type\":\"listItem\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Minimal peserta untuk SP Kelompok adalah 5 mahasiswa\"}]}]},{\"type\":\"listItem\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"marks\":[{\"type\":\"bold\"}],\"text\":\"Maksimal total SKS SP Kelompok Semester Gasal + Genap 2022/2023 adalah 9 SKS\"}]}]},{\"type\":\"listItem\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Pembayaran dilakukan secara langsung ke Mas Harri di Fakultas \"},{\"type\":\"text\",\"marks\":[{\"type\":\"bold\"}],\"text\":\"(Maksimal bayar tanggal 10 Agustus 2023)\"}]}]}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Demikian pemberitahuan ini kami sampaikan, atas perhatiannya kami haturkan terima kasih.\"}]}]}',1,'2023-08-03','2023-08-02 17:47:29','2023-08-02 17:47:29'),
(6,'Batas Akhir Upload Berkas Pendaftaran Yudisium dan Pengaktifan Wisuda','batas-akhir-upload-berkas-pendaftaran-yudisium-dan-pengaktifan-wisuda','Admin',NULL,'pengumuman','<p><strong>Batas akhir upload berkas pendaftaran yudisium dan wisuda semester genap 2022/2023</strong></p><h2><strong>Sabtu, 22 Juli 2023, pukul 09.00 WIB</strong></h2><p><em>*Diluar Jam tersebut, resiko ditanggung sendiri</em></p>','{\"type\":\"doc\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"marks\":[{\"type\":\"bold\"}],\"text\":\"Batas akhir upload berkas pendaftaran yudisium dan wisuda semester genap 2022/2023\"}]},{\"type\":\"heading\",\"attrs\":{\"level\":2},\"content\":[{\"type\":\"text\",\"marks\":[{\"type\":\"bold\"}],\"text\":\"Sabtu, 22 Juli 2023, pukul 09.00 WIB\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"marks\":[{\"type\":\"italic\"}],\"text\":\"*Diluar Jam tersebut, resiko ditanggung sendiri\"}]}]}',1,'2023-08-03','2023-08-02 17:50:14','2023-08-02 17:54:18'),
(7,'Jadwal Ujian Pendadaran Offline Rabu – Kamis, 12 – 13 Juli 2023','jadwal-ujian-pendadaran-offline-rabu-kamis-12-13-juli-2023','Admin',NULL,'pengumuman','<p>Rabu Kamis TI-MI</p><p><a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://web.fastikom-unsiq.ac.id/wp-content/uploads/2023/07/Jadwal-7-12.13-2023-Mhs.pdf\">https://web.fastikom-unsiq.ac.id/wp-content/uploads/2023/07/Jadwal-7-12.13-2023-Mhs.pdf</a></p>','{\"type\":\"doc\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Rabu Kamis TI-MI\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"marks\":[{\"type\":\"link\",\"attrs\":{\"href\":\"https://web.fastikom-unsiq.ac.id/wp-content/uploads/2023/07/Jadwal-7-12.13-2023-Mhs.pdf\",\"target\":\"_blank\",\"class\":null}}],\"text\":\"https://web.fastikom-unsiq.ac.id/wp-content/uploads/2023/07/Jadwal-7-12.13-2023-Mhs.pdf\"}]}]}',1,'2023-08-03','2023-08-02 17:54:05','2023-08-02 17:54:05');
/*!40000 ALTER TABLE `artikels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dosens`
--

DROP TABLE IF EXISTS `dosens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dosens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nidn` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jabatan_struktural` varchar(255) NOT NULL,
  `jabatan_akademik` varchar(255) DEFAULT 'asisten ahli',
  `image` varchar(255) DEFAULT NULL,
  `homebase` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dosens`
--

LOCK TABLES `dosens` WRITE;
/*!40000 ALTER TABLE `dosens` DISABLE KEYS */;
INSERT INTO `dosens` VALUES
(1,'Adi Suwondo, M.Kom.','0613018002','adiduwondo@unsiq.ac.id','Dosen','asisten ahli','adi-suwondo.jpeg','Teknik Informatika',NULL,NULL),
(2,'Dian Asmarajati, M.Kom.','0615027402','asmarajati@unsiq.ac.id','Dosen','asisten ahli','dian-asmarajati.jpeg','Teknik Informatika',NULL,NULL),
(3,'Erna Dwi Astuti, M.Kom.','0625048001','ernada@unsiq.ac.id','Dosen','asisten ahli','erna-dwi-astuti.jpeg','Teknik Informatika',NULL,NULL),
(4,'Heri Surahman, S.T.','0605027303','herytronik@gmail.com','Dosen','asisten ahli','heri-surahman.jpeg','Manajemen Informatika',NULL,NULL),
(5,'Heru Nugroho, S.T., M.Eng.','0626088201','Suheru.st@gmail.com','Dosen','asisten ahli','heru-nugroho.jpeg','Teknik Informatika',NULL,NULL),
(6,'Hidayatus Sibyan, M.Kom.','0630118903','hsibyan@unsiq.ac.id','Ketua Program Studi Teknik Informatika','asisten ahli','hidayatu-sibyan.jpeg','Teknik Informatika',NULL,'2023-08-01 14:57:24'),
(7,'Muhammad Alif Muwafiq Baihaqy, M. Kom.','0612088703','aviq.baihaqy@gmail.com','Dosen','asisten ahli','alif-muwafiq-baihaqy.jpeg','Manajemen Informatika',NULL,NULL),
(8,'Mahmudi, S.Kom.','1','mahmudi@unsiq.ac.id','Dosen','asisten ahli','mahmudi.jpeg','Manajemen Informatika',NULL,NULL),
(9,'Muslim Hidayat, M.Kom.','0606078605','muslim_h@unsiq.ac.id','Dosen','asisten ahli','muslim-hidayat.jpeg','Manajemen Informatika',NULL,NULL),
(10,'Nahar Mardiyantoro, M.Kom.','0624038301','nahar@unsiq.ac.id','Dosen','asisten ahli','nahar-mardiyantoro.jpeg','Teknik Informatika',NULL,NULL),
(11,'Nulngafan, M.Kom','0613088903','affan@unsiq.ac.id','Dosen','asisten ahli','nulngafan.jpeg','Manajemen Informatika',NULL,NULL),
(12,'Nur Hasanah, M. Kom','0602017805','nurh.unsiq@gmail.com','Sekretaris Program Studi Teknik Informatika','asisten ahli','nur-hasanah.jpeg','Manajemen Informatika',NULL,'2023-08-01 14:57:43'),
(13,'Sukowiyono, M.Pd.','0608048802','suko34497@gmail.com','Dosen','asisten ahli','suko-wiyono.jpeg','Teknik Informatika',NULL,NULL),
(14,'Muhamad Fuat Asnawi, S.Kom., M.M.','0629088901','fuatasnawi@unsiq.ac.id','Dosen','asisten ahli','fuat-asnawi.jpeg','Manajemen Informatika',NULL,NULL),
(15,'Rina Mahmudati, M.Pd.','0622038901','rinamahmud056@gmail.com','Dosen','asisten ahli','rina-mahmudati.jpeg','Teknik Informatika',NULL,NULL),
(16,'Saifu Rohman, M.Kom.','0608118101','rohman_saifu@yahoo.com','Dosen','asisten ahli','saifu-rohman.jpeg','Manajemen Informatika',NULL,NULL),
(17,'Dimas Prasetyo Utomo, M. Kom','0629068801','vikiran.dpu@gmail.com','Dosen','asisten ahli','dimas-prasetyo-utomo.jpeg','Teknik Informatika',NULL,NULL),
(18,'Iman Ahmad Ihsannuddin, S.Pd.Kom., M.Pd','0627079402','ahmadihsan@unsiq.ac.id','Dosen','asisten ahli','iman-ahmad-ihsannuddin.jpeg','Teknik Informatika',NULL,NULL),
(19,'Ma\'arif, M.Kom.','','maarifnurhamim@gmail.com','Dosen','asisten ahli','maarif.jpeg','Teknik Informatika',NULL,NULL),
(20,'Luqman Hakim, ST.,MT.','1020128301','luqmanhakim.pku@gmail.com','Dosen','asisten ahli','luqman-hakim.jpeg','Teknik Informatika',NULL,NULL);
/*!40000 ALTER TABLE `dosens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_mahasiswas`
--

DROP TABLE IF EXISTS `event_mahasiswas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_mahasiswas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `content_html` text DEFAULT NULL,
  `content_json` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_mahasiswas`
--

LOCK TABLES `event_mahasiswas` WRITE;
/*!40000 ALTER TABLE `event_mahasiswas` DISABLE KEYS */;
INSERT INTO `event_mahasiswas` VALUES
(1,'Euphoria Teknik Informatika 22','euphoria-teknik-informatika-22','2023-08-08','event_1_euphoria-teknik-informatika-22.jpg','<h2>Euphoria teknik informatika 2022</h2><p>merupakan kegiatan peringatan Dies Natalis Prodi Teknik Informatika yang berisi berbagai kegiatan mahasiswa yang menarik</p><p>kepoin terus di ig himti @himtiunsiq <a target=\"_blank\" rel=\"noopener noreferrer\">https://instagram.com/himtiunsiq/</a></p>','{\"type\":\"doc\",\"content\":[{\"type\":\"heading\",\"attrs\":{\"level\":2},\"content\":[{\"type\":\"text\",\"text\":\"Euphoria teknik informatika 2022\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"merupakan kegiatan peringatan Dies Natalis Prodi Teknik Informatika yang berisi berbagai kegiatan mahasiswa yang menarik\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"kepoin terus di ig himti @himtiunsiq \"},{\"type\":\"text\",\"marks\":[{\"type\":\"link\",\"attrs\":{\"href\":null,\"target\":\"_blank\",\"class\":null}}],\"text\":\"https://instagram.com/himtiunsiq/\"}]}]}','2023-08-03 19:04:30','2023-08-03 19:04:30');
/*!40000 ALTER TABLE `event_mahasiswas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fasilitas`
--

DROP TABLE IF EXISTS `fasilitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fasilitas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fasilitas`
--

LOCK TABLES `fasilitas` WRITE;
/*!40000 ALTER TABLE `fasilitas` DISABLE KEYS */;
INSERT INTO `fasilitas` VALUES
(1,'Lab Komputer','Komputer saat ini menjadi kebutuhan hampir disetiap kegiatan, lab komputer kami disediaakan untuk mendukung pembelajaran terutama prodi informatika','lab-komputer_64caef5c47fab.jpg','2023-08-02 17:05:48','2023-08-02 17:05:48'),
(2,'Perpustakaan','Menyedikan pustaka lengkap baik buku dalam negeri maupun luar negeri, anda akan menjumpai berbagai buku, literatur, diktat kuliah, majalah dan referensi','perpustakaan_64caef96b15ac.jpg','2023-08-02 17:06:46','2023-08-02 17:06:46');
/*!40000 ALTER TABLE `fasilitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info_akademiks`
--

DROP TABLE IF EXISTS `info_akademiks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info_akademiks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `dokumen` varchar(255) DEFAULT NULL,
  `content_html` text DEFAULT NULL,
  `content_json` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_akademiks`
--

LOCK TABLES `info_akademiks` WRITE;
/*!40000 ALTER TABLE `info_akademiks` DISABLE KEYS */;
INSERT INTO `info_akademiks` VALUES
(1,'Kurikulum','kurikulum',NULL,'<p>Halo Dunia</p>','{\"type\":\"doc\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Halo Dunia\"}]}]}','2023-08-01 14:28:03','2023-08-01 14:28:03'),
(2,'Tugas Akhir','tugas-akhir',NULL,'<p>Halo Dunia</p>','{\"type\":\"doc\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Halo Dunia\"}]}]}','2023-08-01 14:28:03','2023-08-01 14:28:03'),
(3,'Kerja Praktek','kerja-praktek',NULL,'<h2>Dokumen Panduan Kerja Praktek Teknik Informatika</h2><p>Unduh disini: <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://drive.google.com/drive/folders/1ZHrzl6gVMHDhNGtlMLMYtX-ktL26biAu\">https://drive.google.com/drive/folders/1ZHrzl6gVMHDhNGtlMLMYtX-ktL26biAu</a></p>','{\"type\":\"doc\",\"content\":[{\"type\":\"heading\",\"attrs\":{\"level\":2},\"content\":[{\"type\":\"text\",\"text\":\"Dokumen Panduan Kerja Praktek Teknik Informatika\"}]},{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Unduh disini: \"},{\"type\":\"text\",\"marks\":[{\"type\":\"link\",\"attrs\":{\"href\":\"https://drive.google.com/drive/folders/1ZHrzl6gVMHDhNGtlMLMYtX-ktL26biAu\",\"target\":\"_blank\",\"class\":null}}],\"text\":\"https://drive.google.com/drive/folders/1ZHrzl6gVMHDhNGtlMLMYtX-ktL26biAu\"}]}]}','2023-08-01 14:28:03','2023-08-02 07:02:25'),
(4,'MBKM Kampus Merdeka','mbkm-kampus-merdeka',NULL,'<p>Halo Dunia</p>','{\"type\":\"doc\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Halo Dunia\"}]}]}','2023-08-01 14:28:03','2023-08-01 14:28:03'),
(5,'Kalender Akademik','kalender-akademik',NULL,'<p>Halo Dunia</p>','{\"type\":\"doc\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Halo Dunia\"}]}]}','2023-08-01 14:28:03','2023-08-01 14:28:03');
/*!40000 ALTER TABLE `info_akademiks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(22,'2014_10_12_000000_create_users_table',1),
(23,'2014_10_12_100000_create_password_reset_tokens_table',1),
(24,'2019_08_19_000000_create_failed_jobs_table',1),
(25,'2019_12_14_000001_create_personal_access_tokens_table',1),
(26,'2023_07_23_043257_create_artikels_table',1),
(27,'2023_07_27_130209_create_visis_table',1),
(28,'2023_07_27_130213_create_misis_table',1),
(29,'2023_07_27_130224_create_tujuans_table',1),
(30,'2023_07_27_130230_create_profil_lulusans_table',1),
(31,'2023_07_28_030244_create_dosens_table',1),
(32,'2023_07_29_122132_create_fasilitas_table',1),
(33,'2023_07_29_141345_create_akreditasis_table',1),
(34,'2023_07_29_234839_create_unduhans_table',1),
(35,'2023_07_30_144504_create_prestasis_table',1),
(36,'2023_07_31_011204_create_event_mahasiswas_table',1),
(37,'2023_07_31_023901_create_program_kerjas_table',1),
(38,'2023_07_31_045002_create_info_akademiks_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `misis`
--

DROP TABLE IF EXISTS `misis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `misis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `misi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `misis`
--

LOCK TABLES `misis` WRITE;
/*!40000 ALTER TABLE `misis` DISABLE KEYS */;
INSERT INTO `misis` VALUES
(1,'Menyelenggarakan pendidikan Strata Satu di bidang rekayasa perangkat lunak dan sistem cerdas, dengan menanamkan nilai-nilai Al-Qur\'an','2023-08-01 14:27:47','2023-08-01 14:27:47'),
(2,'Menyelenggarakan penelitian yang bersifat inovatif dan kontributif terhadap pengembangan ilmu pengetahuan dan teknologi di bidang rekayasa perangkat lunak dan sistem cerdas','2023-08-01 14:27:47','2023-08-01 14:27:47'),
(3,'Melaksanakan pengabdian kepada masyarakat melalui pendampingan, pengembangan, dan penyebaran produk teknologi informasi untuk meningkatkan kesejahteraan hidup berasaskan Qur\'ani','2023-08-01 14:27:47','2023-08-01 14:27:47'),
(4,'Membangun dan mengembangkan hubungan kerjasama dengan semua pemangku kepentingan','2023-08-01 14:27:47','2023-08-01 14:27:47');
/*!40000 ALTER TABLE `misis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prestasis`
--

DROP TABLE IF EXISTS `prestasis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prestasis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `juara` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `nama_kompetisi` varchar(255) NOT NULL,
  `tingkatan` enum('kampus','kabupaten','provinsi','nasional','internasional') NOT NULL,
  `penyelenggara` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestasis`
--

LOCK TABLES `prestasis` WRITE;
/*!40000 ALTER TABLE `prestasis` DISABLE KEYS */;
INSERT INTO `prestasis` VALUES
(1,'Juara 1','2022-11-11','Ahmad Ma\'ruf (2020), M. Restu Prayoga (2020), Rifig Al Wafaa (2022) Menjuarai lomba web programming pada Festival Teknologi Jawa Tengah di UMP Purwokerto','Web Programming FTJ 2022','provinsi','Permikomnas Jawa Tengah','juara-1-web-programming-ftj-2022-2022-11-11-64cc0ae831948.jpg','2023-08-03 13:15:36','2023-08-03 13:15:36'),
(2,'Juara 2','2022-11-11','M. Kresna Mahardhika (2021) menjuarai lomba desain poster di Festival Teknologi Jawa Tengah 2022','Lomba Poster FTJ 2022','provinsi','Permikomnas Jawa Tengah','juara-2-lomba-poster-ftj-2022-2022-11-11-64cc0cdb77409.jpg','2023-08-03 13:23:55','2023-08-03 13:23:55'),
(3,'Juara 3','2022-11-11','Nandar Sulistiawan (2020) menjuarai lomba UI/UX Festival Teknologi Jawa Tengah 2022','UI/UX FTJ 2023','provinsi','Permikomnas Jawa Tengah','juara-3-uiux-ftj-2023-2022-11-11-64cc0d14ae870.jpg','2023-08-03 13:24:52','2023-08-03 13:24:52');
/*!40000 ALTER TABLE `prestasis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profil_lulusans`
--

DROP TABLE IF EXISTS `profil_lulusans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profil_lulusans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `profil_lulusan` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profil_lulusans`
--

LOCK TABLES `profil_lulusans` WRITE;
/*!40000 ALTER TABLE `profil_lulusans` DISABLE KEYS */;
INSERT INTO `profil_lulusans` VALUES
(1,'System Analyst','System Analyst adalah seseorang yang mempunyai kemampuan untuk bertanggungjawab dalam melakukan analisis terhadap sistem dalam suatu instansi atau perusahaan dan membuat solusi yang integratif dengan memanfaatkan perangkat lunak','2023-08-01 14:27:54','2023-08-01 14:27:54'),
(2,'Software Developer','Software Developer adalah seseorang yang terlibat dalam fase-fase pengembangan perangkat lunak yang meliputi penggalian kebutuhan, analisis, perancangan, pemrograman, dan pengujian perangkat lunak','2023-08-01 14:27:54','2023-08-01 14:27:54'),
(3,'Database Administrator','Database Administrator adalah seseorang yang pekerjaannya terkait dengan perancangan pengimplementasian, dan pemeliharaan basis data','2023-08-01 14:27:54','2023-08-01 14:27:54'),
(4,'Intelegent System Developer','Intelegent System Developer adalah seseorang yang mampu mengembangkan perangkat lunak yang bersifat intelejen seperti sistem pakar, soft computing, sistem prediksi, data mining, dan sebagainya','2023-08-01 14:27:54','2023-08-01 14:27:54'),
(5,'Data Scientist','Data Scientist adalah seseorang yang mampu mengolah data dengan metode ilmiah untuk menghasilkan informasi yang akurat dan bernilai tinggi sehingga dapat membantu pengambilan keputusan','2023-08-01 14:27:54','2023-08-01 14:27:54'),
(6,'Software Consultant','Software Consultant adalah seseorang yang memberi jasa berupa konsultasi yang berkaitan dengan pengembangan perangkat lunak kepada klien','2023-08-01 14:27:54','2023-08-01 14:27:54'),
(7,'Educator and Researcher','Lulusan Teknik Informatika dapat bekerja sebagai pendidik seperti guru, dosen, atau peneliti','2023-08-01 14:27:54','2023-08-01 14:27:54'),
(8,'Technopreneur','Technopreneur adalah seseorang yang memiliki usaha di bidang teknologi','2023-08-01 14:27:54','2023-08-01 14:27:54');
/*!40000 ALTER TABLE `profil_lulusans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `program_kerjas`
--

DROP TABLE IF EXISTS `program_kerjas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `program_kerjas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `program_kerjas`
--

LOCK TABLES `program_kerjas` WRITE;
/*!40000 ALTER TABLE `program_kerjas` DISABLE KEYS */;
INSERT INTO `program_kerjas` VALUES
(1,'Pesta Ceria Informatika','Kegiatan pengenalan kampus bagi mahasiswa baru yang disusun secara menarik, tanpa perpeloncoan dan dibuat menyesuaikan kebutuhan mahasiswa baru','2023-08-03 06:38:09','2023-08-03 06:38:09'),
(2,'Dies Natalis Teknik Informatika','Kegiatan mahasiswa untuk merayakan hari jadi prodi Teknik Infromatika UNSIQ. Dalam acara ini terdapat berbagai kegiatan menarik yang mengasah keterampilan dan kreativitas mahasiswa','2023-08-03 06:38:09','2023-08-03 06:38:09'),
(3,'Seminar Kerja Praktek','Kegiatan seminar bagi mahasiswa yang mengambil mata kuliah Kerja Praktek (KP). Seminar ini menjadi syarat untuk memperoleh nilai mata kuliah KP','2023-08-03 06:38:09','2023-08-03 06:38:09'),
(4,'Pembuatan Pakaian Dinas Harian (PDH)','Kegiatan pembuatan PDH bagi pengurus dan anggota HIMTI sebagai wujud identitas mahasiswa Teknik Informatika UNSIQ. Pembuatan PDH ini juga sebagai kegiatan dana usaha HIMTI','2023-08-03 06:38:09','2023-08-03 06:38:09'),
(5,'Ziarah dan Bakti Sosial','Kegiatan ini sebagai wujud pengamalan kita sebagai mahasiswa UNSIQ yang berbasis pesantren, serta wujud pengabdian masyarakat','2023-08-03 06:38:09','2023-08-03 06:38:09'),
(6,'Himtipedia','Kegiatan pembuatan konten edukatif pada platform Instagram. Melalui kegiatan ini diharapkan mampu menambah khasanah pengetahuan mahasiswa','2023-08-03 06:38:09','2023-08-03 06:38:09'),
(7,'HimtiNews','HimtiNews merupakan kegiatan yang berisi penyampaian informasi penting secara cepat mengenai perkuliahan di lingkup Teknik Informatika,','2023-08-03 06:38:09','2023-08-03 06:38:09'),
(8,'Ngaji Koding (NganKod)','Kegiatan pelatihan pemrograman bagi anggota, sebagai wujud komitmen dan usaha HIMTI untuk membantu kegiatan akademis mahasiswa','2023-08-03 06:38:09','2023-08-03 06:38:09'),
(9,'Ngobrol Bareng (Ngobar)','Kegiatan berupa talkshow untuk sosialisasi atau pengenalan mengenai perkuliahan dan berbagi pengalaman seputar dunia IT yang melibatkan mahasiswa Teknik Informatika','2023-08-03 06:38:09','2023-08-03 06:38:09'),
(10,'Compe-TI-tion','CompeTItion Merupakan ajang perlombaan baik perlombaan yang mengarah ke akademik maupun non akademik sebagai salah satu sarana pengembangan minat dan bakat mahasiswa','2023-08-03 06:38:09','2023-08-03 06:38:09'),
(11,'Serap Aspirasi','Usaha pengumpulan aspirasi, kritik, dan saran terhadap oganisasi HIMTI. Sehingga HIMTI dapat terus berkembang menjadi lebih baik lagi','2023-08-03 06:38:09','2023-08-03 06:38:09'),
(12,'Safari Kampus & HIMTI Guest Host','Dengan aktifnya HIMTI dalam PERMIKOMNAS (Perhimpunan Mahasiswa Informatika dan Komputer Nasional) Menjadikan HIMTI sering berkunjung dan dikunjungi oleh Himpunan dari kampus lain','2023-08-03 06:38:09','2023-08-03 06:38:09'),
(13,'Studi Banding','Kegiatan sarana saling berbagi informasi dengan lembaga lain. Program ini bertujuan untuk menambah wawasan untuk memajukan himti supaya lebih baik lagi','2023-08-03 06:38:09','2023-08-03 06:38:09');
/*!40000 ALTER TABLE `program_kerjas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tujuans`
--

DROP TABLE IF EXISTS `tujuans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tujuans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tujuan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tujuans`
--

LOCK TABLES `tujuans` WRITE;
/*!40000 ALTER TABLE `tujuans` DISABLE KEYS */;
INSERT INTO `tujuans` VALUES
(1,'Menghasilkan sarjana komputer yang mampu melakukan analisis, perencanaan pengembangan, pengujian,  pengawasan perangkat lunak dan penerapan sistem cerdas dengan tetap menjunjung tinggi nilai-nilai Al-Qur\'an','2023-08-01 14:27:47','2023-08-01 14:27:47'),
(2,'Memberikan kontribusi dalam pengembangan teknologi informasi bidang perangkat lunak dan sistem cerdas dalam bentuk produk hasil penelitian yang inovatif','2023-08-01 14:27:47','2023-08-01 14:27:47'),
(3,'Menghasilkan perangkat lunak dan sistem cerdas terapan sebagai solusi permasalahan untuk meningkatkan kualitas hidup masyarakat berasaskan Qur\'ani','2023-08-01 14:27:47','2023-08-01 14:27:47'),
(4,'Meningkatkan kualitas dan efektivitas kerjasama dengan seluruh pemangku kepentingan yang mendukung pengembangan teknologi informasi','2023-08-01 14:27:47','2023-08-01 14:27:47');
/*!40000 ALTER TABLE `tujuans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unduhans`
--

DROP TABLE IF EXISTS `unduhans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unduhans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `is_link` tinyint(1) NOT NULL DEFAULT 0,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unduhans`
--

LOCK TABLES `unduhans` WRITE;
/*!40000 ALTER TABLE `unduhans` DISABLE KEYS */;
INSERT INTO `unduhans` VALUES
(1,'Buku Panduan KP Teknik Informatika','Buku Panduan Kerja Praktek Prodi Teknik Informatika',1,'https://drive.google.com/drive/folders/1ZHrzl6gVMHDhNGtlMLMYtX-ktL26biAu?usp=share_link','2023-08-02 17:29:25','2023-08-02 17:29:25'),
(2,'Form Pengajuan Judul & Topik Kerja Praktek','Form Pengajuan Judul & Topik Kerja Praktek Teknik Informatika',0,'unduhan_form-pengajuan-judul-topik-kerja-praktek_64caf52f1d2fc.pdf','2023-08-02 17:30:39','2023-08-02 17:30:39'),
(3,'Panduan Tugas Akhir Teknik Informatika','Buku panduan Tugas Akhir Teknik Informatika',1,'https://drive.google.com/drive/folders/1Bk7k76R6y7Mk8DoLMyTLAELPtnEHUHcd','2023-08-02 17:32:00','2023-08-02 17:32:00');
/*!40000 ALTER TABLE `unduhans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'admin','admin@admin.com','2023-08-01 14:27:29','$2y$10$gfYHYUhaN.NpyUozaE0zjOSqhgrS9W9BcMwTNzlA1JqNoaH0WKPWy',NULL,'2023-08-01 14:27:29','2023-08-01 14:27:29');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visis`
--

DROP TABLE IF EXISTS `visis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `visi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visis`
--

LOCK TABLES `visis` WRITE;
/*!40000 ALTER TABLE `visis` DISABLE KEYS */;
INSERT INTO `visis` VALUES
(1,'Menjadi program studi Teknik Informatika yang unggul dalam bidang rekayasa perangkat lunak dan sistem cerdas yang Qur\'ani di tingkat nasional pada tahun 2031','2023-08-01 14:27:47','2023-08-01 14:27:47');
/*!40000 ALTER TABLE `visis` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-04  9:47:02
