-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2017 at 03:30 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `detail` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `gambar`, `detail`, `created_at`) VALUES
(1, 'Coleman Yakin dengan Generasi Emas Wales', 'chris-coleman_31adbc7.jpg', 'Bola.net - Chris Coleman menyebut skuat Wales saat ini sebagai \'generasi emas\', namun ingin para pemain mencatat sejarah dengan masuk ke putaran final Piala Dunia 2018.\r\n\r\nThe Dragons akan lolos otomatis ke turnamen di Rusia tahun depan jika mereka menang atas Rep. Irlandia dalam pertandingan di Cardiff, dan pemimpin klasemen Grup D, Serbia, tergelincir.\r\n\r\nColeman mengatakan pada Sportsmole jelang laga hidup mati tersebut: \"Ini adalah hal terbesar yang pernah kami ikuti. Kami harus mengenakan jersey itu dan memberikan semuanya.\"\r\n\r\n\"Saya bisa memaafkan pemain kami untuk apapun, namun saya tak bisa memaafkan mereka jika mereka tak menguras tenaga mereka selama berada di atas lapangan. Mereka selalu melakukan itu.\"\r\n\r\n\"Mereka mendapat label sebagai generasi emas, sebelum kami lolos ke turnamen, dan saya terus membantah itu. Namun mereka memang layak mendapatkan sebutan tersebut, ini adalah sekumpulan pemain yang sanggup mencatat perbedaan. Ini adalah momen mereka, mereka sudah bekerja dengan amat fantastis.\"\r\n\r\n\"Ini adalah era keemasan, mereka sudah membuktikan itu. Kami tak boleh berpikir semuanya sudah selesai, hal itu takkan membantu kami di pertandingan nanti.\"\r\n\r\nWales tak pernah lolos ke Piala Dunia sejak terakhir melakukannya di 1958 silam.', '2017-02-02 00:00:00'),
(2, 'Sir Alex Ferguson Ternyata Pernah Tolak Zidane', 'sir-alex-ferguson_453e96b.jpg', 'Bola.net - Eks direktur Manchester United, Martin Edwards, mengungkap bahwa Sir Alex Ferguson sempat melewatkan peluang untuk merekrut Zinedine Zidane.\r\n\r\nManajer legendaris Setan Merah kabarnya sudah diberitahu akan talenta hebat Zidane di pertengahan 90an, ketika pria Prancis masih bermain di Bordeaux.\r\n\r\nNamun demikian, Ferguson memilih tak merekrut pemain 22 tahun karena ia memilih Eric Cantona di posisi nomor 10 di Old Trafford.\r\n\r\nEdwards mengatakan di laman resmi klub: \"Ketika Zidane ada di Borfeaux, Les Kershaw, direktur scout kami, mengatakan bahwa klub pasti akan tertarik padanya dan saya memberitahu soal itu pada Sir Alex.\"\r\n\r\n\"Alex mengatakan bahwa Eric (Cantona) juga sudah menyebut nama Zidane padanya, namun Alex merasa Zidane bermain di posisi yang sama seperti Eric.\"\r\n\r\n\"Usai pergi ke Prancis untuk membujuk Eric bergabung dengan kami, usai insiden Crystal Palace, dia merasa, jika kami mendatangkan Zidane, itu akan mempengaruhi posisi Eric, jadi dia bertahan dengan Eric.\"\r\n\r\nZidane akhirnya bergabung dengan Juventus sebelum bergabung dengan Real Madrid lewat transfer yang kala itu memecahkan rekor dunia. ', '2017-03-04 10:00:00'),
(3, 'PSG Bergerak Guna Comot David De Gea', 'de-gea_6694174.jpg', 'Bola.net - PSG belakangan ini muncul sebagai salah satu klub yang tertarik untuk mendatangkan kiper Manchester United, David de Gea, dan bisa jadi akan melakukan manuver di musim panas mendatang.\r\n\r\nPemain Spanyol sebelumnya sering disebut akan bergabung dengan Real Madrid di akhir musim, atau tiga tahun setelah mereka gagal menghadirkannya ke Bernabeu karena masalah administrasi di detik-detik akhir.\r\n\r\nNamun demikian, Madrid bakal menghadapi persaingan serius dari PSG, usai media Prancis, Le 10 Sport, mengatakan bahwa klub Ligue 1 sudah mengincar De Gea sebagai pemain berikutnya yang akan mereka tebus dengan harga mahal.\r\n\r\nAlphonse Areola dan Kevin Trapp merupakan dua kiper yang menghuni skuat PSG sekarang, di mana nama pertama muncul sebagai kiper utama musim ini - namun belakangan diklaim menolak kontrak anyar di Paris.\r\n\r\nDe Gea masih punya dua tahun tersisa dalam kontraknya di United, dan kabarnya sang kiper tak punya klausul rilis dalam kesepakatan yang ia buat di Old Trafford.\r\n\r\nMU sendiri akan dinanti laga tandang vital melawan Liverpool pasca jeda Internasional akhir pekan ini.', '2017-04-08 08:18:00'),
(4, 'Juventus Terancam Kehilangan 8 Pemain Lawan Lazio', 'miralem-pjanic_cbb6740.jpg', 'Bola.net - Kabar buruk menerpa Juventus jelang pertemuan mereka melawan Lazio akhir pekan ini. Kabar buruk itu adalah soal kemungkinan mereka tak bisa memainkan beberapa pemain penting di pertandingan tersebut.\r\n\r\nJeda internasional menjadi mimpi buruk bagi Bianconeri. Beberapa pemainnya yang pergi ke tugas internasional harus kembali dalam kondisi cedera.\r\n\r\nDua pemain yang pulang dalam kondisi cedera adalah Mario Mandzukic dan Andrea Barzagli. Cederanya kedua pemain tersebut membuat pilihan semakin sedikit bagi pelatih Massimiliano Allegri.\r\n\r\nDilansir Gazzetta dello Sport, Juventus bisa kehilangan setidaknya delapan pemain untuk pertandingan melawan Lazio itu. Selain kedua pemain itu, sebelumnya Bianconeri sudah harus melihat Marko Pjaca, Miralem Pjanic, Sami Khedira dan Claudio Marchisio menepi, cedera yang membuat lini tengah mereka semakin menipis.\r\n\r\nSelain itu, Juventus juga sudah harus ditinggalkan oleh dua bek baru mereka, Mattia De Sciglio dan Benedikt Howedes yang cedera.\r\n\r\nMeskipun ada kabar yang menyebut bahwa Barzagli dan Pjanic bisa pulih tepat waktu untuk pertandingan ini, namun besar kemungkinan Allegri tak mau ambil resiko dengan tetap memainkan keduanya.\r\n\r\nTerlebih lagi mereka juga sudah ditunggu Sporting Lisbon untuk pertandingan lanjutan penyisihan grup Liga Champions tengah pekan depan', '2017-04-07 14:12:00'),
(5, 'Pirlo Siap Tangani Chelsea Bersama Conte', 'andrea-pirlo_7232c59.jpg', 'Bola.net - Legenda Italia, Andrea Pirlo, tak kuasa meuntup kans untuk bergabung dengan mantan bosnya, Antonio Conte, sebagai bagian dari staff Chelsea.\r\n\r\nPria 38 tahun mengumumkan awal pekan ini bahwa ia berniat untuk mengakhiri perjalanan karirnya yang luar biasa di Desember, ketika kontraknya dengan tim MLS, New York City FC, berakhir.\r\n\r\nPirlo sempat dikaitkan dengan rumor melatih di Stamford Bridge awal tahun ini, namun hal tersebut dibantah oleh Conte, yang mengatakan bahwa kala itu sang gelandang tengah fokus untuk meneruskan karirnya sebagai pemain.\r\n\r\nNamun demikian, ketika ditanya lagi soal rumor tersebut, Pirlo mengatakan di Sportsmole: \"Asisten Conte? Banyak orang mengatakan soal itu.\"\r\n\r\n\"Saya punya ide sendiri, namun saya butuh waktu untuk memutuskan. Saya masih belum tahu. Saya akan kembali ke Italia pada Desember mendatang.\"\r\n\r\nPirlo, yang pernah memenangkan Piala Dunia 2006, sebelumnya bekerja untuk Conte di Juventus.', '2017-05-09 09:16:00'),
(6, 'Brace Mohamed Salah Bawa Mesir Catat Sejarah', 'mohamed-salah-004-lf_89afe67.jpg', 'Bola.net - Pemain Liverpool, Mohamed Salah, menjadi pahlawan untuk Mesir, usai mereka memastikan akan tampil di Piala Dunia untuk kali pertama sejak 1990.\r\n\r\nThe Pharaohs menghadapi Kongo semalam. Mereka tahu bahwa kemenangan akan membuat mereka lolos sebagai juara grup.\r\n\r\nNamun demikian, mereka dipaksa menunggu hingga menit-menit akhir untuk memastikan diri melaju ke Rusia.\r\n\r\nSemuanya tampak berjalan lancar ketika Salah mencetak gol pembuka setelah pertandingan berjalan satu jam, namun Mesir butuh penalti di menit-menit akhir untuk menuntaskan misi mereka.\r\n\r\nSalah memecah kebuntuan dan membuat Mesir mengontrol laga, namun dua menit sebelum bubar, Kongo mampu menyamakan kedudukan lewat Arnold Boulka Moutou.\r\n\r\nHasil imbang akan membuat persaingan harus terus ditentukan hingga pertandingan terakhir.\r\n\r\nNamun kemudian, Mesir mendapat penalti di menit ke-95, dan Salah dengan tenang mencetak gol dari titik putih untuk membantu negaranya mencatat kemenangan bersejarah.\r\n\r\nSalah kini akan mengikuti jejak beberapa rekannya di Liverpool dengan bermain di panggung terbesar sepakbola Internasional pekan depan. Mesir sendiri sebelumnya baru dua kali tampil di putaran final Piala Dunia, pada 1934 dan 1990.', '2017-10-09 08:16:00'),
(7, 'Liverpool Tak Bakal Bisa Juara Premier League', 'jurgen-klopp_634cb0e.jpg', 'Bola.net - Liverpool sama sekali tak punya peluang menjuarai Premier League dan bisa jadi akan finish di luar posisi empat besar, menurut Stephane Henchoz.\r\n\r\nThe Reds menjalani start dengan hasil beragam di musim 17/18. Sempat menang 4-0 atas Arsenal, mereka kemudian dihajar 0-5 oleh Manchester City di Etihad.\r\n\r\nJurgen Klopp kesulitan mengatasi masalah timnya di lini belakang, yang sebenarnya sudah terjadi sejak musim lalu, di mana mereka sering kehilangan poin berharga karena ketidakmampuan mencatat clean sheet.\r\n\r\nHenchoz percaya bahwa masalah itu harusnya sudah diselesaikan di bursa musim panas lalu.\r\n\r\n\"Itu adalah masalah besar musim lalu dan semua orang berharap mereka bisa menyelesaikannya. Saya kira mereka harusnya membeli seseorang. Setidaknya dua bek, mereka coba mendatangkan Van Dijk, namun tidak berhasil,\" tutur Henchoz di BBC.\r\n\r\n\"Saya tak tahu. Sepertinya selalu terjadi kesalahan yang sama, bola mati, mereka sangat lemah, sangat buruk.\"\r\n\r\n\"Dengan kondisi sekarang, mereka takkan punya kesempatan bersaing di bursa juara. Mereka harus lebih dari bahagia jika mampu finish di empat besar, namun jika mereka terus kebobolan seperti ini, mereka takkan bisa melakukannya.\"', '2017-10-09 14:21:00'),
(8, 'Dybala Diyakini Sanggup Menangkan Ballon d\'Or', 'dybala_ca8b0f5.jpg', 'Bola.net - Paulo Dybala adalah pemenang Ballon d\'Or di masa depan, menurut David Trezeguet, usai penampilan pemuda Argentina banyak dibandingkan dengan Lionel Messi.\r\n\r\nStart masif di awal musim 17/18 bersama Juventus membuat Dybala kini sudah membuat 12 gol dalam 10 pertandingan.\r\n\r\nPerformanya itu membuat banyak orang mulai mengaitkannya dengan Barcelona, dan juga rencana pindah ke tim besar Spanyol lainnya, Real Madrid.\r\n\r\nTrezeguet, legenda Juventus, semakin menambah panjang daftar pemain yang memuji Dybala, meski ia kurang setuju jika sang pemain dibanding-bandingkan dengan Messi.\r\n\r\n\"Dybala bisa memenangkan Ballon d\'Or, selama dia menunjukkan karakter yang tepat,\" tutur Trezeguet menurut ItaSportPress.it.\r\n\r\n\"Saya sering mendengar perbandingan antara Dybala dan Leo Messi, namun saya kira itu amat penting baginya dan bisa membantunya terus berkembang.\"\r\n\r\nJuventus akan kembali beraksi di Serie A pada 14 Oktober dengan menjamu Lazio di Turin.', '2017-10-10 08:14:00'),
(9, 'Bos Dortmund Prediksi Bakal Ada Transfer Lebih Gila dari Neymar', 'peter-bosz_42ba291.jpg', 'Bola.net - Bos Borussia Dortmund, Peter Bosz, memperkirakan bahwa nilai transfer seorang pemain bisa mencapai angka satu miliar euro dalam waktu dekat.\r\n\r\nPSG memecahkan rekor transfer dunia dengan menebus Neymar senilai 222 juta euro dari Barcelona di musim panas 2017.\r\n\r\nTim Catalan menggantikan pemain Brasil dengan bintang Dortmund, Ousmane Dembele, yang menjadi pemain termahal kedua sepanjang sejarah dengan harga 105 juta euro.\r\n\r\nNilai tersebut memecahkan rekor transfer Cristiano Ronaldo senilai 94 juta euro di 2009, dan delapan dari sembilan transfer termahal dalam sejarah terjadi di empat tahun terakhir.\r\n\r\nBosz pun percaya bahwa nilai transfer seorang pemain akan terus meroket di masa mendatang.\r\n\r\n\"Saya kira kita akan mengalami era di mana seorang pemain akan ditransfer dengan nilai kesepakatan mencapai 1 miliar euro,\" tuturnya di Bild.\r\n\r\nPemain Dortmund lainnya yang tengah dikaitkan dengan transfer masif adalah Pierre-Emerick Aubameyang, yang sudah mencetak 13 gol dalam 11 penampilan musim ini.\r\n\r\nNamun Bosz mengatakan: \"Dia tidak hanya penting karena golnya, namun karena dia terus memberikan 100 persen, baik ketika bermain maupun berlatih. Dia lebih dari sekedar pemain. Dia pria yang hebat dan juga seorang pemimpin.\"', '2017-10-11 10:17:00'),
(10, 'Rashford Satu-satunya Pemain Inggris yang Bernyali', 'marcus-rashford-afp_b30f5dd.jpg', 'Bola.net - Striker Manchester United, Marcus Rashford, adalah satu-satunya pemain Inggris yang tak terlihat ketakutan, menurut Ian Wright.\r\n\r\nTiga Singa menutup petualangan mereka di Kualifikasi Piala Dunia, dengan rekor tak terkalahkan menuju putaran final di Rusia 2018.\r\n\r\nNamun demikian, tim asuhan Gareth Southgate memancing banyak kritik usai beberapa kali menunjukkan penampilan tak meyakinkan.\r\n\r\nWright melihat Rashford sebagai satu-satunya pemain Inggris yang mampu bersinar, tampil bagus meski terus mendapatkan tekanan dari media dan publik.\r\n\r\nEks striker Inggris mengatakan di ITV usai tim menang 1-0 atas Lithuania: \"Saya merasa bahwa Southgate harus mencoba untuk fokus pada Inggris dan membuat mereka lebih sering mengoper ke depan. Para pemain bermain di bawa rasa ketakutan sekarang.\"\r\n\r\n\"Kita bicara tentang generasi pemain yang berasal dari akademi dan kemudian masuk tim utama, tidak ada banyak tekanan pada diri mereka. Mereka hanya mendapat tekanan ketika bermain untuk Inggris.\"\r\n\r\n\"Saya tak bisa ingat di mana kami bermain begitu luar biasa bagus. Terlepas dari Rashford, semua pemain tampak ketakutan.\" ', '2017-10-12 13:22:00'),
(11, 'Karirnya Melesat, Kane Berterima Kasih pada Bos Tottenham', 'harry-kane_cb2b6ca.jpg', 'Bola.net - Pemain depan Inggris dan Tottenham, Harry Kane, berkeras bahwa ia berutang banyak pada bosnya di klub, Mauricio Pochettino, yang menaruh kepercayaan padanya sejak masih berusia muda.\r\n\r\nPemain 24 tahun mencatat koleksi 14 gol dalam 12 pertandingan musim ini, usai mencetak gol tunggal penentu kemenangan Tiga Singa atas Lithuania semalam.\r\n\r\nKane menjadi kapten timnya di LFF Stadium, dalam pertandingan yang juga diwarnai oleh debut rekan seklubnya, Harry Winks, pemain ke-15 Premier League yang mencatat debut di timnas di bawah asuhan manajer Pochettino.\r\n\r\nKane mengatakan di Sky Sports: \"Hal itu menunjukkan bahwa Mauricio merupakan salah satu manajer terbaik dunia, jika tak ingin disebut yang terbaik. Dia menarik pemain dari tim junior, memberi mereka kesempatan di panggung besar dan mereka bermain bagus untuknya.\"\r\n\r\n\r\n\"Kami tak bisa cukup berterima kasih padanya karena itu. Dia layak mendapat semua kredit. Dia membantu kami untuk meraih apa yang kami dapat sekarang. Harry adalah pemain lain yang ia tangani.\"\r\n\r\n\"Saya kira Winks bermain bagus malam ini. Dia mungkin adalah salah satu pemain terbaik di atas lapangan. Dia layak untuk ini. Dia sudah bekerja keras. Saya amat bangga dengannya dan keluarganya harusnya juga bangga.\"', '2017-10-13 13:23:00'),
(12, 'Martinez: De Bruyne Gelandang Terbaik di Eropa', 'bruyne_a06544b.jpg', 'Bola.net - Pelatih Belgia, Roberto Martinez memberikan pujian besar kepada gelandang andalannya, Kevin De Bruyne yang tampil apik di awal musim ini.\r\n\r\nKevin De Bruyne memang bersinar bersama klub dan tim nasional sejauh ini. Bersama Manchester City, De Bruyne telah terlibat dalam enam gol di liga, termasuk menjadi pencetak gol kemenangan melawan Chelsea pekan lalu.\r\n\r\nSementara bersama Timnas Belgia, mantan gelandang Chelsea itu juga tampil gemilang membantu mereka memuncaki klasemen grup H dan lolos langsung ke Piala Dunia 2018.\r\n\r\n\"Kevin de Bruyne hanya seperti seorang pemikir,\" puji Martinez.\r\n\r\nDia menambahkan: \"Anda mendapatkan pemain yang benar-benar memiliki eksekusi yang baik dari apa yang mereka lakukan, dan yang lainnya adalah pemikir yang sangat baik. De Bruyne punya keduanya,\" ujarnya.\r\n\r\n\"Bila anda menganalisis permainannya, anda akan merasa sangat, sangat sulit untuk menemukan gelandang yang lebih baik di sepakbola Eropa,\" sambungnya.\r\n\r\nDitambahkan pula oleh mantan pelatih Everton tersebut bahwa De Bruyne juga memiliki pemahaman yang sangat baik dengan pelatih Manchester City, Josep Guardiola.\r\n\r\n\"Dia memiliki chemistry yang sangat bagus dengan Pep Guardiola. Saya pikir mereka memiliki pemahaman yang sangat baik,\" sambungnya.\r\n\r\n\"Ketika anda melihat pada jadwal Manchester City, hal pertama yang datang ke benak saya adalah, \' De Bruyne akan berpengaruh dalam hal itu, dan itu adalah kategori elit,\" tandasnya.', '2017-10-10 16:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `friend_id` int(11) NOT NULL,
  `friend_name` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `photo` varchar(256) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `division` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`friend_id`, `friend_name`, `birthdate`, `photo`, `address`, `phone`, `email`, `division`, `status`, `created_at`) VALUES
