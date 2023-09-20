-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 25, 2023 lúc 10:49 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nvcb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bl2`
--

CREATE TABLE `bl2` (
  `IDBL2` int(10) UNSIGNED NOT NULL,
  `IDBL3` int(10) UNSIGNED DEFAULT NULL,
  `Ngaysinhhoat` datetime DEFAULT NULL,
  `Ngaybaotin` datetime DEFAULT NULL,
  `Tinbao` text DEFAULT NULL,
  `Xylytin` text DEFAULT NULL,
  `Ketqua` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bl3`
--

CREATE TABLE `bl3` (
  `IDBL3` int(10) UNSIGNED NOT NULL,
  `IDCTV` int(10) UNSIGNED DEFAULT NULL,
  `Ngaydauki` datetime DEFAULT NULL,
  `Ngaycuoiki` datetime DEFAULT NULL,
  `CBPhanloai` int(10) UNSIGNED DEFAULT NULL,
  `CHPhanloai` int(10) UNSIGNED DEFAULT NULL,
  `Phanloai` int(10) UNSIGNED DEFAULT NULL,
  `Nx_Dx` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bl3`
--

INSERT INTO `bl3` (`IDBL3`, `IDCTV`, `Ngaydauki`, `Ngaycuoiki`, `CBPhanloai`, `CHPhanloai`, `Phanloai`, `Nx_Dx`) VALUES
(1, 1, '2022-10-30 00:00:00', '2023-04-30 00:00:00', 2, 2, NULL, NULL),
(2, 2, '2022-11-30 00:00:00', '2023-05-30 00:00:00', 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctv`
--

CREATE TABLE `ctv` (
  `IDCTV` int(10) UNSIGNED NOT NULL,
  `Sodangky` varchar(40) DEFAULT NULL,
  `Ngaydangky` datetime DEFAULT NULL,
  `LoaiCTV` int(10) UNSIGNED DEFAULT NULL,
  `Bidanh` varchar(40) DEFAULT NULL,
  `NgayPhanloai` datetime DEFAULT NULL,
  `DVSD` int(10) UNSIGNED DEFAULT NULL,
  `CBSD` varchar(40) DEFAULT NULL,
  `DVLap` int(10) UNSIGNED DEFAULT NULL,
  `CBLap` varchar(40) DEFAULT NULL,
  `Status` varchar(40) DEFAULT NULL,
  `Diaban` text DEFAULT NULL,
  `Doituong` varchar(40) DEFAULT NULL,
  `Vitri` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ctv`
--

INSERT INTO `ctv` (`IDCTV`, `Sodangky`, `Ngaydangky`, `LoaiCTV`, `Bidanh`, `NgayPhanloai`, `DVSD`, `CBSD`, `DVLap`, `CBLap`, `Status`, `Diaban`, `Doituong`, `Vitri`) VALUES
(1, '145LC1018/7010106', NULL, 1, 'Bông', NULL, 1, 'Phan Nhật Tinh', 1, 'Phan Nhật Tính', 'HH', NULL, NULL, NULL),
(2, '38LC0721/7010110', NULL, 1, 'Bắc', NULL, 2, 'Huỳnh Duyệt', 2, 'Huỳnh Duyệt', 'HH', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doituong`
--

CREATE TABLE `doituong` (
  `IDDoituong` int(10) UNSIGNED NOT NULL,
  `Hovaten` varchar(40) DEFAULT NULL,
  `Ngaysinh` datetime DEFAULT NULL,
  `CCCD` varchar(40) DEFAULT NULL,
  `TATS` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvi`
--

CREATE TABLE `donvi` (
  `IDDonvi` int(10) UNSIGNED NOT NULL,
  `Tendonvi` varchar(40) DEFAULT NULL,
  `Hedonvi` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donvi`
--

INSERT INTO `donvi` (`IDDonvi`, `Tendonvi`, `Hedonvi`) VALUES
(1, 'CAP ĐaKao', NULL),
(2, 'CAP Tân Định', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ketqua`
--

CREATE TABLE `ketqua` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Ketqua` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ketqua`
--

INSERT INTO `ketqua` (`ID`, `Ketqua`) VALUES
(1, 'Xử lý VPHC');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaictv`
--

CREATE TABLE `loaictv` (
  `IDLoaiCTV` int(10) UNSIGNED NOT NULL,
  `Loai` varchar(40) DEFAULT NULL,
  `Ten` varchar(40) DEFAULT NULL,
  `Ghichu` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaictv`
--

INSERT INTO `loaictv` (`IDLoaiCTV`, `Loai`, `Ten`, `Ghichu`) VALUES
(1, 'CSBM', 'Cơ sở bí mật', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `membership_grouppermissions`
--

CREATE TABLE `membership_grouppermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) NOT NULL DEFAULT 0,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `membership_grouppermissions`
--

INSERT INTO `membership_grouppermissions` (`permissionID`, `groupID`, `tableName`, `allowInsert`, `allowView`, `allowEdit`, `allowDelete`) VALUES
(1, 2, 'CTV', 1, 3, 3, 3),
(2, 2, 'BL3', 1, 3, 3, 3),
(3, 2, 'BL2', 1, 3, 3, 3),
(4, 2, 'LoaiCTV', 1, 3, 3, 3),
(5, 2, 'STCN', 1, 3, 3, 3),
(6, 2, 'STCNSTT', 1, 3, 3, 3),
(7, 2, 'DONVI', 1, 3, 3, 3),
(8, 2, 'DOITUONG', 1, 3, 3, 3),
(9, 2, 'PhanLoai_CTV', 1, 3, 3, 3),
(10, 2, 'TinBao', 1, 3, 3, 3),
(11, 2, 'XulyTin', 1, 3, 3, 3),
(12, 2, 'Ketqua', 1, 3, 3, 3),
(13, 3, 'CTV', 1, 1, 1, 0),
(14, 3, 'BL3', 1, 1, 1, 0),
(15, 3, 'BL2', 1, 1, 1, 1),
(16, 3, 'LoaiCTV', 0, 0, 0, 0),
(17, 3, 'STCN', 1, 1, 1, 0),
(18, 3, 'STCNSTT', 1, 1, 1, 1),
(19, 3, 'DONVI', 0, 0, 0, 0),
(20, 3, 'DOITUONG', 1, 1, 1, 0),
(21, 3, 'PhanLoai_CTV', 0, 0, 0, 0),
(22, 3, 'TinBao', 0, 0, 0, 0),
(23, 3, 'XulyTin', 0, 0, 0, 0),
(24, 3, 'Ketqua', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `membership_groups`
--

CREATE TABLE `membership_groups` (
  `groupID` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `allowSignup` tinyint(4) DEFAULT NULL,
  `needsApproval` tinyint(4) DEFAULT NULL,
  `allowCSVImport` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `membership_groups`
--

INSERT INTO `membership_groups` (`groupID`, `name`, `description`, `allowSignup`, `needsApproval`, `allowCSVImport`) VALUES
(1, 'anonymous', 'Anonymous group created automatically on 2023-08-25', 0, 0, 0),
(2, 'Admins', 'Admin group created automatically on 2023-08-25', 0, 1, 0),
(3, 'CAP', '', 0, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `membership_userpermissions`
--

CREATE TABLE `membership_userpermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `memberID` varchar(100) NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) NOT NULL DEFAULT 0,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `membership_userrecords`
--

CREATE TABLE `membership_userrecords` (
  `recID` bigint(20) UNSIGNED NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `pkValue` varchar(255) DEFAULT NULL,
  `memberID` varchar(100) DEFAULT NULL,
  `dateAdded` bigint(20) UNSIGNED DEFAULT NULL,
  `dateUpdated` bigint(20) UNSIGNED DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `membership_userrecords`
--

INSERT INTO `membership_userrecords` (`recID`, `tableName`, `pkValue`, `memberID`, `dateAdded`, `dateUpdated`, `groupID`) VALUES
(1, 'LoaiCTV', '1', 'root', 1692949128, 1692949128, 2),
(2, 'DONVI', '1', 'root', 1692949147, 1692949147, 2),
(3, 'DONVI', '2', 'root', 1692949155, 1692949155, 2),
(4, 'PhanLoai_CTV', '1', 'root', 1692949175, 1692949175, 2),
(5, 'PhanLoai_CTV', '2', 'root', 1692949195, 1692949195, 2),
(6, 'PhanLoai_CTV', '3', 'root', 1692949203, 1692949203, 2),
(7, 'TinBao', '1', 'root', 1692949223, 1692949223, 2),
(8, 'XulyTin', '1', 'root', 1692949238, 1692949238, 2),
(9, 'Ketqua', '1', 'root', 1692949288, 1692949288, 2),
(10, 'CTV', '1', 'dk_pnt', 1692949331, 1692949331, 3),
(11, 'BL3', '1', 'dk_pnt', 1692949552, 1692949552, 3),
(12, 'CTV', '2', 'td_huynhduyet', 1692949593, 1692949593, 3),
(13, 'BL3', '2', 'td_huynhduyet', 1692949620, 1692949620, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `membership_users`
--

CREATE TABLE `membership_users` (
  `memberID` varchar(100) NOT NULL,
  `passMD5` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text DEFAULT NULL,
  `custom2` text DEFAULT NULL,
  `custom3` text DEFAULT NULL,
  `custom4` text DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `pass_reset_key` varchar(100) DEFAULT NULL,
  `pass_reset_expiry` int(10) UNSIGNED DEFAULT NULL,
  `flags` text DEFAULT NULL,
  `allowCSVImport` tinyint(4) NOT NULL DEFAULT 0,
  `data` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `membership_users`
--

INSERT INTO `membership_users` (`memberID`, `passMD5`, `email`, `signupDate`, `groupID`, `isBanned`, `isApproved`, `custom1`, `custom2`, `custom3`, `custom4`, `comments`, `pass_reset_key`, `pass_reset_expiry`, `flags`, `allowCSVImport`, `data`) VALUES
('dk_pnt', '$2y$10$sGuQQvcFn2.svtJHFtPqse1xw4WQbY9pMgiv79Tqt26TVhOhUp51q', 'pnt@fara.com', '2023-08-25', 3, 0, 1, '', '', '', '', '', NULL, NULL, NULL, 0, NULL),
('guest', NULL, NULL, '2023-08-25', 1, 0, 1, NULL, NULL, NULL, NULL, 'Anonymous member created automatically on 2023-08-25', NULL, NULL, NULL, 0, NULL),
('root', '$2y$10$u4qb5reBATwJmOK.zAEnrOQEOG7KjOVNL8lUjYkJCP4zc1hlvA7x2', 'faraanh96@gmail.com', '2023-08-25', 2, 0, 1, NULL, NULL, NULL, NULL, 'Admin member created automatically on 2023-08-25', NULL, NULL, NULL, 0, NULL),
('td_huynhduyet', '$2y$10$7QYP4EUEReQgEb3DveEWY.qQ80dZFYGmvnDYmc.cSv8EBwCZ.mnj.', 'huynhduyet@fara.com', '2023-08-25', 3, 0, 1, '', '', '', '', '', NULL, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `membership_usersessions`
--

CREATE TABLE `membership_usersessions` (
  `memberID` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `agent` varchar(100) NOT NULL,
  `expiry_ts` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanloai_ctv`
--

CREATE TABLE `phanloai_ctv` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Phanloai` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phanloai_ctv`
--

INSERT INTO `phanloai_ctv` (`ID`, `Phanloai`) VALUES
(1, 'Xuất sắc'),
(2, 'Khá'),
(3, 'Trung bình');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stcn`
--

CREATE TABLE `stcn` (
  `IDSTCN` int(10) UNSIGNED NOT NULL,
  `Sodangki` varchar(40) DEFAULT NULL,
  `Ngaydangki` datetime DEFAULT NULL,
  `Ngaylap` datetime DEFAULT NULL,
  `CBLap` varchar(40) DEFAULT NULL,
  `DVLap` int(10) UNSIGNED DEFAULT NULL,
  `CBQuanly` varchar(40) DEFAULT NULL,
  `DVQuanly` int(10) UNSIGNED DEFAULT NULL,
  `Doituong` int(10) UNSIGNED DEFAULT NULL,
  `Status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stcnstt`
--

CREATE TABLE `stcnstt` (
  `IDSTT` int(10) UNSIGNED NOT NULL,
  `Phanloai` varchar(40) DEFAULT NULL,
  `Danhmuc` varchar(40) DEFAULT NULL,
  `Heloai` varchar(40) DEFAULT NULL,
  `IDSTCN` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinbao`
--

CREATE TABLE `tinbao` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TenTinbao` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tinbao`
--

INSERT INTO `tinbao` (`ID`, `TenTinbao`) VALUES
(1, 'Địa bàn ổn định');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xulytin`
--

CREATE TABLE `xulytin` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Xulytin` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `xulytin`
--

INSERT INTO `xulytin` (`ID`, `Xulytin`) VALUES
(1, 'Kiểm tra hành chính phòng ngừa');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bl2`
--
ALTER TABLE `bl2`
  ADD PRIMARY KEY (`IDBL2`),
  ADD KEY `IDBL3` (`IDBL3`);

--
-- Chỉ mục cho bảng `bl3`
--
ALTER TABLE `bl3`
  ADD PRIMARY KEY (`IDBL3`),
  ADD KEY `IDCTV` (`IDCTV`),
  ADD KEY `CBPhanloai` (`CBPhanloai`),
  ADD KEY `CHPhanloai` (`CHPhanloai`),
  ADD KEY `Phanloai` (`Phanloai`);

--
-- Chỉ mục cho bảng `ctv`
--
ALTER TABLE `ctv`
  ADD PRIMARY KEY (`IDCTV`),
  ADD UNIQUE KEY `Sodangky_unique` (`Sodangky`),
  ADD KEY `LoaiCTV` (`LoaiCTV`),
  ADD KEY `DVLap` (`DVLap`);

--
-- Chỉ mục cho bảng `doituong`
--
ALTER TABLE `doituong`
  ADD PRIMARY KEY (`IDDoituong`),
  ADD UNIQUE KEY `CCCD_unique` (`CCCD`);

--
-- Chỉ mục cho bảng `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`IDDonvi`);

--
-- Chỉ mục cho bảng `ketqua`
--
ALTER TABLE `ketqua`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `loaictv`
--
ALTER TABLE `loaictv`
  ADD PRIMARY KEY (`IDLoaiCTV`);

--
-- Chỉ mục cho bảng `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  ADD PRIMARY KEY (`permissionID`),
  ADD UNIQUE KEY `groupID_tableName` (`groupID`,`tableName`);

--
-- Chỉ mục cho bảng `membership_groups`
--
ALTER TABLE `membership_groups`
  ADD PRIMARY KEY (`groupID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  ADD PRIMARY KEY (`permissionID`),
  ADD UNIQUE KEY `memberID_tableName` (`memberID`,`tableName`);

--
-- Chỉ mục cho bảng `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  ADD PRIMARY KEY (`recID`),
  ADD UNIQUE KEY `tableName_pkValue` (`tableName`,`pkValue`(100)),
  ADD KEY `pkValue` (`pkValue`),
  ADD KEY `tableName` (`tableName`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Chỉ mục cho bảng `membership_users`
--
ALTER TABLE `membership_users`
  ADD PRIMARY KEY (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Chỉ mục cho bảng `membership_usersessions`
--
ALTER TABLE `membership_usersessions`
  ADD UNIQUE KEY `memberID_token_agent` (`memberID`,`token`(50),`agent`(50)),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `expiry_ts` (`expiry_ts`);

--
-- Chỉ mục cho bảng `phanloai_ctv`
--
ALTER TABLE `phanloai_ctv`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `stcn`
--
ALTER TABLE `stcn`
  ADD PRIMARY KEY (`IDSTCN`),
  ADD UNIQUE KEY `Sodangki_unique` (`Sodangki`),
  ADD KEY `DVLap` (`DVLap`),
  ADD KEY `DVQuanly` (`DVQuanly`),
  ADD KEY `Doituong` (`Doituong`);

--
-- Chỉ mục cho bảng `stcnstt`
--
ALTER TABLE `stcnstt`
  ADD PRIMARY KEY (`IDSTT`),
  ADD KEY `IDSTCN` (`IDSTCN`);

--
-- Chỉ mục cho bảng `tinbao`
--
ALTER TABLE `tinbao`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `xulytin`
--
ALTER TABLE `xulytin`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bl2`
--
ALTER TABLE `bl2`
  MODIFY `IDBL2` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bl3`
--
ALTER TABLE `bl3`
  MODIFY `IDBL3` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `ctv`
--
ALTER TABLE `ctv`
  MODIFY `IDCTV` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `doituong`
--
ALTER TABLE `doituong`
  MODIFY `IDDoituong` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donvi`
--
ALTER TABLE `donvi`
  MODIFY `IDDonvi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `ketqua`
--
ALTER TABLE `ketqua`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `loaictv`
--
ALTER TABLE `loaictv`
  MODIFY `IDLoaiCTV` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `membership_groups`
--
ALTER TABLE `membership_groups`
  MODIFY `groupID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  MODIFY `recID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `phanloai_ctv`
--
ALTER TABLE `phanloai_ctv`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `stcn`
--
ALTER TABLE `stcn`
  MODIFY `IDSTCN` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `stcnstt`
--
ALTER TABLE `stcnstt`
  MODIFY `IDSTT` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tinbao`
--
ALTER TABLE `tinbao`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `xulytin`
--
ALTER TABLE `xulytin`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
