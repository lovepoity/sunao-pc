SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `bill_user` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1. thanh toán trực tiếp 2. chuyển khoản 3. thanh toán online 4. mốt trả',
  `ngaydathang` varchar(50) DEFAULT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) DEFAULT 0 COMMENT '0. Đơn hàng mới 1. Chưa xử lý 2. Đang Xử Lý 3. Đã hoàn thành 4. Đang giao hàng 5. Giao hàng thành công',
  `recelve_name` varchar(255) DEFAULT NULL,
  `recelve_address` varchar(255) DEFAULT NULL,
  `recelve_tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Laptop'),
(2, 'Bàn phím'),
(3, 'Chuột'),
(4, 'Tay cầm'),
(5, 'Tai nghe'),
(6, 'Màn hình'),
(7, 'PC'),
(8, 'Ghế ngồi'),
(9, 'Bàn làm việc');
CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(1, 'Macbook Pro 14 M2 Pro 10CPU', 1911.64, 'sp-laptop-MACBOOK-1.webp', 'CPU: M2 PRO 10CPU 16GPU.\r\nMàn hình: 14-inch Liquid Retina XDR display.\r\nRAM: 16GB.\r\nDung lượng pin: Longer battery life, up to 18 hours.\r\nBộ nhớ: SSD 512GB.\r\nCổng kết nối	MagSafe 3, 3x Thunderbolt 4, HDMI, SDXC Card, Jack 3.5mm', 0, 1),
(2, 'Laptop gaming  ASUS ROG Strix SCAR 15', 2596.19, 'sp-laptop-gaming-ASUS-1.jpg', 'CPU: Intel Core i9-12900H 3.8GHz up to 5.0GHz 24MB.\r\nRAM: 32GB (16GBx2) DDR5 4800MHz (2x SO-DIMM socket, up to 64GB SDRAM).\r\nỔ lưu trữ: 1TB M.2 NVMe PCIe 4.0 SSD.\r\nCard đồ họa: NVIDIA GeForce RTX 3070 Ti 8GB GDDR6 + MUX Switch', 0, 1),
(3, 'Laptop gaming ASUS ROG Zephyrus G16', 2557.15, 'sp-laptop-gaming-ASUS-rog-zephyrus-1.jpg', 'CPU: Intel® Core™ Ultra 9 Processor 185H 2.3 GHz (24MB Cache, up to 5.1 GHz, 16 cores, 22 Threads); Intel® AI Boost NPU.\r\nRAM: 32GB (2x16GB) Onboard LPDDR5X 7467MHz (Dual channel, Không nâng cấp được)', 0, 1),
(4, 'Laptop gaming ASUS TUF Gaming F15', 1416.09, 'sp-laptop-gaming-ASUS-tuf-1.webp', 'CPU: Intel® Core™ i7-13620H Processor 2.4 GHz (24M  Cache, up to 4.9 GHz, 10 cores: 6 P-cores and 4 E-cores).\r\nRAM: 32GB (2x16GB) DDR5 4800MHz (2x SO-DIMM socket, up to 32GB SDRAM).\r\nỔ cứng: 1TB PCIe® 4.0 NVMe™ M.2 SSD (Còn trống 1 khe SSD M.2 PCIE)', 78, 1),
(5, 'Laptop gaming MSI Titan GT77 HX', 5900.94, 'sp-laptop-gaming-MSI-1.jpg', 'CPU: Intel Core i9-13980HX 2.2GHz up to 5.6GHz 36MB.\r\nRAM: 64GB (32x2) DDR5 (4x SO-DIMM socket, up to 128GB SDRAM).\r\nỔ cứng: 4TB (2x2) SSD PCIE G4X4 (2x M.2 SSD slot (NVMe PCIe Gen4) + 1x M.2 SSD slot (NVMe PCIe Gen5))', 6, 1),
(6, 'Laptop gaming MSI Titan 18 HX', 5429.46, 'sp-laptop-gaming-MSI-titan-1.webp', 'CPU: Intel® Core™ i9-14900HX Processors (1.6GHz upto 5.8GHz, 24 Cores 32 Threads, 36 MB Intel® Smart Cache).\r\nRAM: 128GB (4 x 32GB) DDR5 5600MHz (2x SO-DIMM socket, up to max 192GB).\r\nỔ cứng: 2TB NVMe PCIe Gen4x4 SSD (2x M.2 SSD slot NVMe PCIe Gen4, 1x M.2 SSD slot NVMe PCIe Gen5)', 0, 1),
(7, 'Laptop gaming MSI Stealth 18 AI Studio', 3737.55, 'sp-laptop-gaming-MSI-stealth-1.webp', 'CPU: Intel Core Ultra 9 185H (1.8GHz upto 5.1GHz, 16 cores 22 threads, 24 MB Intel® Smart Cache).\r\nRAM: 32GB (2x16GB) DDR5 5600MHz (2x SO-DIMM socket, up to 64GB SDRAM).\r\nỔ lưu trữ: 2TB NVMe PCIe Gen4x4 SSD (2 x M.2 SSD slots)', 0, 1),
(8, 'Laptop gaming Dell G15 5530', 1770.01, 'sp-laptop-gaming-DELL-1.webp', 'CPU: Intel® Core™ i9-13900HX (36 MB cache, 24 cores, 32 threads, up to 5.40 GHz Turbo).\r\nRAM: 16GB (2x8GB) DDR5 4800MHz (2x SO-DIMM socket, up to 32GB SDRAM).\r\nỔ cứng: 1TB SSD M.2 PCIe NVMe.\r\nCard đồ họa: NVIDIA® GeForce RTX™ 4060 8GB GDDR6', 92, 1),
(9, 'Laptop gaming Lenovo Legion 9', 5390.12, 'sp-laptop-gaming-LENOVO-legion-9-1.webp', 'CPU: Intel® Core™ i9-14900HX, 24C (8P + 16E) / 32T, P-core 2.2 / 5.8GHz, E-core 1.6 / 4.1GHz, 36MB.\r\nRAM: 64GB (2x32GB) SO-DIMM DDR5 5600MHz (2 slots, nâng cấp tối đa 64GB).\r\nỔ cứng: 2TB (2 x 1TB) SSD M.2 2280 PCIe® 4.0x4 NVMe® (2 slots M.2 2280 PCIe® 4.0 x4)', 0, 1),
(10, 'Laptop gaming Lenovo Legion 7 ', 2557.15, 'sp-laptop-gaming-LENOVO-legion-7-1.webp', 'CPU: Intel® Core™ i9-14900HX, 24C (8P + 16E) / 32T, P-core 2.2 / 5.8GHz, E-core 1.6 / 4.1GHz, 36MB.\r\nRAM: 32GB (2x16GB) SO-DIMM DDR5 5600MHz (2 slots, nâng cấp tối đa 32GB).\r\nỔ cứng: 1TB SSD M.2 2280 PCIe® 4.0x4 NVMe® (2 slots M.2 2280 PCIe® 4.0 x4)', 112, 1),
(11, 'Laptop gaming Lenovo LOQ', 1258.70, 'sp-laptop-gaming-LENOVO-loq-1.webp', 'CPU: Intel® Core™ i7-13650HX, 14C (6P + 8E) / 20T, P-core 2.6 / 4.9GHz, E-core 1.9 / 3.6GHz, 24MB.\r\nRAM: 16GB (1 x 16GB) DDR5-4800 SO-DIMM (Còn trống 1 khe, tối đa 32GB).\r\nỔ cứng: 512GB SSD M.2 2242 PCIe 4.0x4 NVMe (2 Slots: M2 2242 PCIe 4.0 x4 Slot/ M.2 2280 PCIe 4.0 x4 Slot)', 0, 1),
(12, 'Laptop gaming HP OMEN 16 ', 2557.15, 'sp-laptop-gaming-HP-1.webp', 'CPU: Intel® Core™ i9-13900HX 2.2GHz up to 5.4GHz 36MB.\r\nRAM: 32GB (16x2) DDR5 5600MHz (2x SO-DIMM socket, up to 32GB SDRAM).\r\nỔ cứng: 1 TB PCIe® Gen4 NVMe™ TLC M.2 SSD.\r\nCard đồ họa: NVIDIA® GeForce RTX™ 4070 8GB GDDR6.\r\nMàn hình: 16.1\"  QHD (2560 x 1440), 240 Hz, 3 ms response time, IPS, micro-edge, anti-glare, Low Blue Light, 300 nits, 100% sRGB.', 0, 1),
(13, 'Laptop gaming Gigabyte AORUS 17', 1534.13, 'sp-laptop-gaming-GIGABYTE-aorus-1.jpg', 'CPU: Intel® Core™ i7-13700H (2.4GHz~5.0GHz), 14 Cores 20 Threads, 24Mb Intel Smart Cache.\r\nRAM: 16GB (2x8GB) DDR5 4800Mhz (2x khe ram nâng cấp tối đa 64GB RAM).\r\nỔ cứng: 1TB SSD M.2 PCIE G4X4 (2 khe M.2, Còn trống 1 khe SSD M.2 PCIE G4x4).\r\nCard đồ họa: NVIDIA GeForce RTX 4060 GPU 8GB GDDR6', 102, 1),
(14, 'Laptop gaming Gigabyte G7', 1081.64, 'sp-laptop-gaming-GIGABYTE-g7-1.webp', 'CPU: Intel® Core™ i5-12500H (2.5GHz~4.5GHz), 12 Cores, 16 Threads (4P + 8E), 18 MB Intel® Smart Cache.\r\nRAM: 8GB (1x8GB) DDR4-3200Mhz (2 khe ram, nâng cấp tối đa 64GB RAM).\r\nỔ cứng: 512GB SSD M.2 PCIE G4X4 (2 khe M.2, Còn trống 1 khe SSD M.2 PCIE G3x4).\r\nCard đồ họa: NVidia Geforce RTX 3060 6GB GDDR6', 0, 1),
(15, 'Laptop LG Gram 2in1', 1337.40, 'sp-laptop-LG-gram-1.jpg', 'CPU: Intel Core i5-1340P (12 Cores: 4P + 8E, P: 1.9 up to 4.6 GHz / E: 1.4 up to 3.4 GHz) 12 MB Cache.\r\nRAM: 16GB LPDDR5 5200MHz (Dual Channel, Onboard, không nâng cấp).\r\nỔ cứng: 512GB PCIe NVMe M.2 SSD (2 slot, còn trống 1 khe M.2).\r\nCard đồ họa: Intel Iris Xe Graphics.\r\nMàn hình: 14 inch WUXGA (1920x1200), 16:10, IPS cảm ứng, có hỗ trợ bút LG Pen Wacom, DCI-P3 99%, LGD, 350 nits, Anti-Glare.', 0, 1),
(16, 'Laptop LG Gram Style', 1081.64, 'sp-laptop-LG-graMm-1.jpg', 'CPU: Intel Core i5-1340P (12 Cores: 4P + 8E, P: 1.9 up to 4.6 GHz / E: 1.4 up to 3.4 GHz) 12 MB Cache.\r\nRAM: 16GB LPDDR5 6000MHz (Dual Channel, Onboard, không nâng cấp).\r\nỔ cứng: 512GB PCIe NVMe M.2 SSD (2 slot, còn trống 1 khe M.2).\r\nCard đồ họa: Intel Iris Xe Graphics.\r\nMàn hình: 14 inch WQXGA+ 2K8 (2880 x 1800), 16:10, OLED 90Hz 0.2ms, DCI-P3 100%, LGD, 500 nits, Anti-Glare Flow Refrection.', 0, 1),
(17, 'PC ASUS Back to Future (Intel i9-14900K/ VGA RTX 4090)', 5587.03, 'sp-pc-ASUS-intel-i9k-4090-1.webp', 'Mainboard: ASUS ROG MAXIMUS Z790 HERO BTF DDR5.\r\nCPU: Intel Core i9 14900K / 4.4GHz Turbo 6.0GHz / 24 Nhân 32 Luồng / 36MB / LGA 1700.\r\nRAM: Corsair Dominator Titanium Black 32GB (2x16GB) RGB 6000 DDR5.\r\nVGA: ASUS ROG Strix GeForce RTX 4090 BTF OC Edition 24GB.\r\nSSD: SamSung 980 Pro 1TB M.2 NVMe.\r\nHDD: Tùy chọn nâng cấp', 15, 7),
(18, 'PC AMD R9-7950X/VGA RTX 4090', 4918.16, 'sp-pc-AMD-r9-4090-1.webp', 'Mainboard: ASUS ROG CROSSHAIR X670E HERO (DDR5).\r\nCPU: AMD Ryzen 9 7950X / 4.5GHz Boost 5.7GHz / 16 nhân 32 luồng / 81MB / AM5.\r\nRAM: G.Skill Trident Z5 RGB 32GB (2x16GB) 5600 DDR5 Black.\r\nVGA - Card đồ họa: ASUS ROG Strix GeForce RTX 4090 OC Edition 24GB GDDR6X.\r\nHDD: Tùy chọn nâng cấp.\r\nSSD: SamSung 980 PRO 1TB M.2 PCIe gen 4 NVMe', 0, 7),
(19, 'PC ASUS Back to Future (Intel i7-14700K/ VGA RTX 4070 Ti Super)', 2753.88, 'sp-pc-intel-i7-4070ti-super-1.webp', 'Mainboard: ASUS TUF GAMING Z790-BTF WIFI DDR5.\r\nCPU: Intel Core i7 14700K / Turbo up to 5.6GHz / 20 Nhân 28 Luồng / 33MB / LGA 1700.\r\nRAM: Corsair Vengeance RGB White 32GB (2x16GB) 5600 DDR5.\r\nVGA: ASUS TUF Gaming GeForce RTX 4070 Ti SUPER BTF White OC Edition 16GB GDDR6X', 99, 7),
(20, 'PC CORSAIR iCUE (Intel i7-14700F/ VGA RTX 4070Ti Super)', 2714.43, 'sp-pc-intel-i7-4070ti-super-1.webp', 'Mainboard: ASUS ROG Strix Z790-A GAMING WIFI II DDR5.\r\nCPU: Intel Core i7 14700F / Turbo up to 5.4GHz / 20 Nhân 28 Luồng / 33MB / LGA 1700.\r\nRAM: Corsair Vengeance RGB White 32GB (2x16GB) 5600 DDR5.\r\nVGA: ASUS TUF Gaming GeForce RTX 4070 Ti SUPER 16GB GDDR6X White OC Edition.\r\nSSD	WD Black SN770 1TB M.2 NVMe PCIe Gen4', 0, 7),
(21, 'PC AMD R7-8700G/ VGA RTX 4070 Ti Super', 2478.45, 'sp-pc-AMD-r7-8700G-1.webp', 'Mainboard: ASUS TUF GAMING X670E-PLUS WIFI (DDR5).\r\nCPU :AMD Ryzen 7 8700G / 4.2GHz Boost 5.1GHz / 8 nhân 16 luồng / 24MB / AM5.\r\nRAM: Corsair Vengeance RGB 32GB (2x16GB) 5600 DDR5.\r\nVGA: ASUS TUF Gaming GeForce RTX 4070 Ti SUPER 16GB GDDR6X OC Edition.\r\nHDD: Có thể tùy chọn Nâng cấp.\r\nSSD: SamSung 980 PRO 500GB M.2 PCIe gen 4 NVMe', 0, 7),
(22, 'PC Intel i7-14700F/ VGA RTX 4060 Ti', 1416.09, 'sp-pc-intel-i7-4060ti-super-1.webp', 'Mainboard: MSI MAG B760M MORTAR WIFI DDR4.\r\nCPU: Intel Core i7 14700F / Turbo up to 5.4GHz / 20 Nhân 28 Luồng / 33MB / LGA 1700.\r\nRAM: V-Color Skywalker Plus 1x8 3600 RGB Silver x 2.\r\nVGA: GIGABYTE GeForce RTX 4060 Ti AERO OC 8G.\r\nHDD: Có thể tùy chọn Nâng cấp.\r\nSSD: WD Black SN770 500G M.2 NVMe PCIe Gen4.', 0, 7),
(23, 'PC NZXT Intel i5-14400F/ VGA RTX 4060 Ti', 1180.01, 'sp-pc-intel-i5-4060ti-1.webp', 'Mainboard: ASUS TUF GAMING B760M-PLUS DRR5 WIFI.\r\nCPU: Intel Core i5 14400F / Turbo up to 4.7GHz / 10 Nhân 16 Luồng / 20MB / LGA 1700.\r\nRAM: Kingston Fury Beast RGB 16GB (2x8GB) bus 5600 DDR5.\r\nVGA: ASUS Dual GeForce RTX 4060 Ti EVO OC Edition 8GB GDDR6.\r\nHDD: Có thể tùy chọn Nâng cấp.\r\nSSD: WD Blue SN580 500GB M.2 NVMe PCIe Gen 4.', 0, 7),
(24, 'PC Intel i7-14700F/ VGA RTX 3060', 1180.01, 'sp-pc-intel-i7-3060-1.webp', 'Mainboard : MSI MAG B760M MORTAR WIFI DDR4.\r\nCPU: Intel Core i7 14700F / Turbo up to 5.4GHz / 20 Nhân 28 Luồng / 33MB / LGA 1700.\r\nRAM: V-Color Skywalker Plus 1x8 3600 RGB Black DDR4 x 2.\r\nVGA: MSI GeForce RTX 3060 Ventus 2X OC 12G.\r\nHDD: Có thể tùy chọn nâng cấp.\r\nSSD: WD Blue SN580 500GB M.2 NVMe PCIe Gen 4.', 0, 7),
(25, 'PC MSI PROJECT ZERO WHITE (Intel i5-14400F/ VGA RTX 4060)', 1140.66, 'sp-pc-MSI-1.webp', 'Mainboard :MSI B760M PROJECT ZERO.\r\nCPU: Intel Core i5 14400F / Turbo up to 4.7GHz / 10 Nhân 16 Luồng / 20MB / LGA 1700.\r\nRAM: Kingston Fury Beast RGB 16GB (2x8GB) bus 5600 DDR5.\r\nVGA: MSI GeForce RTX 4060 VENTUS 2X WHITE 8G OC.\r\nSSD: Ổ cứng SSD MSI Spatium M450 1TB M.2 PCIe NVMe Gen 4.0.\r\nHDD: Tùy chọn nâng cấp.', 0, 7),
(26, 'PC Intel i7-14700F/ VGA RTX 3050', 1101.32, 'sp-pc-intel-i7-3050-1.webp', 'Mainboard: MSI MAG B760M MORTAR WIFI DDR4.\r\nCPU: Intel Core i7 14700F / Turbo up to 5.4GHz / 20 Nhân 28 Luồng / 33MB / LGA 1700.\r\nRAM: V-Color Skywalker Plus 1x8 3600 RGB Black DDR4 x 2.\r\nVGA: MSI GeForce RTX 3050 VENTUS 2X 6G OC.\r\nHDD: Có thể tùy chọn Nâng cấp.\r\nSSD: WD Blue SN580 500GB M.2 NVMe PCIe Gen 4.', 0, 7),
(27, 'PC Homework i5 12400', 322.24, 'sp-pc-homework-intel-i5-1.webp', 'Mainboard: ASUS PRIME H610M-A WIFI D4  (tích hợp WIFI 5 + BT 5.0).\r\nCPU: Intel Core i5 12400 / 2.5GHz Turbo 4.4GHz / 6 Nhân 12 Luồng / 18MB / LGA 1700.\r\nRAM: PNY XLR8 1x8GB 3200MHz DDR4 LONGDIMM.\r\nVGA: Có thể tùy chọn Nâng cấp.\r\nHDD: Có thể tùy chọn Nâng cấp.\r\nSSD: Verbatim Vi550 256GB Sata3.\r\nPSU: Jetek J400.\r\nCase: JETEK X919.', 0, 7),
(28, 'PC Homework Athlon 3000G', 156.99, 'sp-pc-homework-AMD-athlon-1.webp', 'Mainboard: ASUS PRIME A520M-K.\r\nCPU: Athlon 3000G / 5MB / 3.5GHz / 2 nhân 4 luồng / AM4.\r\nRAM: Có thể tùy chọn Nâng cấp.\r\nHDD: Có thể tùy chọn Nâng cấp.\r\nSSD: Verbatim Vi550 256GB Sata3.\r\nPSU: Jetek 350W Elite V2.\r\nCase: Jetek EM4.', 0, 7),
(29, 'Màn hình Dell UltraSharp U3224KB 32\" IPS 6K USBC chuyên đồ họa', 2439.11, 'sp-man-hinh-dell-ultrasharp-u3224kb-1.webp', 'Kiểu màn hình: Phẳng.\r\nKhông gian màu (sRGB): 100%; Delta E<2.\r\nKhông gian màu (DCI-P3): 99%.\r\nTấm nền: IPS.\r\nBề mặt Hiển thị: Chống lóa.\r\nTỷ lệ Tương phản (Typ.): 2000:1.\r\nKích thước: 32 inch.\r\nTrọng lượng: 18.62 lb.\r\nMàu hiển thị: 1.07B.\r\nThiết kế cơ học: Góc nghiêng :Có (-5° ~ 21°); Lật :Có (+-30° ~ -30°)', 0, 6),
(30, 'Màn hình cong Samsung Odyssey NEO ', 2320.80, 'sp-man-hinh-cong-SAMSUNG-1.webp', 'Khử nhấp nháy: Có.\r\nKích thước đóng gói:\r\n1455 x 420 x 557 mm.\r\nĐộ phân giải: 4K (7680 x 2160).\r\nKhông gian màu (DCI-P3): 99%.\r\nTấm nền: VA.\r\nBề mặt Hiển thị: Chống lóa.\r\nTỷ lệ Tương phản (Typ.): 2500:1.\r\nKích thước: 57 inch', 7, 6),
(31, 'Màn hình LG 27GS95QE-B UltraGear 27', 770.71, 'sp-man-hinh-LG-1.webp', 'Khử nhấp nháy: Có.\r\nKiểu màn hình: Phẳng.\r\nĐộ phân giải: 2K (2560 x 1440).\r\nĐộ sáng (Typ.): 275 - 1000 cd;m².\r\nKích thước: 27 inch.\r\nTương thích VESA: 100 x 100 mm.\r\nTỉ lệ khung hình: 16:9.\r\nMàu sắc: Đen.\r\nTấm nền: OLED.\r\nBề mặt Hiển thị: Chống lóa.\r\nPhụ kiện trong hộp: Dây nguồn; dây HDMI; dây DisplayPort (optional)', 0, 6),
(32, 'Màn hình cong Asus ROG Strix XG32VC 32\" 2K 170Hz HDR', 554.40, 'sp-man-hinh-cong-rog-strix-xg32vc-1.webp', 'Thương hiệu: Asus .\r\nBảo hành: 36.\r\nKích thước: 31.5 inch.\r\nĐộ phân giải: 2560x1440.\r\nTấm nền: VA.\r\nTần số quét: 170Hz .\r\nThời gian phản hồi: 1ms.\r\nKiểu màn hình ( phẳng / cong ): Cong.\r\nĐộ sáng: 400 cd/m2.\r\nGóc nhìn: 178°(H)/178°(V).\r\nKhả năng hiển thị màu sắc: 1073.7 triệu màu, 125% sRGB, DCI-P3 90%.\r\nĐộ tương phản tĩnh: 3000:1.', 0, 6),
(33, 'Màn hình ViewSonic VX2882-4KP 28', 491.38, 'sp-man-hinh-VIEWSONIC-1.jpg', 'Kích thước màn hình: 28inch.\r\nTấm nền: IPS.\r\nLoại độ phân giải: UHD.\r\nTương phản tĩnh: 1,000:1.\r\nTương phản động: 80M:1.\r\nĐộ sáng: 300 cd/m² (typ).\r\nMàu sắc hiển thị: 16.7 triệu màu.\r\nTỉ lệ khung hình: 16:9.\r\nThời gian phản hồi: 1ms.\r\nGóc nhìn: Ngang 178º / Dọc 178º .\r\nĐộ cong: Flat.\r\nKhông nhấp nháy: Có.\r\nTần số quét: 150Hz', 0, 6),
(34, 'Màn hình LG 32UN880-B 32\" IPS 4K HDR 10 chuyên đồ họa', 454.46, 'sp-man-hinh-LG-32un880-1.webp', 'Thương hiệu: LG.\r\nKích thước: 31.5 inch.\r\nĐộ phân giải: 4K & 5K UHD (3840 x 2160).\r\nTấm nền: IPS.\r\nTần số quét: 60Hz.\r\nThời gian phản hồi: 5ms.\r\nKiểu màn hình ( phẳng / cong ): Phẳng.\r\nĐộ sáng: 350 cd/m2.\r\nGóc nhìn: 178º(R/L), 178º(U/D).\r\nKhả năng hiển thị màu sắc: 1.07B màu,  DCI-P3 95% (CIE1976).\r\nTỉ lệ  tương phản: 1000 : 1.', 0, 6),
(35, 'Màn hình ASUS ROG Strix XG259QNS-W 25\" Fast IPS 380Hz chuyên game', 432.42, 'sp-man-hinh-asus-rog-strix-xg259qns-1.webp', 'Bảo hành: 36 tháng.\r\nKhông gian màu: 110% sRGB.\r\nPhụ kiện trong hộp: Dây nguồn; dây HDMI (optional); dây DisplayPort.\r\nKiểu màn hình: Phẳng.\r\nKích thước: 25 inch.\r\nTần số quét: 380 Hz.\r\nCổng kết nối: 1 x Display Port (1.4); 2 x HDMI™ (2.0); 2 x USBC TypeA.\r\nTấm nền: Fast IPS.\r\nKhử nhấp nháy: Có', 0, 6),
(36, 'Màn hình LG 27UP850N-W 27\" IPS 4K HDR USBC Chuyên Đồ họa', 328.55, 'sp-man-hinh-LG-27up850n-1.webp', 'Nhà sản xuất: LG .\r\nModel: 27UP850-W 27\" IPS 4K HDR USBC Chuyên Đồ họa.\r\nKích thước màn hình: 27 inch.\r\nĐộ phân giải: 3840 x 2160.\r\nTỷ lệ màn ảnh: 16:9.\r\nKích thước điểm ảnh: 0.1554 x 0.1554.\r\nĐộ sáng: 400 cd/m².\r\nĐộ sâu màu (Số màu): 1.07B.\r\nTỷ lệ tương phản (Điển hình): 1200:01:00.\r\nGóc xem (CR≥10): 178º(R/L), 178º(U/D)', 0, 6),
(37, 'Màn hình Dell UltraSharp U2424H 24\" IPS 120Hz', 223.88, 'sp-man-hinh-dell-ultrasharp-u2424h-1.webp', 'Khử nhấp nháy: Có.\r\nKhông gian màu (DCI-P3): 85%.\r\nBề mặt Hiển thị: Chống lóa.\r\nTỉ lệ khung hình: 16:9.\r\nTấm nền: IPS.\r\nKhông gian màu (sRGB): 100%; Delta E<2.\r\nThiết kế cơ học: Góc nghiêng :Có (-5° ~ 21°); Lật :Có (+45° ~ -45°); Xoay: Có (+-90° ~ -90°°) Điều chỉnh độ cao: 0 - 150 mm.\r\nTrọng lượng: 18.62 lb', 0, 6),
(38, 'Màn hình HKC MG27H7F 27', 164.84, 'sp-man-hinh-HKC-1.webp', 'Hãng sản xuất: HKC.\r\nModel: MG27H7F.\r\nKích thước màn hình: 27 inch.\r\nĐộ phân giải: 1920 x 1080 FullHD.\r\nTấm nền: Fast IPS.\r\nTỉ lệ: 16:9.\r\nTần số quét: 165hz.\r\nĐộ sáng: 300 cd/m2.\r\nKhả năng hiển thị màu sắc: 16.7 triệu màu DCI-P3 90%.\r\nThời gian đáp ứng: 1ms (MPRT).\r\nGóc nhìn: 178°(H)/178°(V).\r\nCổng kết nối: DP 1.2 x 1| HDMI 1.4 x 2| Audio out x 1', 0, 6),
(39, 'Màn hình di động Asus ZenScreen MB166CR 16\" IPS FHD USBC', 145.19, 'sp-man-hinh-di-dong-asus-1.webp', 'Trọng lượng: 1.70 kg.\nKhử nhấp nháy: Có.\nThời gian phản hồi: 5ms(GTG).\nKiểu màn hình: Phẳng.\nTần số quét: 60Hz.\nPhụ kiện (tuỳ khu vực): Chân đế 360°; Hướng dẫn bắt đầu nhanh; Cáp USB-C; Thẻ bảo hành; ZenScreen sleeve.\nBề mặt Hiển thị: Chống lóa.\nĐộ phân giải: Full HD (1920 x 1080)', 0, 6),
(40, 'Bàn phím cơ Razer Huntsman V2 Linear Optical Switch PUBG BATTLEGROUNDS Edition', 247.49, 'sp-ban-phim-co-razer-huntsman-v2-1.webp', 'Thương hiệu: Razer.\r\nLoại Switch: Razer™ Linear Optical Switch.\r\nSize: Full Size.\r\nKeycap: Doubleshot ABS keycaps.\r\nLed: Razer Chroma™ RGB customizable backlighting with 16.8 million color options.\r\nKẾT NỐI: Wired - Braided fiber cable.\r\nBỘ NHỚ TÍCH HỢP: Hybrid onboard storage – up to 5 keybinding profiles.', 0, 2),
(41, 'Bàn phím cơ Asus ROG Azoth White NX Snow', 235.69, 'sp-ban-phim-co-asus-rog-azoth-white-nx-snow-1.webp', 'Kết nối: + USB 2.0 (TypeC sang TypeA).\r\n               + Bluetooth 5.1.\r\n               + RF 2.4GHz.\r\nHệ thống đèn: RGB trên mỗi phím.\r\nAURA Sync: Có.\r\nBàn phím Anti-Ghosting: Chuyển đổi phím N.\r\nPhím Macro: Tất cả các phím có thể lập trình.\r\nPhím macro: Tất cả phím có thể lập trình.\r\nHệ điều hành: macOS® 10.11 hoặc mới hơn', 0, 2),
(42, 'Bàn phím cơ Asus ROG Azoth NX Snow', 235.66, 'sp-ban-phim-ASUS-1.webp', 'Kết nối: + USB 2.0 (TypeC sang TypeA).\r\n               + Bluetooth 5.1.\r\n               + RF 2.4GHz.\r\nHệ thống đèn: RGB trên mỗi phím.\r\nAURA Sync Có.\r\n\r\nBàn phím Anti-Ghosting:\r\nChuyển đổi phím N.\r\n\r\nPhím Macro: Tất cả các phím có thể lập trình.\r\nPhím macro: Tất cả phím có thể lập trình.\r\nHệ điều hành: macOS® 10.11 hoặc mới hơn.\r\nPhần mềm: Armoury Crate', 0, 2),
(43, 'Bàn Phím Cơ IQUNIX F97 Variable X Wireless RGB Cherry Brown', 226.22, 'sp-ban-phim-IQUNIX-1.webp', 'Hãng sản xuất: IQUNIX.\r\nModel: F97.\r\nLayout: 96%.\r\nSố phím: 100.\r\nChất liệu: ABS Keycaps + Aluminum Frame.\r\nSwitch: Cherry Brown.\r\nLed: RGB Backlit.\r\nTuổi thọ switch: 50/100 Triệu lần nhấn.\r\nKết nối: Bluetooth 5.1 / 2.4GHz / USB Type-C.\r\nStabilizers: Costar.\r\nHỗ trợ : Hot-Swappable.\r\nDung lượng pin: 4000mAh (5V*1A)', 0, 2),
(44, 'Bàn phím cơ Mountain Everest MAX Xám MX Brown Switch', 208.14, 'sp-ban-phim-co-mountain-everest-max-1.webp', 'Phụ kiện: Công cụ tháo combo keycap & switch keycap (Không bảo hành); USB Type C to C; USB Typr A to C; Chân Riser.\r\nPhím hiển thị: Màn hình LCD TFT 4: 72x72px cho mỗi phím.\r\nLed: RGB.\r\nSwitch: Cherry MX Red / Brown (Hotswap).\r\nKiểu bàn phím: Fullsize (Tuỳ chỉnh).\r\nKết nối: USB Type - C - Chiều dài 2m', 0, 2),
(45, 'Bàn phím cơ AKKO MOD007 v3 HE Year of Dragon', 176.65, 'sp-ban-phim-AKKO-1.webp', 'Bảo hành: 12 tháng.\r\nThương hiệu: Akko.\r\nRGB: Có.\r\nPhụ kiện: 1 sách hướng dẫn sử dụng + 1 dây USB Type-C + 1 Che bụi bàn phím + 1 Bộ Keycap tặng thêm + 1 Bộ dụng cụ + 1 Plate Đồng.\r\nKết nối: Có dây - USB Type-C 8k Hz.\r\nVỏ case: Nhôm 3 lớp điện ly - Hoạ tiết rồng xanh.\r\nPhần mềm: Tích hợp AKKO Cloud Driver', 10, 2),
(46, 'Bàn phím Logitech G715 TKL Off White Tactile (920-010467)', 173.09, 'sp-ban-phim-logitech-g715-1.webp', 'Hãng sản xuất: Logitech.\r\nModel: Logitech G715 TKL Off White.\r\nMàu: Trắng.\r\nKết nối: + Công nghệ LIGHTSPEED không dây.\r\n               + Bluetooth.\r\nSwitch: Tactile.\r\nKích thước: 370,6 mm x 157 mm x 37,2 mm.\r\nTrọng lượng: 976 g.\r\nPin: + Pin lithium polyme.\r\n        + Có thể sạc lại với thời lượng sử dụng lên đến 30 giờ', 0, 2),
(47, 'Bàn phím Logitech G Pro X 60 Light Speed Pink', 168.80, 'sp-ban-phim-logitech-g-pro-x-60-light-speed-pink-1.webp', 'Thương hiệu: Logitech.\r\nModel: Logitech G Pro X 60 Light Speed.\r\nMàu sắc: Hồng.\r\nKết nối:\r\n3 chế độ: + Lightspeed Wireless.\r\n                  + Lightspeed Bluetooth.\r\n                  + Có dây.\r\nKiểu dáng: + Thiết kế 60% được lấy cảm hứng chuyên nghiệp.\r\n                    + KEYCONTROL.\r\nSize: 60 phím', 0, 2),
(48, 'Bàn phím Razer Blackwidow V4 75% White Tactile', 160.93, 'sp-ban-phim-razer-blackwidow-v4-75-white-tactile-1.webp', 'Hãng sản xuất: Razer.\r\nModel: Razer Blackwidow V4 75% White Tactile.\r\nSwitch: Tactile.\r\nKeycaps: Doubleshot ABS Keycaps.\r\nKích thước: 75%.\r\nLED: Razer Chroma™ RGB.\r\nBộ nhớ tích hợp: Bộ nhớ trên bo mạch kết hợp - lên đến 5 cấu hình.\r\nKết nối: Cáp loại C có thể tháo rời.\r\nHotswap: 5Pin.', 0, 2),
(49, 'Bàn phím cơ Varmilo MIYA PRO Summit V2 Brown', 160.93, 'sp-ban-phim-co-varmilo-miya-pro-summit-v2-brown-1.webp', 'Thương hiệu:	Varmilo.\r\nThiết kế:	Mini 68 phím.\r\nKết nối: Có dây.\r\nLED: Led đơn.\r\nKích thước: 341 x 108 x 35mm.\r\nTrọng lượng: 1.2kg.\r\nKeycap:	PBT Dye sub.\r\nSwitch: Cherry MX Blue / Brown / Red / Silent Red.\r\nTương thích:	Windows / MacOS.', 20, 2),
(50, 'Bàn phím cơ Asus ROG Falchion RX Low Profile Blue Switch', 153.06, 'sp-ban-phim-co-asus-rog-falchion-rx-low-profile-blue-switch-1.webp', 'Thương hiệu: Asus.\r\nModel: Asus ROG Falchion RX Low Profile.\r\nMàu sắc: Trắng.\r\nKết nối: + USB 2.0 (TypeC to TypeA).\r\n              + Bluetooth 5.1.\r\n              + RF 2.4GHz.\r\nLayout: 65%.\r\nĐèn led: RGB.\r\nSwitch: ROG RX Low-Profile Switch.\r\nAURA Sync: Có', 0, 2),
(51, 'Bàn phím Bluetooth Rapoo Ralemo Pre 5 Red Red Switch', 78.29, 'SP-ban-phim-RAPOO-1.webp', 'Hãng sản xuất: Rapoo.\r\nTên sản phẩm: Rapoo Ralemo Pre 5 Red Red Switch.\r\nMàu sắc: Đỏ.\r\nKiểu dáng: 79.\r\nKết nối: Bluetooth 3.0, Bluetooth 5.0, 2.4GHz và các chế độ có dây.\r\nSwitch: Rapoo Red.', 0, 2),
(52, 'Chuột Razer không dây Viper V3 Pro Trắng', 176.65, 'sp-chuot-RAZER-1.webp', 'Thương hiệu: Razer.\r\nModel: Viper V3 Pro.\r\nMàu sắc: Trắng.\r\nDPI tối đa: 35000.\r\nIPS tối đa: 750.\r\nGia tốc tối đa (G): 70.\r\nKết nối: Razer™ HyperSpeed Wireless. Có dây - Cáp Speedflex.\r\nThiết kế: Đối xứng.\r\nSố nút có thể lập trình: 6 nút.\r\nThời lượng Pin: + Lên đến 95 giờ khi dùng 1000 Hz', 0, 3),
(53, 'Chuột Razer Deathadder V3 Pro Faker Edition', 153.06, 'sp-chuot-razer-deathadder-v3-pro-faker-edition-1.webp', 'Thương hiệu: Razer.\r\nMàu sắc: Đỏ.\r\nKết nối: Không dây.\r\nThời lượng pin: Lên đến 90 giờ.\r\nLed: Không.\r\nCảm biến: Cảm biến quang học Focus Pro 30K.\r\nDPI: 30000.\r\nIPS: 750.\r\nGia tốc tối đa (G): 70.\r\nSố nút: 5.\r\nSwitch: Optical Gen-3.\r\nTuổi thọ Switch: Lên đến 90 triệu lần nhấn', 0, 3),
(54, 'Chuột Logitech G Pro X Superlight Wireless Red', 129.44, 'sp-chuot-LOGITECH-1.webp', 'Hãng sản xuất: Logitech.\r\nModel: G Pro X Superlight 2 Magenta.\r\nMàu: Black.\r\nTần suất gửi tín hiệu USB: 2000 Hz (0.5ms).\r\nBộ vi xử lý: 32-bit ARM.\r\nChuyển động liên tục: 95h.\r\nTương thích: POWERPLAY.\r\nCông nghệ không dây: LIGHTSPEED.\r\nNút: 5 nút.\r\nCảm biến: HERO 2.\r\nĐộ phân giải: 100 – 32.000 DPI', 0, 3),
(55, 'Chuột ASUS ROG Harpe Ace Aim Lab Edition', 113.71, 'sp-chuot-asus-rog-harpe-ace-aim-lap-edition-1.webp', 'Thương hiệu: Asus.\r\nModel: Chuột gaming FPS không dây ROG Harpe Ace Aim Lab Edition, chuột cực nhẹ, cảm biến ROG Aimpoint độc quyền 36000 dpi, ROG SpeedNova, Aura Sync.\r\nMàu sắc: Đen.\r\nKiểu dáng: Đối xứng.\r\nSố nút: 5.\r\nSwitch chuột: Rog lên đến 70 triệu lần nhấn.\r\nKết nối: Có dây / Bluetooth 5.1 / Wireless 2.4GHz', 0, 3),
(56, 'Chuột Logitech MX Master 3S Pale Grey', 88.53, 'sp-chuot-logitech-mx-master-3s-white-1.webp', 'Loại chuột: Văn phòng.\r\nMàu sắc: Trắng.\r\nTrọng lượng: 141g.\r\nKích thước: 124,9 x 84,3 x 51 mm.\r\nCông nghệ cảm biến: Darkfield có độ chính xác cao.\r\nDPI: 200-8000 (có thể thiết lập với các mức tăng là 50 dpi).\r\nNút: 7 nút (Nhấp trái/phải, Quay lại/Tiếp tục, Chuyển đổi ứng dụng, Chuyển chế độ nút cuộn, Nhấp chuột giữa)', 0, 3),
(57, 'Chuột Pulsar Xlite Wireless V2 Mini Pink', 70.42, 'sp-chuot-PULSAR-1.webp', 'Hãng sản xuất: Pulsar .\r\nBảo hành: 24 Tháng.\r\nKết nối: Có dây / Không dây 2.4Ghz (1 trong 2).\r\nThiết kế: Công thái học cho người thuận tay phải.\r\nCảm biến: PAW3370.\r\nDPI: 50 - 20,000.\r\nIPS: 400.\r\nSố nút: 5.\r\nSwitch chuột: Kailh GM 8.0.\r\nPin: Thời lượng lên tới 70 giờ.\r\nTương thích: Windows / Mac / Linux.\r\nTrọng lượng siêu nhẹ: 55g', 0, 3),
(58, 'Chuột Logitech MX Anywhere 3S Rose', 60.99, 'sp-chuot-logitech-mx-anywhere-3s-rose-1.webp', 'Loại chuột: Văn phòng.\r\nMàu sắc: Hồng.\r\nTrọng lượng: 99g .\r\nKích thước: 10.05 x 6.5 x 3.44 cm.\r\nCông nghệ cảm biến: Cảm biến Darkfield.\r\nDPI: 200 - 8000 DPI.\r\nNút: 6 nút.\r\nKhoảng cách không dây: 10 m.\r\nKết nối: Bluetooth.\r\nPin: 500 mAh có thể sạc (thông qua cáp USB-C đi kèm).\r\nPhần mềm: Logi Options và Logitech Flow', 0, 3),
(59, 'Chuột Glorious Model O Wired 2 Matte Black', 58.62, 'sp-chuot-GLORIOUS-1.webp', 'Kiểu cầm chuột:Đối xứng.\r\nMàu sắc: Đen.\r\nKết nối: Ascended Cable dạng paracord.\r\nCảm biến: + Glorious BAMF 2.0.\r\n                   + 100 - 26000 DPI.\r\n                   + 650 IPS.\r\n                   + Hỗ trợ Motion Sync.\r\nChiều dài cáp: 2 m.\r\nSwitch: Glorious 80 triệu lần nhấn.\r\nThông số khác: + Debounce time: 0 - 16ms.\r\n                            + Polling rate: 1ms (1000Hz)', 0, 3),
(61, 'Tai nghe Apple AirPods Max Pink', 483.52, 'sp-tai-nghe-APPLE-1.webp', 'Công nghệ âm thanh: + Trình điều khiển động do Apple thiết kế.\r\n                                       + Khử tiếng ồn chủ động.\r\n                                       +  Chế độ minh bạch.\r\n                                       +  EQ thích ứng.\r\n                                       +  Âm thanh không gian với tính năng theo dõi đầu động.\r\nCảm biến: + Cảm biến quang học (mỗi cốc tai)', 0, 5),
(62, 'Tai nghe Edifier Không dây W820NB Xanh Lá', 42.88, 'sp-tai-nghe-EDIFIER-1.webp', 'Công nghệ âm thanh: Chống ồn chủ động ANC.\r\nKiểu tai nghe: Over-ear.\r\nKiểu kết nối: USB Type-C; Bluetooth 5.0.\r\nCổng sạc: Typer - C - Sạc nhanh.\r\nTình trạng: Mới 100% - Fullbox.\r\nBảo hành: 12 tháng.\r\nMicro: Có.\r\nThời lượng pin: 49 giờ.\r\nThương hiệu: Edifier.\r\nThời gian sạc: 1.5 giờ.\r\nPhạm vi kết nối: 10m.', 0, 5),
(63, 'Tai nghe Focal Listen Black', 288.77, 'sp-tai-nghe-FOCAL.webp', 'Hãng sản xuất:FOCAL.\r\nBluetooth: 4.1.\r\nPhạm vi: 10m.\r\nThời gian sử dụng: Đến 8h.\r\nTần số: 15Hz – 22kHz.\r\nChiều dài cáp: 4,60ft (1,4m).\r\nTrọng lượng: 0,60lb (273g).\r\nTrở kháng: 32Ω.\r\nTương thích: Android, IOS, Thiết bị sử dụng blutooth.', 0, 5),
(64, 'Tai nghe Bluetooth Jabra Elite 85h Black', 314.34, 'sp-tai-nghe-JABRA-1.webp', '- Jabra Elite 85h là tai nghe chống ồn đầu tiên của Jabra.\r\n- Elite 85h là sản phẩm đầu tiên được trang bị công nghệ Smartsound độc quyền của Jabra, đạt thời lượng pin sử dụng ấn tượng 32h và tích hợp trợ lý ảo cả Alexa lẫn Google Assistant.\r\n- Smartsound là công nghệ của Jabra giúp Elite 85h có thể tự động cân chỉnh mức độ chống ồn tuỳ thuộc vào môi trường xung quanh', 0, 5),
(65, 'Tay cầm DareU H105 Wireless Trắng Tím', 21.64, 'sp-tay-cam-DAREU-1.webp', '3 Chế độ kết nối: USB cable+2.4G+Bluetooth.\r\nHỗ trợ: PC/Android/Switch (Windows 7/8/10/11, Android 5.0 or above).\r\nKeys: 24 keys for the whole machine.\r\nPin: 930mA.\r\nLED: RGB.\r\nThời gian sử dụng: lên đến 25 giờ.\r\nSạc: 3 – 3.5 giờ.\r\nTrọng lượng: 210 +/- 10g.\r\nBảo hành: 12 tháng.\r\nMàu sắc: Trắng tím.', 0, 4),
(66, 'Tay cầm Logitech Driving G29 Driving Force', 251.40, 'sp-tay-cam-LOGITECH-1.webp', 'Vô lăng: Xoay: Tận cùng 900 độ.\r\n                           Cảm biến lái hiệu ứng Hall.\r\n                           Phản hồi lực mô tơ kép.\r\n                           Bảo vệ quá nhiệt.\r\n                           Chiều cao: 10,63 in (270 mm).\r\n                           Chiều rộng: 10,24 in (260 mm).\r\n                           Chiều dài: 10,94 in (278 mm)', 30, 4),
(67, 'Tay cầm Rapoo V600S Starry Silver', 20.46, 'sp-tay-cam-RAPOO-1.webp', 'Thương hiệu: Rapoo.\r\nTên sản phẩm: Rapoo V600S Starry Silver.\r\nBảo hành: 24 Tháng.\r\nMàu sắc: Bạc.\r\nKết nối: Không dây 2,4 GHz thông qua USB Receiver.\r\nPin: Pin sạc tích hợp sẵn.\r\nCổng sạc: Sạc qua cổng USB.\r\nTrọng lượng: 277 g.\r\nKích thước: 153 x 106 x 62 mm.', 0, 4),
(68, 'Tay cầm Microsoft Xbox Wireless Controller Pulse Red', 66.49, 'sp-tay-cam-XBOX-1.webp', 'Hãng sản xuất: Microsoft.\r\nBảo hành: 12 tháng.\r\nModel: Microsoft Xbox Wireless Controller Pulse Red.\r\nMàu sắc: Đỏ.\r\nKiểu kết nối: Kết nối đến Xbox consoles với Xbox Wireless. Kết nối đến thiết bị Windows 10, máy tính bảng, điện thoại iOS and Android thông qua Bluetooth', 1, 4),
(69, 'Ghế chơi game ASUS ROG Chariot Core - SL300C RGB', 668.48, 'sp-ghe-choi-game-ASUS-1.webp', 'Chất liệu khung: Kim loại.\r\nChất liệu da: Da cao cấp PU.\r\nMàu sắc: Đen.\r\nĐèn LED: Có, LED AGB.\r\nĐộ ngả lưng tối đa: 145 độ.\r\nLoại kê tay: 4D.\r\nNâng hạ kê tay: Có.\r\nBộ nâng thủy lực: Class 4 grade.\r\nĐế chân ghế: Hợp kim nhôm.\r\nLoại chân: 5 cánh hình sao', 0, 8),
(70, 'Ghế Corsair TC200 Leatherette Light Grey/White', 278.96, 'sp-ghe-CORSAIR-1.webp', 'Hãng sản xuất: Corsair.\r\nChất liệu: Giả da.\r\nCân nặng: 120Kg.\r\nChiều cao: 196cm.\r\nPhần kê tay: 4D.\r\nGóc ngả: 90°-180°.\r\nKích thước ghế: 56cm x 58cm.\r\nChiều cao lưng ghế: 83cm.\r\nĐộ rộng lưng ghế: 53cm.\r\nKích thước bánh xe: 75mm.\r\nChất liệu khung ghế: Thép.\r\nMã sản phẩm: GHE-COR-TC200-LE-GREY-WHITE.', 0, 8),
(71, 'Ghế Cougar Ranger Pro Sofa Gaming', 310.42, 'sp-ghe-cougar-ranger-pro-sofa-gaming-1.webp', 'Thương hiệu: Cougar.\r\nChất liệu: Da PVC cao cấp thoáng khí.\r\nCơ chế: Góc ngã lưng 95° - 160°.\r\nBàn phụ: Bàn xoay có thể tháo rời, lắp được 2 bên. Có cổng USB Type-C.\r\nKích thước tổng: 740 x 980 x 1025 (mm).\r\nTải trọng tối đa: 160Kg.\r\nPhụ kiện: Ghế, Lục giác, Ốc vít, Tài liệu hướng dẫn.', 0, 8),
(72, 'Ghế Ergonomic Warrior Hero series WEC506 Black/Gray V2.0', 149.11, 'sp-ghe-ergonomic-warrior-hero-1.jpg', 'Hãng sản xuất: Warrior.\r\nSản phẩm: Ghế Ergonomic Warrior Hero series WEC506 v2.0.\r\nChất liệu: Lưng lưới – Mâm ngồi foam lạnh.\r\nNgã lưng: True Tilt (có chức năng khóa / mở ngả lưng).\r\nPhần kê tay: 3D.\r\nTựa đầu: 3D.\r\nTrục thủy lực: Piston Class 3 bền bỉ', 0, 8),
(73, 'Bàn Gaming Cooler Master GD160 ARGB E1', 703.85, 'sp-ban-gaming-cooler-master-1.webp', 'Kích thước: 160 x 75 cm.\r\nTrọng tải tối đa: 100 kg.\r\nVật liệu: Ván, nhôm, thép.\r\nKhay quản lý cáp: Có.\r\nĐộng cơ kép: Có.\r\nĐiện áp đầu vào: 100 ~ 240VAC, 50/60 Hz.\r\nKhả năng tương thích của dây nguồn: US, UK, EU, AU, KR, JP, TW, CN.\r\nThắp sáng: ARGB (mặt trước và mặt sau)', 40, 9),
(74, 'Bàn nâng hạ Cougar ROYAL MOSSA 150 WHITE', 251.40, 'sp-ban-nang-ha-cougar-royal-mossa-1.webp', 'Vật liệu: Mặt bàn một mảnh.\r\nMàu sắc: Trắng.\r\nĐiều chỉnh độ cao: Điều chỉnh độ cao bằng điện 72cm – 115cm.\r\nKích thước: Dài 1500mm x Rộng 600mm x Cao 720mm – 1150mm.\r\nTải trọng: 80kg.', 0, 9),
(75, 'Bàn nâng hạ Cougar E-STAR 140 Black', 196.32, 'sp-ban-nang-ha-cougar-e-star-140-black-1.webp', 'Vật liệu: 	Mặt bàn một mảnh.\r\nMàu sắc: Đen.\r\nĐiều chỉnh độ cao: Điều chỉnh độ cao bằng điện 72cm – 117cm.\r\nKích thước: Dài 1400mm x Rộng 600mm x Cao 720mm – 117mm.\r\nTải trọng: 60kg.\r\nLót chuột: Có (full size).\r\nGiá đỡ màn hình: 	Có (có thể tháo rời).\r\nMóc treo tai nghe: Có', 0, 9),
(76, 'Bàn nâng hạ Cougar ROYAL MOSSA 120 WHITE', 235.66, 'sp-ban-nang-ha-cougar-royal-mossa-120-white-1.webp', 'Vật liệu: 	Mặt bàn một mảnh.\r\nMàu sắc: Trắng.\r\nĐiều chỉnh độ cao: Điều chỉnh độ cao bằng điện 72cm – 115cm.\r\nKích thước: Dài 1200mm x Rộng 600mm x Cao 720mm – 1150mm.\r\nTải trọng: 80kg.', 0, 9);
CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'songtinhcam3', '123', 'ngoduong323447@gmail.com', 'HCM', '12345678999', 1),
(2, 'huy', '123', 'lovepoitys@gmail.com', 'Japan', '0943090202', 1),
(3, 'songtinhcam4', '123', 'flexingchilazotink@gmail.com', NULL, NULL, 0);
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idbill` (`idbill`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `iduser` (`iduser`);
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sampham_danhmuc` (`iddm`);
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sampham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;