(1, 'Mohamad Arif Mujaki', '1987-02-17', 'mujaki.jpeg', 'Jl. Jojoran I Blok Baru No. 56 F, Surabaya', '081315866766', 'mrjuoss@gmail.com', 'Bagian Disiplin dan Kesejahteraan Pegawai', 0, '2017-10-23 00:00:56'),
(2, 'Tirta Pratama, S.Kom', '1987-03-07', 'tirta.jpeg', 'JL. KH. Solej Iskandar Cluster Charwood No. 3 Bogor, Jawa Barat', '08111511666', 'tirta.pertama@gmail.com', 'Bagian Mutasi dan Penilaian Kinerja Pegawai', 1, '2017-10-23 00:01:46'),
(3, 'Taufik Wal Hidayah, S.Kom', '1978-12-20', 'taufik.jpeg', 'Jl. Bantar Jati No. 23, Cipayung , Jakarta Timur', '08561861277', 'taufik.w.hidayah@gmail.com', 'Bagian Mutasi dan Penilaian Kinerja Pegawai', 1, '2017-10-23 00:02:51'),
(4, 'WELLA PUTRI ANGGRAINI, S.Kom', '1988-02-25', 'wella.jpeg', 'Permata Depok Regency Jade E22 No.12, Kecamatan Cipayung, Depok, Jawa Barat', '081210635325', 'wella.putri.anggra@gmail.com', 'Bagian Mutasi dan Penilaian Kinerja Pegawai', 0, '2017-10-23 00:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_username` varchar(20) NOT NULL,
  `member_password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `member_username`, `member_password`, `created_at`) VALUES
(1, 'M. Arif Mujaki', 'mrjuoss', '3589110e7b694c8be574587d92dbe6cd', '2017-10-18 09:13:29'),
(2, 'Subangkit Ahmat Husen', 'subangkit', 'e10adc3949ba59abbe56e057f20f883e', '2017-10-18 09:13:29'),
(3, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2017-10-18 10:33:33'),
(7, 'Mujaki', 'Jaki', '202cb962ac59075b964b07152d234b70', '2017-10-18 10:37:18'),
(8, 'Tamu Biro Kepegawaian', 'guest', '084e0343a0486ff05530df6c705c8bb4', '2017-10-18 10:38:33');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_photo` varchar(256) NOT NULL,
  `product_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_photo`, `product_created`) VALUES
