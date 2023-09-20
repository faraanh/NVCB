CREATE DEFINER=`root`@`localhost` 
TRIGGER `ctvmeberrecord` BEFORE INSERT ON `membership_userrecords` 
FOR EACH ROW 
SET new.memberID = (SELECT IDMember FROM canbo WHERE IDCanbo = 
	(SELECT CBSD FROM ctv WHERE IDCTV= 
		(SELECT CASE new.tableName 
			WHEN "CTV" THEN new.pkValue 
			WHEN "BL3" THEN (SELECT IDCTV FROM bl3 WHERE IDBL3=new.pkValue) 
			WHEN "BL2" THEN (SELECT IDCTV FROM bl3 WHERE IDBL3=
				(SELECT IDBL3 FROM bl2 WHERE IDBL2=new.pkValue)) 
		END) 
	)
);