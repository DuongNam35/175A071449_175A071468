-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 29, 2019 lúc 02:07 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bangtin`
--

CREATE TABLE `bangtin` (
  `id` int(11) NOT NULL,
  `tieude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinngan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `theloai` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemtp`
--

CREATE TABLE `diemtp` (
  `id` int(11) NOT NULL,
  `mamonhoc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msv` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem` int(11) NOT NULL,
  `trongso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `idgiangvien` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `htgiangvien` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `malop` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mamonhoc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idnganh` int(11) NOT NULL,
  `namhoc` int(11) NOT NULL,
  `hocky` int(11) NOT NULL,
  `msv` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idgiangvien` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `mamonhoc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenmonhoc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idgianvien` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganhhoc`
--

CREATE TABLE `nganhhoc` (
  `idnganh` int(11) NOT NULL,
  `tennganh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(10) UNSIGNED NOT NULL,
  `tennguoidung` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mknguoidung` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capbac` int(11) NOT NULL,
  `matruycap` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `msv` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmtnd` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoten` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lop` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tongdiem`
--

CREATE TABLE `tongdiem` (
  `id` int(10) UNSIGNED NOT NULL,
  `mamonhoc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msv` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongdiem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bangtin`
--
ALTER TABLE `bangtin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `diemtp`
--
ALTER TABLE `diemtp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `msv` (`msv`),
  ADD KEY `mamonhoc` (`mamonhoc`);

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`idgiangvien`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`malop`),
  ADD KEY `idnganh` (`idnganh`),
  ADD KEY `idgiangvien` (`idgiangvien`),
  ADD KEY `mamonhoc` (`mamonhoc`),
  ADD KEY `msv` (`msv`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`mamonhoc`),
  ADD KEY `idgianvien` (`idgianvien`);

--
-- Chỉ mục cho bảng `nganhhoc`
--
ALTER TABLE `nganhhoc`
  ADD PRIMARY KEY (`idnganh`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`msv`);

--
-- Chỉ mục cho bảng `tongdiem`
--
ALTER TABLE `tongdiem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `msv` (`msv`),
  ADD KEY `mamonhoc` (`mamonhoc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bangtin`
--
ALTER TABLE `bangtin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diemtp`
--
ALTER TABLE `diemtp`
  ADD CONSTRAINT `diemtp_ibfk_1` FOREIGN KEY (`msv`) REFERENCES `sinhvien` (`msv`),
  ADD CONSTRAINT `diemtp_ibfk_2` FOREIGN KEY (`mamonhoc`) REFERENCES `monhoc` (`mamonhoc`);

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`idnganh`) REFERENCES `nganhhoc` (`idnganh`),
  ADD CONSTRAINT `lop_ibfk_2` FOREIGN KEY (`idgiangvien`) REFERENCES `giangvien` (`idgiangvien`),
  ADD CONSTRAINT `lop_ibfk_3` FOREIGN KEY (`mamonhoc`) REFERENCES `monhoc` (`mamonhoc`),
  ADD CONSTRAINT `lop_ibfk_4` FOREIGN KEY (`msv`) REFERENCES `sinhvien` (`msv`);

--
-- Các ràng buộc cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`idgianvien`) REFERENCES `giangvien` (`idgiangvien`);

--
-- Các ràng buộc cho bảng `tongdiem`
--
ALTER TABLE `tongdiem`
  ADD CONSTRAINT `tongdiem_ibfk_1` FOREIGN KEY (`msv`) REFERENCES `sinhvien` (`msv`),
  ADD CONSTRAINT `tongdiem_ibfk_2` FOREIGN KEY (`mamonhoc`) REFERENCES `monhoc` (`mamonhoc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
