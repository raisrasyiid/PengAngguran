-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 07:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengangguran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `idAdmin` int(2) NOT NULL,
  `userName` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`idAdmin`, `userName`, `password`) VALUES
(11, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `idBlog` int(5) NOT NULL,
  `judul_blog` varchar(200) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `cover_blog` varchar(100) DEFAULT NULL,
  `isi_blog` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`idBlog`, `judul_blog`, `tanggal`, `cover_blog`, `isi_blog`) VALUES
(6, 'Manfaat Buah Anggur Bagi Kesehatan', '2023-06-27', 'gunter-hoffmann-LYaW8eq3mjs-unsplash.jpg', 'Berikut adalah beberapa manfaat yang didapatkan saat mengkonsumsi buah anggur : \r\n1. Mengatasi gangguan pembuluh darah dan jantung Kandungan polifenol di dalam buah anggur diyakini mampu membantu mencegah gangguan jantung, melawan radikal bebas, memiliki efek antiradang dan antiplatelet sehingga mampu menurunkan risiko terjadinya tekanan darah tinggi dan aterosklerosis, serta menunjang fungsi endotel. \r\n\r\n2. Mencegah penyakit kanker Kulit dan ekstrak biji buah anggur mengandung bahan alami yang mampu membantu memperlambat atau mencegah berbagai jenis kanker, termasuk mulut, esofagus, faring, paru-paru, endometrium, usus besar, pankreas, dan prostat. \r\n\r\n3. Mengurangi gejala insufisiensi vena kronis Selain mencegah kanker, ekstrak biji buah anggur juga bisa membantu mengurangi gejala insufisiensi vena kronis, seperti kaki terasa berat, lelah, tegang, nyeri dan kesemutan. Menurut penelitian, ekstrak daun anggur tertentu mampu mengurangi kaki bengkak setelah 6 minggu. \r\n\r\n4. Menurunkan tekanan darah tinggi Menurut penelitian, kandungan antioksidan yang tinggi di dalam buah anggur bisa membantu menurunkan tekanan darah tinggi. Selain itu, buah anggur juga tinggi akan kandungan kalium yang membantu menghilangkan efek natrium dalam tubuh, sehingga tekanan darah tinggi bisa dikurangi. \r\n\r\n5. Meningkatkan daya ingat Penelitian menunjukkan bahwa buah-buahan yang kaya akan antioksidan bisa membantu mengurangi stres oksidatif sehingga memperlambat penuaan, meningkatkan kinerja memori verbal dan fungsi motorik, serta mengatasi gangguan saraf otak, misalnya pada penyakit Alzheimer.'),
(8, 'Trik Merawat Tanaman Anggur Cepat Berbuah dan Manis', '2023-06-26', 'mi.jpg', '1. Teknik penyiraman Anggur merupakan salah satu tanaman yang mudah mengalami stres atau jenuh air. Kareena itu, lakukan penyiraman secukupnya saja, Mama Papa. Agar tanaman anggur cepat berbuah, maksimal lakukan penyiraman 3 kali setiap minggu. Penyiraman ini hanya dilakukan saat musim kemarau saja, ya. Jika musim hujan tiba, tanaman anggur tidak perlu disiram, karena malah akan merusak tanaman. 2. Pupuk yang tepat Kesalahan banyak orang saat menaman tanaman anggur adalah memberikan pupuk dengan dosis terlalu berlebihan. Penginnya, sih, supaya tanaman anggur cepat berbuah, tapi hal ini malah terjadi sebaliknya. Supaya tanaman anggur cepat berbuah, dosis pupuk yang diberikan harus diperhatikan dengan baik. Dalam satu pot tanaman anggur cukup diberikan pupuk 1-2 sendok makan saja. Jenis pupuk yang digunakan juga harus pupuk yang mengandung unsur N, P, dan K. Karena pupuk jenis ini akan menunjang kesuburan dan kegemburan tanah. Tak kalah penting waktu pemberian pupuk dilakukan ketika anggur telah berusia 90 hari. Sementara pemupukan lanjutan bisa Mama Papa lakukan setiap satu bulan sekali. 3. Sinar matahari Anggur yang kekurangan cahaya matahari akan lebih sulit untuk bertumbuh, apalagi berbuah. Maka dari itu, supaya tanaman anggur cepat berbuah Mama Papa harus memastikan kebutuhan sinar matahari tercukupi. Pastikan tanaman anggur mendapatkan sinar matahari minimal 6 jam dalam sehari. Pindahkan pot anggur dari lokasi yang basah, teduh, dan sirkulasi udaranya buruk. Karena area ini bisa membuat anggur tumbuh kurang baik, lo! '),
(9, 'Pengendalian Hama Tanaman Anggur', '2023-06-23', 'hama11.png', 'Untuk itu Pengendalian Hama Tanaman Anggur harus dilakukan dengan cepat dan tepat, berikut ini penjelasannya:\r\n\r\nMenjaga kebersihan kebun\r\nMemangkas daun dan cabang agar tidak terlalu rimbun\r\nMembuang ulat secara manual dengan tangan\r\nPenyemprotan insektisida\r\nAdapun jenis, dosis dan cara aplikasi insektisida untuk pengendalian ulat grayak dan belalang pada tanaman anggur adalah sebagai berikut :\r\n\r\nSiapkan insektisida kontak berbahan aktif BPMC 500g/l dengan dosis 3-4 ml/liter air.\r\n\r\nCampurkan ke dalam air sesuai dosis dan kebutuhan, aduk hingga merata, masukkan ke dalam sprayer. Semprotkan larutan insektisida tersebut ke seluruh bagian tanaman terserang, semprotkan pula pada tanaman yang belum terserang untuk pencegahan.\r\n\r\nHasil aplikasi insektisida biasanya dapat dilihat setelah 30 menit dari penyemprotan yang ditandai dengan jatuhnya ulat-ulat dari tanaman. Dan jika dalam 3 hari sejak penyemprotan masih terdapat serangan hama, penyemprotan dapat di ulang.\r\n\r\n'),
(10, 'Cara Budidaya Anggur di Halaman Rumah', '2023-06-28', 'jose-alfonso-sierra-K-VkvGjaMtI-unsplash.jpg', '1. Membuat Bibit Anggur Untuk Ditanam di Halaman Rumah\r\nBibit anggur dapat dibuat dengan cara mencangkok pohon anggur yang memiliki kualitas unggulan, yang tentunya tidak berpenyakitan. Upayakan untuk mencangkok bagian batang anggur yang tegak, sehingga bibit yang dihasilkan pun mudah untuk ditanam, baik di pot maupun langsung di tanah. Bibit anggur cangkokan ini dapat Anda tanam setelah masa pencangkokan sekitar 6-7 bulan.\r\n2. Persiapan Menanam Anggur di Halaman Rumah\r\n- Siapkan alat penyangga sebagai media tumbuhnya pohon anggur. Penyangga ini dapat dibuat dari kayu atau besi, tergantung keinginan Anda. Untuk ketinggian penyangga, Anda dapat menyesuaikan dengan kebutuhan.\r\n- Untuk Anda yang hendak menanam anggur pada pot. Anda dapat menyiapkan pot yang sudah dilubangi bagian bawahnya, pilih pot yang memiliki ukuran sedang agar akar anggur dapat tumbuh dengan baik. \r\n- Untuk tanah yang cocok untuk menanam anggur ini, Anda dapat mencampurkan tanah dengan kompos dengan perbandingan 1:2.\r\n\r\nCara menanam bibit cangkokan anggur ini pun tidak dapat dilakukan secara sembarangan: \r\n- Anda perlu membuka bungkus cangkokan baik itu plastik atau media lainnya. \r\n- Setelah itu, buatlah lubang tanah di bagian tengah pot untuk meletakan hasil cangkokan ini. \r\n- Bibit ini tidak dapat langsung Anda tempatkan di halaman rumah, Anda perlu menaruhnya di tempat yang sejuk terlebih dahulu dalam jangka 3 minggu masa penanaman pertama. Hal ini tentunya untuk membuat bibit anggur dapat menyesuaikan dengan media tanam yang baru. Pada masa ini Anda juga harus rajin menyirami bibit anggur ini.\r\n\r\n3. Perawatan Untuk Anggur Yang Ditanam di Halaman Rumah\r\n-  Anda dapat melakukan penyiraman intensif sebanyak dua kali dalam sehari. Hanya saja ketika usia pohon anggur sudah melebihi 3 bulan, Anda dapat melakukan penyiraman dua hari sekali sudah cukup. \r\n- Anda diharapkan mampu memberi pupuk sebagai tambahan nutrisi untuk pertumbuhan pohon anggur yang Anda miliki. Pupuk yang terbukti ampuh untuk pertumbuhan buah anggur ini adalah kombinasi antara pupuk NPK dengan pupuk kandang. Pupuk NPK dapat Anda berikan pada usia antara 10 hari hingga 6 bulan dengan kadar yang sesuai. Sementara setelah usia pohon anggur mencapai 1.5 tahun, Anda dapat menambahkan pupuk kandang. Jika perlu Anda juga dapat menambahkan pupuk jenis lainnya yakni pupuk KCL pada masa 2 tahun setelah penanaman bibit anggur.\r\n- Pemangkasan ranting dan cabang pohon anggur yang berserakan atau tidak rapi sangat penting karena mempengaruhi munculnya buah anggur itu sendiri. Ranting yang telah ditebang akan menghasilkan tunas baru dan bunga anggur pun bermunculan. Bunga inilah yang kemudian akan berubah menjadi buah anggur yang sangat lezat dan segar.'),
(11, 'Cara Menanam Anggur Dalam Pot', '2023-06-13', 'yo.jpg', 'Selain menanam anggur di pekarangan, kamu juga dapat menanam tanaman ini di pot. Tidak memerlukan benih, penanaman anggur bisa dilakukan dari biji. Namun cara menanam anggur dari biji memerlukan waktu yang sangat lama untuk menghasilkan buah.\r\n\r\nCara menanam biji anggur yang benar adalah sebagai berikut:\r\n\r\nBelilah biji anggur dengan varietas yang sesuai dengan cuaca tempat tinggal. Jangan memakai biji dari anggur yang kamu makan karena mungkin tidak akan bertunas atau menghasilkan tanaman seperti aslinya.\r\nRendam benih dalam air hangat selama 24 jam. Masukkan ke dalam wadah kecil yang berisikan lumut gambut basah.\r\nTutup dan simpan wadah di lemari es dengan suhu 2-5 derajat Celsius selama tiga bulan.\r\nSetelah 3 bulan, pindahkan benih ke media tanam anggur dengan kedalaman tiga kali lebih dalam dari panjangnya. Taburkan benih dengan jarak 4cm, simpan di bawah sinar lampu selama 16 jam sehari. Benih akan berubah menjadi bibit dalam waktu 2 minggu hingga 2 bulan.\r\nSaat sudah muncul dua set daun pada bibit, pindahkan bibit ke dalam pot berdiameter 10cm. Kembali pindahkan tanaman ke pot yang lebih besar 6 minggu setelah ditanam.\r\nApabila jumlah daun sudah bertambah mejadi 8 set, letakkan pada tempat yang teduh sebelum kemudian bertahap dipindah ke area terpapar sinar matahari. Cara merawat pohon anggur dengan menyiramnya menggunakan 16ml air tiap minggu. Pemberian pupuk bisa diberikan sesuai dengan aturan yang tertera di kemasan produk pilihan.'),
(12, '10 Jenis Bibit Anggur yang Cocok Ditanam di Halaman Rumah', '2023-06-24', 'y.jpg', '1. Akademik Avidzba\r\nAkademik avidzba bisa tumbuh di daerah dataran rendah dengan kondisi iklim yang sangat panas seperti di Indonesia.\r\nBuah ini memiliki bentuk yang unik ketimbang jenis anggur lainnya, yakni berbentuk bulat lonjong dengan warna hitam.\r\n2. Anggur Banana\r\nBanana merupakan jenis anggur impor Jepang hasil persilangan antara varietas Pisutelo bianco dengan varietas Manicure finger. \r\n3. Black Panther\r\nBlack Panther termasuk ke dalam kategori bibit anggur terbaik karena memiliki tingkat adaptasi yang baik.\r\nJenis bibit ini mampu bertahan dalam suhu ekstrem dan terbilang gampang berbuah di wilayah Indonesia.\r\nSelain itu, bibit Black Panther banyak dicari karena memiliki fase pematangan buah yang singkat, yaitu sekitar kurang lebih 100 hari.\r\n4. Anggur Dixon\r\nBuah yang satu ini berwarna merah kehijauan dan memiliki rasa yang manis.\r\nNamun, karena memerlukan waktu yang lebih lama, yakni minimal satu tahun dengan perawatan ekstra membuat anggur ini jarang dibudidayakan.\r\nPerawatannya juga perlu ekstra karena secara bibit ini akan berbuah secara maksimal ketika sudah berusia empat tahun.\r\n5. Anggur Harold\r\nBibit Harold yang bagus bisa menghasilkan buah anggur dengan rasa fantastis, karena rasa asam dan manis berpadu menjadi satu.\r\nBuah dari bibit Harold juga mempunyai waktu pematangan buah yang cepat sehingga banyak orang memilih untuk menanamnya. Jika sudah matang, Harold akan berwarna kuning dengan bentuk oval sedikit runcing pada bagian ujungnya.\r\n6. Anggur Julian\r\nBibit Julian memiliki masa pematangan buah yang singkat, sekitar kurang lebih 100 hari.\r\n\r\nJenis ini banyak dicari para pecinta tanaman karena perawatan yang terbilang mudah.\r\nAnggur Julian mempunyai kulit buah berwarna pink kekuning-kuningan.\r\nDengan bentuk oval agak sedikit lonjong, Julian memiliki ciri daging buah yang tebal padat tetapi renyah.\r\n7. Anggur Jupiter\r\nJupiter adalah jenis anggur yang paling favorit di Indonesia karena sifatnya yang gampang berbuah.\r\nSelain itu bibit jenis ini menjadi paling banyak dicari karena memiliki varian seedless atau tanpa biji.\r\nKulitnya berwarna merah keunguan ketika sudah matang, dan berbentuk oval. Tekstur dagingnya renyah, tebal, dan tanpa biji.\r\n8. Anggur Ninel\r\nJenis bibit anggur Ninel juga menjadi salah satu jenis anggur paling banyak dicari masyarakat Indonesia.\r\n\r\nMeski berasal dari Ukraina, bibit anggur Ninel gampang dikembangkan dan tidak mengenal musim yang tentu saja membuatnya mudah ditanam di rumah.\r\nAnggur Ninel memiliki warna kulit merah dan berbentuk oval.\r\nSelain itu, ciri khas anggur Ninel adalah rasanya yang sangat manis.\r\n9. Anggur Taldun\r\nTaldun merupakan varietas anggur yang cocok ditanam di Indonesia baik di dalam pot, tanah langsung, atau planter bag besar.\r\nAnggur ini juga cepat berbuahnya, yakni sekitar enam bulan untuk merasakan buahnya.\r\n10. Anggur Victor\r\nMeski tidak semudah merawat seperti anggur lainnya, bibit anggur Victor terbaik bisa menghasilkan daging buah yang lembut berair dan cita rasa yang lezat.\r\n\r\nAnggur Victor menjadi primadona karena bentuknya yang indah.\r\nWarna kulit anggur ini merah muda serta kuning di bagian luar, lalu berubah menjadi ungu tua kemerahan ketika sudah matang.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `idKat` int(5) NOT NULL,
  `namaKat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`idKat`, `namaKat`) VALUES
(10009, 'Peralatan'),
(10010, 'Bibit'),
(10013, 'Buah'),
(10014, 'Pupuk');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `idKonsumen` int(5) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `namaKonsumen` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `idKota` int(4) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tlpn` int(20) DEFAULT NULL,
  `statusAktif` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`idKonsumen`, `username`, `password`, `namaKonsumen`, `alamat`, `idKota`, `email`, `tlpn`, `statusAktif`) VALUES