(1, 'Jaket Zipper', 'Jaket Zipper Fleece\r\nReady Stock, Langsung Kirim !!\r\n\r\nSpesifikasi =\r\nBahan : Fleece\r\nPuring Topi : Fleece \r\nLogo : -\r\nZipper : Yee\r\nReady Warna : HITAM, BIRU NAVI, BIRU CHEALSEA, ABU TUA, ABU MUDA, MERAH, MERAH MAROON\r\n\r\n\r\nSize Jaket\r\n\r\nS = Panjang : 60cm , Lebar : 45cm | Lingkar Dada 90cm\r\n\r\nM = Panjang : 65cm , Lebar , 50cm | Lingkar Dada 100cm\r\n\r\nL = Panjang : 68cm , Lebar : 55cm | Lingkar Dada 110cm\r\n\r\nXL = Panjang : 70cm , Lebar : 60cm | Lingkar Dada 120cm\r\n\r\nXXL = Panjang : 76 cm , Lebar : 65cm | Lingkar Dada 130cm\r\n\r\nXXXL =Panjang : 85cm , Lebar : 70cm | Lingkar Dada 140cm\r\n\r\nXXXXL =Panjang : 88cm , Lebar : 74cm | Lingkar Dada 148cm\r\n\r\nXXXXXL = Panjang : 90, Lebar : 78cm | Lingkar Dada 156cm\r\n\r\n\r\nKelebihan Jaket Fleece :\r\nSelain modelnya yang Sudah Ngehits, Jaket Fleece ini juga nyaman saat dipakai karena pada bagian dalam memiliki bulu-bulu lembut yang membuat Pemakainya betah saat memakainya. \r\n\r\nAttention !!!\r\nBisa Dipakai Pria|Wanita.\r\nJangan tunggu habis, Order Jaket Fleece Keren ini SEKARANG !', '03.jpg', '2017-10-17 00:00:00'),
(2, 'Kacamata', 'kacamata untuk naik sepeda \r\ndengan uv protection.\r\nready warna black dan lensa rainbow spt foto\r\n\r\npaket termasuk: \r\nkacamata\r\npouch', '04.jpg', '2017-10-17 02:00:00'),
(3, 'Iphone 7', '	\r\n- Kelengkapan : * Unit smartphone * Kabel data * Adaptor Charger * Handsfree * Box, Buku Panduan &Kartu Garansi - Kami memberikan pelayanan sesuai harapan anda -Service Centre Terjamin -Service ganti unit jika melewati 21Hari -Customer Service yang Siap melayani anda (09:00-23:00)-(Senin-Sabtu)-(Sms or Call) -Jaminan 7 hari pengantian barang jika Barang diterima dalam kondisi RUSAK -Kami hanya menjual produk Original dan tidak menjual produk Replika/Palsu -Segala ongkos kirim di tanggung pembeli jika terjadi returan barang happy shopping and have\r\n\r\n\r\ngaransi internasional\r\n\r\nkami siap bantu klaim garansi full 1 tahun', '05.jpg', '2017-10-17 05:00:00'),
(4, 'Oppo A37', 'SPESIFIKASI Dimensi : 143.1 x 71 x 7.69 mm Berat 135 gram Layar : IPS LCD capacitive touchscreen, 5.0 inches, 720 x 1280 pixels (~294 ppi pixel density) Pelindung : Corning Gorilla Glass 4 Material : Metal Fitur : 2.5D Curved Glass Screen Sim Card : Dual SIM Internet : HSPA Wireless : Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot, Bluetooth v4.0, GPS : with A-GPS USB : microUSB v2.0, USB OTG OS : Android OS, v5.1 (Lollipop) + Color OS 2.1 Memori : Internal 16 GB, microSD, up to 128 GB Chipset : Qualcomm Snapdragon 410 CPU : Quad-core 1.2 GHz Cortex-A53 Ram : 2 GB RAM GPU : Adreno 306 Baterai : Non-Removable Li-Polymer 2630 mAh Belakang : 8 MP, aperture f/2.0, autofocus, led flash, panorama, HDR Video : 1080p@30fps, 720p@120fps Depan : 5 MP, f/2.4, screen flash', '06.jpg', '2017-10-17 10:00:00'),
(5, 'Macbook Air', 'The Apple MacBook Air \"Core i5\" 1.8 13-Inch (Early 2015/Broadwell) features a 14-nm \"Broadwell ULT\" 1.8 GHz Intel \"Core i5\" processor (5350U) with two independent processor \"cores\" on a single chip, a 3 MB shared level 3 cache, 8 GB of onboard 1600 MHz LPDDR3 SDRAM, 128 GB or 256 GB of 4 Lane PCIe-based flash storage, and an \"integrated\" Intel HD Graphics 6000 graphics processor that shares system memory.', '01.jpg', '2017-10-16 00:00:00'),
(6, 'Asus Strix GTX', 'Kartu grafis keluaran dari ASUS, ini merupakan kartu grafis yang menonjolkan kecanggihan memori GDDR5X 11100 MHz untuk kepuasan bermain game para pecinta game sejati. Dengan mengandalkan arsitektur Pascal dan memoori GDDR5X, GPU 1080 ini dapat menjalankan berbagai macam game terbaru dengan tampilan visual yang jernih tanpa hambatan. Kartu grafis andalan NVIDIA GeForce GTX 1080 ini memang cocok bagi Anda yang menginginkan pengalaman bermain game yang canggih dan memuaskan.', '02.jpg', '2017-10-15 00:00:00'),
(7, 'Garmin Fenix', 'Jam Tangan GPS Multi Olahraga untuk Kebugaran, Petualangan dan Gaya\r\n\r\n\r\nJam Tangan Multi Olahraga GPS Premium dilengkapi dengan Elevate teknologi Detak Jantung berbasis Pergelangan tangan\r\n\r\nCocok untuk petualangan dengan desain tangguh memiliki panel stainless steel, tombol dan penutup di bagian belakang.\r\n\r\nMasukan statistik kunci di ujung jari Anda dengan widget kinerja yang menunjukkan efek dan kemajuan latihan Anda\r\n\r\nFitur Terhubung termasuk jam tangan pintar dan pengunggahan otomatis ke Garmin Connect komunitas kebugaran online dan personalisasi melalui tampilan jam gratis dan aplikasi dari Toko Connect IQ kami.\r\n\r\nSensor Luar Ruangan, termasuk GPS dan penerima satelit GLONASS ,dan kompas 3 sumbu dengan Giroskop dan Barometer Altimeter.', '10.png', '2017-10-15 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`friend_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `friend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
