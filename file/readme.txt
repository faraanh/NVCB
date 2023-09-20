root::F4r4@nh1


==========CREATE RELATIONSHIP CANBO TABLE VS MEMBERSHIP_USERS ========
ALTER TABLE `canbo` ADD CONSTRAINT `fk_canbo_user` FOREIGN KEY (`IDMember`) REFERENCES `membership_users`(`memberID`) ON DELETE RESTRICT ON UPDATE RESTRICT;



===============TRIGGER=====================================

----sync member after insert by ADMIN to CANBO Table ------------------------
CREATE TRIGGER `ins_member_canbo` AFTER INSERT ON `membership_users` FOR EACH ROW INSERT INTO canbo(IDMember, Hovaten, Gioitinh, Chucvu, Donvi) VALUES (new.memberID, new.custom1, new.custom2, new.custom3, new.custom4);


----sync member after update membership_users to CANBO Table ------------------------
CREATE TRIGGER `up_member_canbo` AFTER UPDATE ON `membership_users` FOR EACH ROW UPDATE canbo SET Hovaten = new.custom1, Gioitinh = new.custom2, Chucvu = new.custom3, Donvi=new.custom4 WHERE IDMember=new.memberID




----make a record for userrecord after ADMIN add a new CTVBM ------------------------
DROP TRIGGER IF EXISTS `ctvmeberrecord`;CREATE DEFINER=`root`@`localhost` TRIGGER `ctvmeberrecord` BEFORE INSERT ON `membership_userrecords` FOR EACH ROW SET new.memberID = (SELECT IDMember FROM canbo WHERE IDCanbo = (SELECT CBSD FROM ctv WHERE IDCTV= (SELECT CASE new.tableName WHEN "CTV" THEN new.pkValue WHEN "BL3" THEN (SELECT IDCTV FROM bl3 WHERE IDBL3=new.pkValue) WHEN "BL2" THEN (SELECT IDCTV FROM bl3 WHERE IDBL3=(SELECT IDBL3 FROM bl2 WHERE IDBL2=new.pkValue)) END) ))




----- make NgayPLgannhat <---- Ngaydangky --- (su dung cho lan dang ky CTV dau tien ----------NOT USE--------
DROP TRIGGER IF EXISTS `tg_plgannhat`;CREATE DEFINER=`root`@`localhost` TRIGGER `tg_plgannhat` BEFORE INSERT ON `ctv` FOR EACH ROW SET new.NgayPLgannhat=new.Ngaydangky, new.NgaydenhanPL= ADDDATE(new.Ngaydangky, INTERVAL 6 MONTH)


----- make NgayPLgannhat <---- Ngaydangky --- (su dung khi update ngay dang ky ----------NOT USE---------
DROP TRIGGER IF EXISTS `tg_plgannhat_update`;CREATE DEFINER=`root`@`localhost` TRIGGER `tg_plgannhat_update` BEFORE UPDATE ON `ctv` FOR EACH ROW SET new.NgayPLgannhat=new.Ngaydangky, new.NgaydenhanPL= ADDDATE(new.Ngaydangky, INTERVAL 6 MONTH)





----- make NgayPLgannhat <---- Ngaycuoiki sau khi insert Ngaycuoiki -------------
CREATE TRIGGER `tg_bl3_phanloai` AFTER INSERT ON `bl3` FOR EACH ROW UPDATE ctv SET NgayPLgannhat=new.Ngaycuoiki, NgaydenhanPL= ADDDATE(new.Ngaycuoiki, INTERVAL 6 MONTH) WHERE IDCTV= new.IDCTV;


----- make NgayPLgannhat <---- Ngaycuoiki sau khi update Ngaycuoiki -------------
CREATE TRIGGER `tg_bl3_pl_update` AFTER UPDATE ON `bl3` FOR EACH ROW UPDATE ctv SET NgayPLgannhat=new.Ngaycuoiki, NgaydenhanPL= ADDDATE(new.Ngaycuoiki, INTERVAL 6 MONTH) WHERE IDCTV= new.IDCTV;



# sau nay them phan suu tra nua thi tim hieu them nhe
# viec chua lam la SET them cai Groupmember nua, IDmember thi lam roi