(10010, 'ikap', 'ikap', 'Ika Purwanti', 'Tulip Dormitory, Jalan Mancasan Indah III, Depok, Sleman, Yogyakarta', NULL, 'ikapurwanti@students.amikom.ac.id', 2147483647, 'Y'),
(10011, 'member', 'member', 'Member', 'Yogyakarta', NULL, 'member@gmail.com', 2147483647, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `idProduk` int(5) NOT NULL,
  `idKat` int(5) DEFAULT NULL,
  `idToko` int(5) DEFAULT NULL,
  `namaProduk` varchar(200) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `stok` int(5) DEFAULT NULL,
  `berat` int(5) DEFAULT NULL,
  `deskripsiProduk` text DEFAULT NULL,
  `informasi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`idProduk`, `idKat`, `idToko`, `namaProduk`, `foto`, `harga`, `stok`, `berat`, `deskripsiProduk`, `informasi`) VALUES
(17, 10009, 10, 'Sekop ', 'andres-siimon-QwkqiuQLqBc-unsplash1.jpg', 50000, 10, 1, 'SEKOP CARMEN High Quality ORI 100%', 'Deskripsi:\r\n-Gagang Pegangan Super Grip, Bertekstur Karet Dan Empuk\r\n-Bahan Material Terbuat Dari Baja\r\n-Gagang Kayu kualitas Grade A\r\n-Cat menggunakan High Quality Powder Coating\r\n-Sistem 100% Hot Press\r\n\r\nSpesifikasi:\r\n-Panjang Daun Sekop : 30,5cm\r\n-Lebar Daun Sekop : 24,5cm\r\n-Panjang Keseluruhan : 100 cm\r\n-Daun Sekop : Baja berkualitas tinggi\r\n-Tebal Besi Sekop : 1 mm\r\n\r\nReady Stock, Siap kirim, Produk 100% original.\r\n\r\nToko kami menjual barang ORIGINAL & Garansi Resmi dari Pabrik. Apabila ada harga dibawah kami hati- hati barang palsu.\r\n\r\nCatatan:\r\nBarang kami cek dan packing sebaik mungkin dan seaman mungkin sebelum kirim, tapi mohon maaf untuk kerusakan akibat pengiriman/Ekspedisi kami tidak bisa bertanggung jawab.\r\nKomplain harus dengan video saat paket dibuka\r\nBarang yang sudah dibeli tidak bisa ditukar atau dikembalikan.'),
(19, 10009, 21, 'Buah Anggur Muscat', 'muscat1.jpg', 350000, 50, 1, 'Buah Anggur Jenis Muscat', 'Packing Size: 2pck = 1kg Buah anggur\r\nDan\r\nper 1pck = 500gr ya ka\r\n\r\nkualitas buah manis non biji memiliki rasa tersendirinya seperti jeli anggur muscat\r\nselagi iklan produk Masi tampil silakan di order saja ya ka stok ready'),
(20, 10009, 13, 'Planter Bag', 'planter22.jpg', 45000, 200, 1, 'PLANTER BAG 100 LITER HIJAU POLIBAG BESAR GROWING BAG POT', 'Media Tanam Berupa Planter Bag, berfungsi sebagai sebagai wadah tanaman atau pengganti pot yang mudah dipindah - pindahkan dan praktis awet dan tahan lama.\r\nBeberapa Keunggulan Planter Bag dari toko Kami :\r\n1. Mudah di taruh\r\n2. Memiliki sirkulasi udara yang cukup membuat tanaman lebih cepat tumbuh subur.\r\n3. Tersedia beberapa ukuran sesuai kebutuhan tanaman.\r\n4. Praktis dapat dilipat sebelum digunakan.\r\n5. Kuat terhadap kondisi cuaca Iklim Tropis'),
(21, 10009, 13, 'paket stek batang anggur', 'stek2.jpg', 50000, 1000, 1, 'Paket stek batang buah anggur', 'Bagi sobat yang ingin budidaya tanaman buah anggur. Bisa order batang stek di toko kami. Kami Jual Stek Batang anggur maupun Bibit Anggur yang sudah tumbuh. Tentunya dengan Harga Terjangkau.Perlu kita ketahui Sebenarnya menanam batang stek anggur tidaklah rumit. Sama halnya dengan menanam pohon singkong dari potongan batangnya.Cuma yang membedakan hanyalah karakteristik akar anggur yang tidak sama. Akar pohon anggur tidak tahan dengan kondisi tanah yang terlalu basah dengan waktu yang lama.Sementara itu yang diperlukan adalah menyiapkan media tanam yang sesuai untuk pertumbuhan akar dari Batang anggur itu sendiri.'),
(22, 10009, 13, 'Bibit anggur Ninel 1 meter', 'ninel1.jpg', 75000, 2, 1, 'Jenis Anggur Ninel', '#Keterangan\r\nKategori : Bibit Anggur\r\nJenis : Anggur Ninel\r\nPenyiraman : 2 X Sehari ( pagi dan sore )\r\n\r\nMedia yg cocok jenis bibit anggur agar cepat tumbuh dan berbuah menggunakan media fermentasi yaitu media lembab '),
(23, 10009, 10, 'Garden Tool set 5pcs ', 'garden1.png', 200000, 150, 1, 'Garden Tool set alat berkebun taman sekop 5pcs ', 'Set peralatan berkebun ini terdiri dari 10 buah jenis perlengkapan yang dapat digunakan untuk merawat tanaman Anda.\r\n\r\nMaterial Berkualitas\r\nPerlengkapan berkebun ini terbuat dari bahan besi pada bagian kepala sehingga sangat awet untuk digunakan dalam jangka waktu lama.'),
(24, 10013, 21, 'Buah Anggur Jupiter ', 'anggurmerah3.jpg', 50000, 1000, 1, 'Buah Anggur Jupiter ', 'Packing Size: 2pck = 1kg Buah anggur\r\nDan\r\nper 1pck = 500gr ya ka\r\n\r\nkualitas buah manis non biji memiliki rasa tersendirinya seperti jeli anggur muscat\r\nselagi iklan produk Masi tampil silakan di order saja ya ka stok ready'),
(25, 10009, 10, 'Pupuk Kompos Organik 10kg', 'pupuk2.jpg', 30000, 50, 10, 'Pupuk Kompos Organik 10kg ', 'dengan bahan kualitas terbaik sangat cocok buat semua tanaman Baek bunga dan buah maupun perkebunan komposisi pupuk kandang murni humus sekam bakar cocopeat dolomite phosphat manfaat meningkat unsur hara pada tanah populasi mikrotanah hingga mengembuskan tanah tidak berbau mengurangi derajat keasam an');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat_toko`
--

CREATE TABLE `tbl_surat_toko` (
  `idValidasi` int(5) NOT NULL,
  `idToko` int(5) DEFAULT NULL,
  `nama_pemilik` varchar(100) DEFAULT NULL,
  `foto_toko` varchar(100) DEFAULT NULL,
  `video_toko` varchar(100) DEFAULT NULL,
  `alamat_toko` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_toko`
--

CREATE TABLE `tbl_toko` (
  `idToko` int(5) NOT NULL,
  `idKonsumen` int(5) DEFAULT NULL,
  `namaToko` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `statusAktif` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_toko`
--

INSERT INTO `tbl_toko` (`idToko`, `idKonsumen`, `namaToko`, `logo`, `deskripsi`, `statusAktif`) VALUES
(10, 10011, 'Metro Kebun 77', 'logomemshops8.png', 'distributor perlengkapan perkebunan terlengkap, termurah dengan kualitas produk terbaik di Indonesia.', 'Y'),
(12, 10010, 'IkaShoop', 'logo_itc1.jpeg', 'Toko ika yang pertama', 'Y'),
(13, 10011, 'JogjaAnggur', 'logo_toko4.png', 'Toko JogjaAnggur menyediakan berbagai macam jenis anggur berkualitas yang pastinya manis serta menjadi pioner anggur lokal di yogyakarta.', 'Y'),
(21, 10011, 'Anggurin_aja', 'tokoo3.png', 'anggurin_aja berkomitmen menjaga kualitas varietas buah anggur terbaik di yogyakarata\r\n ', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`idBlog`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`idKat`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`idKonsumen`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`idProduk`),
  ADD KEY `idKat` (`idKat`),
  ADD KEY `idToko` (`idToko`);

--
-- Indexes for table `tbl_surat_toko`
--
ALTER TABLE `tbl_surat_toko`
  ADD PRIMARY KEY (`idValidasi`),
  ADD KEY `idToko` (`idToko`);

--
-- Indexes for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  ADD PRIMARY KEY (`idToko`),
  ADD KEY `idKonsumen` (`idKonsumen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `idAdmin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2137;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `idBlog` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `idKat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10016;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `idKonsumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10012;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `idProduk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_surat_toko`
--
ALTER TABLE `tbl_surat_toko`
  MODIFY `idValidasi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  MODIFY `idToko` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`idKat`) REFERENCES `tbl_kategori` (`idKat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_produk_ibfk_2` FOREIGN KEY (`idToko`) REFERENCES `tbl_toko` (`idToko`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_surat_toko`
--
ALTER TABLE `tbl_surat_toko`
  ADD CONSTRAINT `tbl_surat_toko_ibfk_1` FOREIGN KEY (`idToko`) REFERENCES `tbl_toko` (`idToko`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  ADD CONSTRAINT `tbl_toko_ibfk_1` FOREIGN KEY (`idKonsumen`) REFERENCES `tbl_member` (`idKonsumen`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
