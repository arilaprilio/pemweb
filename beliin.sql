-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2025 at 04:00 AM
-- Server version: 10.11.11-MariaDB-0ubuntu0.24.04.2
-- PHP Version: 8.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beliin`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `produk_id` int(5) DEFAULT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `produk_id`, `added_on`) VALUES
(1, 1, '2025-05-25 16:34:26'),
(2, 0, '2025-05-25 16:34:26'),
(3, 0, '2025-05-25 16:34:26'),
(4, 0, '2025-05-25 16:34:26'),
(5, 0, '2025-05-25 16:34:26'),
(6, 0, '2025-05-25 16:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `produk_id` int(10) DEFAULT NULL,
  `jumlah` int(10) NOT NULL DEFAULT 1,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `nama`) VALUES
(1, 'Tas dan Aksesori'),
(2, 'Perhiasan'),
(3, 'Dekorasi Rumah'),
(4, 'Alat Tulis dan Kantor'),
(5, 'Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_id` int(11) DEFAULT NULL,
  `total` decimal(12,2) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT 1,
  `harga` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nama` text DEFAULT NULL,
  `kategori` int(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `kategori`, `harga`, `stok`, `deskripsi`, `foto`) VALUES
(1, 'Tas Anyaman Rotan', 1, 150000, 100, 'Tas tangan elegan berbahan rotan alami yang dianyam dengan presisi oleh pengrajin lokal. Cocok untuk gaya kasual maupun semi-formal, tas ini ringan, kuat, dan memberikan sentuhan etnik modern.', 'assets/images/produk/1.png'),
(2, 'Dompet Kulit Handmade', 1, 120000, 100, 'Dompet berbahan kulit asli dengan jahitan tangan rapi. Desain minimalis namun mewah, dilengkapi slot kartu dan uang tunai. Tahan lama dan cocok sebagai hadiah premium.', 'assets/images/produk/2.png'),
(3, 'Gantungan Kunci Kulit', 1, 50000, 100, 'Aksesoris kecil yang elegan, terbuat dari potongan kulit berkualitas tinggi. Memiliki ring logam kuat dan cocok untuk menyimpan kunci dengan gaya klasik.', 'assets/images/produk/3.png'),
(4, 'Tas Rajut Serut', 1, 90000, 100, 'Tas rajut model serut dengan benang katun premium. Cocok untuk gaya santai atau liburan, memiliki ruang cukup luas untuk kebutuhan harian Anda.', 'assets/images/produk/4.png'),
(5, 'Dompet Kain Tenun', 1, 80000, 100, 'Dompet handmade dari kain tenun tradisional Indonesia. Memadukan budaya dan fungsi, dompet ini ringan dan ideal untuk penyimpanan uang atau kartu.', 'assets/images/produk/5.png'),
(6, 'Tas Clutch Batik', 1, 200000, 100, 'Clutch elegan dengan motif batik modern. Didesain ramping namun cukup untuk menyimpan handphone, dompet, dan kosmetik kecil. Cocok untuk acara formal dan kasual.', 'assets/images/produk/6.png'),
(7, 'Tas Selempang Kulit', 1, 180000, 100, 'Tas selempang berbahan kulit sapi pilihan, nyaman dipakai harian. Desainnya modern dengan ruang penyimpanan luas dan tali adjustable.', 'assets/images/produk/7.png'),
(8, 'Tempat Kacamata Kulit', 1, 70000, 100, 'Tempat penyimpanan kacamata dari kulit asli dengan kancing pengunci. Melindungi lensa dari goresan sekaligus tampil stylish saat dibawa ke mana pun.', 'assets/images/produk/8.png'),
(9, 'Dompet Kecil Rajut', 1, 60000, 100, 'Dompet mini rajut yang lucu dan praktis, cocok untuk menyimpan uang receh atau aksesoris kecil. Tersedia dalam berbagai warna cerah.', 'assets/images/produk/9.png'),
(10, 'Tas Serut Anyaman Bambu', 1, 110000, 100, 'Tas serut unik dari anyaman bambu yang dipadukan dengan kain pelapis di dalamnya. Menawarkan keunikan tradisional dan daya tahan tinggi untuk aktivitas ringan.', 'assets/images/produk/10.png'),
(11, 'Kalung Manik-manik', 2, 110000, 100, 'Kalung buatan tangan dari manik-manik warna-warni yang dirangkai secara detail. Cocok untuk tampil ceria dan menambah aksen etnik pada pakaian sehari-hari.', 'assets/images/produk/11.png'),
(12, 'Gelang Tenun', 2, 80000, 100, 'Gelang dari benang tenun warna-warni yang merepresentasikan budaya lokal. Nyaman dipakai dan cocok untuk dipadukan dengan gaya bohemian atau kasual.', 'assets/images/produk/12.png'),
(13, 'Bros Kain Batik', 2, 70000, 100, 'Bros cantik berbahan kain batik yang dilipat dan dibentuk menjadi bunga. Cocok untuk mempercantik hijab, kerah baju, atau tas.', 'assets/images/produk/13.png'),
(14, 'Anting Kayu Ukir', 2, 85000, 100, 'Anting handmade dari kayu ringan yang diukir secara detail. Memberikan kesan alami dan unik untuk tampilan etnik atau kontemporer.', 'assets/images/produk/14.png'),
(15, 'Cincin Perak Handmade', 2, 250000, 100, 'Cincin perak murni hasil kerja tangan pengrajin profesional. Desainnya simpel namun elegan, cocok untuk penggunaan sehari-hari atau acara spesial.', 'assets/images/produk/15.png'),
(16, 'Liontin Batu Alam', 2, 220000, 100, 'Liontin eksklusif dari batu alam yang dipilih khusus. Setiap batu memiliki pola alami berbeda, menjadikan setiap liontin unik dan bernilai estetika tinggi.', 'assets/images/produk/16.png'),
(17, 'Gelang Kulit Handmade', 2, 130000, 100, 'Gelang dari kulit asli yang dirangkai dengan detail tinggi. Memiliki pengait logam dan cocok untuk tampilan maskulin atau rustic.', 'assets/images/produk/17.png'),
(18, 'Bros Kulit Rajut', 2, 90000, 100, 'Bros unik hasil kombinasi rajutan dan potongan kulit. Ideal untuk mempercantik outerwear, tas, atau sebagai aksesoris fashion harian.', 'assets/images/produk/18.png'),
(19, 'Kalung Rajut', 2, 100000, 100, 'Kalung handmade berbahan benang rajut yang lembut dan tahan lama. Desainnya modern dengan nuansa etnik, cocok untuk gaya santai.', 'assets/images/produk/19.png'),
(20, 'Anting Rajut', 2, 65000, 100, 'Anting rajut ringan dengan desain kreatif. Cocok untuk menambah kesan feminin dan unik, serta tidak menyebabkan iritasi.', 'assets/images/produk/20.png'),
(21, 'Patung Kayu Ukir', 3, 220000, 100, 'Patung dekoratif dari kayu solid yang diukir dengan motif tradisional. Cocok sebagai pemanis ruang tamu atau rak pajangan dengan nuansa etnik.', 'assets/images/produk/21.png'),
(22, 'Lampu Hias dari Bambu', 3, 180000, 100, 'Lampu meja unik berbahan bambu alami dengan desain artistik. Memberikan pencahayaan hangat sekaligus sentuhan alami dalam ruangan.', 'assets/images/produk/22.png'),
(23, 'Vas Bunga Keramik', 3, 130000, 100, 'Vas bunga handmade dari keramik lokal berkualitas tinggi. Cocok untuk bunga segar atau kering sebagai elemen dekoratif meja.', 'assets/images/produk/23.png'),
(24, 'Hiasan Dinding Anyaman', 3, 160000, 100, 'Panel dinding anyaman dari serat alami dengan pola geometris atau tradisional. Ideal untuk memperindah tembok kosong di ruang keluarga atau kamar.', 'assets/images/produk/24.png'),
(25, 'Pajangan Kain Tenun', 3, 140000, 100, 'Pajangan dinding berbentuk scroll dari kain tenun khas daerah, lengkap dengan gantungan kayu. Menambah sentuhan budaya pada dekorasi rumah.', 'assets/images/produk/25.png'),
(26, 'Tempat Lilin Kayu', 3, 90000, 100, 'Tempat lilin dari kayu jati bertekstur natural. Didesain minimalis dengan sentuhan rustic, cocok sebagai centerpiece atau pencahayaan tematik.', 'assets/images/produk/26.png'),
(27, 'Frame Foto Kayu', 3, 120000, 100, 'Bingkai foto handmade dari kayu daur ulang yang dipoles halus. Tersedia dalam beberapa ukuran dan cocok untuk foto kenangan atau seni cetak.', 'assets/images/produk/27.png'),
(28, 'Pot Tanaman Gantung Rajut', 3, 110000, 100, 'Pot gantung dari benang rajut yang kuat dan tahan lama. Dapat digantung di balkon atau dalam rumah untuk tampilan hijau yang estetis.', 'assets/images/produk/28.png'),
(29, 'Karpet Rajut Handmade', 3, 200000, 100, 'Karpet lantai buatan tangan dengan pola rajut klasik. Lembut dan hangat di kaki, cocok untuk kamar tidur, ruang baca, atau ruang keluarga.', 'assets/images/produk/29.png'),
(30, 'Meja Kecil Anyaman', 3, 250000, 100, 'Meja sudut ringan dari anyaman rotan dengan kerangka kayu. Fungsional dan artistik, cocok sebagai meja samping atau dekoratif di ruangan kecil.', 'assets/images/produk/30.png'),
(31, 'Buku Catatan Kulit', 4, 95000, 100, 'Buku catatan eksklusif dengan sampul kulit asli buatan tangan. Kertas tebal berkualitas tinggi, cocok untuk jurnal pribadi, sketsa, atau catatan kerja.', 'assets/images/produk/31.png'),
(32, 'Tempat Pensil Rajut', 4, 50000, 100, 'Tempat pensil dari benang rajut yang lembut namun kokoh. Desain unik dan warna menarik, sempurna untuk meja belajar atau kerja.', 'assets/images/produk/32.png'),
(33, 'Pembatas Buku Kayu', 4, 40000, 100, 'Pembatas buku handmade dari kayu ringan dengan ukiran motif klasik. Ideal untuk menjaga halaman dan menambah estetika pada bacaan Anda.', 'assets/images/produk/33.png'),
(34, 'Kalender Meja Handmade', 4, 60000, 100, 'Kalender meja dengan desain natural dari bahan daur ulang dan hiasan handmade. Praktis dan ramah lingkungan sebagai dekorasi meja kerja.', 'assets/images/produk/34.png'),
(35, 'Tempat Kartu Nama Kulit', 4, 70000, 100, 'Wadah kartu nama dari kulit asli dengan jahitan tangan rapi. Cocok untuk profesional yang ingin tampil elegan dan terorganisir.', 'assets/images/produk/35.png'),
(36, 'Map Dokumen Tenun', 4, 120000, 100, 'Map dokumen dari kain tenun khas Indonesia dengan lapisan dalam yang kuat. Kombinasi fungsionalitas dan budaya dalam satu produk.', 'assets/images/produk/36.png'),
(37, 'Notebook Rajut', 4, 80000, 100, 'Notebook unik dengan sampul dari benang rajut berwarna ceria. Dilengkapi dengan kertas daur ulang yang nyaman digunakan sehari-hari.', 'assets/images/produk/37.png'),
(38, 'Tempat Memo Kayu', 4, 75000, 100, 'Tempat memo kayu solid dengan ukiran etnik, dilengkapi kertas memo dan slot pena. Fungsional untuk catatan cepat dan mempercantik meja.', 'assets/images/produk/38.png'),
(39, 'Pen Holder Bambu', 4, 50000, 100, 'Wadah alat tulis dari bambu dengan desain minimalis dan eco-friendly. Ringan, tahan lama, dan cocok untuk ruang kerja berkonsep alami.', 'assets/images/produk/39.png'),
(40, 'Amplop Kain Batik', 4, 45000, 100, 'Amplop eksklusif dari kain batik, cocok untuk undangan khusus atau hadiah uang. Menampilkan kearifan lokal dalam balutan estetika.', 'assets/images/produk/40.png'),
(41, 'Sepatu Rajut', 5, 210000, 100, 'Sepatu kasual dari benang rajut dengan sol karet fleksibel. Nyaman dipakai sehari-hari dan dirancang untuk memberikan tampilan unik dan stylish.', 'assets/images/produk/41.png'),
(42, 'Topi Tenun', 5, 60000, 100, 'Topi handmade dari kain tenun tradisional yang ringan dan adem. Cocok untuk melindungi dari sinar matahari sekaligus menampilkan nuansa etnik.', 'assets/images/produk/42.png'),
(43, 'Sabuk Kulit Handmade', 5, 140000, 100, 'Sabuk dari kulit asli dengan pengerjaan manual yang detail. Tahan lama dan bisa digunakan untuk berbagai gaya pakaian, dari formal hingga kasual.', 'assets/images/produk/43.png'),
(44, 'Sarung Tangan Rajut', 5, 50000, 100, 'Sarung tangan lembut hasil rajutan tangan yang hangat dan elastis. Ideal untuk cuaca dingin atau sebagai pelengkap gaya musim gugur.', 'assets/images/produk/44.png'),
(45, 'Syal Rajut', 5, 70000, 100, 'Syal rajut tebal dan halus dengan pola klasik yang elegan. Memberikan kehangatan sekaligus menambahkan kesan modis dalam penampilan Anda.', 'assets/images/produk/45.png'),
(46, 'Rompi Anyaman', 5, 170000, 100, 'Rompi stylish dari bahan anyaman bambu dan kain lembut, ringan dan nyaman dipakai. Menawarkan perpaduan budaya dan tren fashion modern.', 'assets/images/produk/46.png'),
(47, 'Dasi Kupu-kupu Kulit', 5, 120000, 100, 'Dasi kupu-kupu eksklusif dari kulit asli handmade. Desain unik dan premium untuk tampilan formal yang berbeda dan menonjol.', 'assets/images/produk/47.png'),
(48, 'Jaket Tenun', 5, 240000, 100, 'Jaket ringan dengan motif tenun khas daerah, dijahit dengan teknik modern. Memadukan kenyamanan, budaya, dan gaya dalam satu pakaian.', 'assets/images/produk/48.png'),
(49, 'Sandal Rajut Handmade', 5, 95000, 100, 'Sandal dengan tali dari benang rajut yang empuk dan tidak mudah putus. Cocok untuk penggunaan dalam rumah atau santai di luar ruangan.', 'assets/images/produk/49.png'),
(50, 'Tas Pinggang Kulit', 5, 180000, 100, 'Tas pinggang kulit berkualitas tinggi dengan banyak kompartemen. Praktis untuk menyimpan barang penting saat bepergian dengan gaya klasik.', 'assets/images/produk/50.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` text DEFAULT NULL,
  `status` enum('On','Off') DEFAULT NULL,
  `hak` enum('Admin','Member') NOT NULL,
  `added_on` varchar(30) DEFAULT NULL,
  `updated_on` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nama`, `status`, `hak`, `added_on`, `updated_on`) VALUES
(1, 'aprilioaril54@gmail.com', '$2y$10$5GYYHkiQ7TozJQIyy.kqNezn/IonXQv6E.QcDeeZDzR2xinmFJ6fC', 'L. Aprilio Apriziano', 'On', 'Admin', '2025-05-25 17:03', '2025-05-25 17:03'),
(2, 'member@member.com', '$2y$10$ldlLmh1Hicy2x.NlwkUbdeErI7pBkoVvcopKSNQanMqKZBTkZjGEy', 'Member Ganteng', 'On', 'Member', '2025-05-26 01:24', '2025-05-26 01:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `alamat1` varchar(255) DEFAULT NULL,
  `alamat2` varchar(255) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `kodepos` varchar(20) DEFAULT NULL,
  `nohp` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `nama_depan`, `nama_belakang`, `alamat1`, `alamat2`, `kota`, `kodepos`, `nohp`, `email`, `created_at`, `updated_at`) VALUES
(1, 2, 'test', 'test', 'test', 'test', 'asdasd', '123123', '1231231231', 'aprilioaril54@gmail.com', '2025-05-26 11:23:23', '2025-05-26 11:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','Spakbor') DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`) VALUES
(1, 7, 7, '2025-05-25 16:19:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_orders_user` (`user_id`),
  ADD KEY `fk_order_address` (`address_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_items_order` (`order_id`),
  ADD KEY `idx_items_produk` (`produk_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_address_user` (`user_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniq_user` (`user_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_order_address` FOREIGN KEY (`address_id`) REFERENCES `user_addresses` (`id`),
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `fk_order_items_produk` FOREIGN KEY (`produk_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD CONSTRAINT `fk_address_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `fk_profiles_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
