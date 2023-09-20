<?php
	// check this file's MD5 to make sure it wasn't called before
	$tenantId = Authentication::tenantIdPadded();
	$setupHash = __DIR__ . "/setup{$tenantId}.md5";

	$prevMD5 = @file_get_contents($setupHash);
	$thisMD5 = md5_file(__FILE__);

	// check if this setup file already run
	if($thisMD5 != $prevMD5) {
		// set up tables
		setupTable(
			'DONVI', " 
			CREATE TABLE IF NOT EXISTS `DONVI` ( 
				`IDDonvi` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`IDDonvi`),
				`Tendonvi` VARCHAR(40) NULL,
				`Hedonvi` VARCHAR(40) NULL
			) CHARSET utf8mb4"
		);

		setupTable(
			'CanBo', " 
			CREATE TABLE IF NOT EXISTS `CanBo` ( 
				`IDCanbo` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`IDCanbo`),
				`IDMember` VARCHAR(100) NOT NULL,
				UNIQUE `IDMember_unique` (`IDMember`),
				`Hovaten` VARCHAR(40) NULL,
				`Gioitinh` VARCHAR(40) NULL,
				`Chucvu` VARCHAR(40) NULL,
				`Donvi` INT(10) UNSIGNED NULL,
				`Thongtin` VARCHAR(40) NULL
			) CHARSET utf8mb4"
		);
		setupIndexes('CanBo', ['Donvi',]);

		setupTable(
			'CTV', " 
			CREATE TABLE IF NOT EXISTS `CTV` ( 
				`IDCTV` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`IDCTV`),
				`Sodangky` VARCHAR(40) NOT NULL,
				UNIQUE `Sodangky_unique` (`Sodangky`),
				`Ngaydangky` DATETIME NULL,
				`LoaiCTV` INT UNSIGNED NULL,
				`Bidanh` VARCHAR(40) NULL,
				`NgayPLgannhat` DATETIME NULL,
				`NgaydenhanPL` DATETIME NULL,
				`DVSD` INT(10) UNSIGNED NULL,
				`CBSD` INT(10) UNSIGNED NULL,
				`DVLap` INT(10) UNSIGNED NULL,
				`CBLap` INT(10) UNSIGNED NULL,
				`Status` VARCHAR(40) NULL,
				`Diaban` VARCHAR(40) NULL,
				`Doituong` VARCHAR(40) NULL,
				`Vitri` VARCHAR(40) NULL
			) CHARSET utf8mb4", [
				" ALTER TABLE `CTV` CHANGE `NgaydenhanPL` `NgaydenhanPL` DATETIME NULL ",
			]
		);
		setupIndexes('CTV', ['LoaiCTV','DVSD','CBSD','DVLap','CBLap',]);

		setupTable(
			'LoaiCTV', " 
			CREATE TABLE IF NOT EXISTS `LoaiCTV` ( 
				`IDLoaiCTV` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`IDLoaiCTV`),
				`Loai` VARCHAR(40) NULL,
				`Ten` VARCHAR(40) NULL,
				`Ghichu` VARCHAR(40) NULL
			) CHARSET utf8mb4"
		);

		setupTable(
			'BL3', " 
			CREATE TABLE IF NOT EXISTS `BL3` ( 
				`IDBL3` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`IDBL3`),
				`IDCTV` INT(10) UNSIGNED NOT NULL,
				`Ngaydauki` DATETIME NULL,
				`Ngaycuoiki` DATETIME NULL,
				`CBPhanloai` INT UNSIGNED NULL,
				`CHPhanloai` INT UNSIGNED NULL,
				`Phanloai` INT UNSIGNED NULL,
				`Nx_Dx` VARCHAR(40) NULL
			) CHARSET utf8mb4"
		);
		setupIndexes('BL3', ['IDCTV','CBPhanloai','CHPhanloai','Phanloai',]);

		setupTable(
			'PhanLoai_CTV', " 
			CREATE TABLE IF NOT EXISTS `PhanLoai_CTV` ( 
				`ID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`ID`),
				`Phanloai` VARCHAR(40) NULL
			) CHARSET utf8mb4"
		);

		setupTable(
			'BL2', " 
			CREATE TABLE IF NOT EXISTS `BL2` ( 
				`IDBL2` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`IDBL2`),
				`IDBL3` INT UNSIGNED NOT NULL,
				`Ngaysinhhoat` DATETIME NULL,
				`Ngaybaotin` DATETIME NULL,
				`Tinbao` INT UNSIGNED NULL,
				`Xylytin` INT UNSIGNED NULL,
				`Ketqua` INT UNSIGNED NULL
			) CHARSET utf8mb4"
		);
		setupIndexes('BL2', ['IDBL3','Tinbao','Xylytin','Ketqua',]);

		setupTable(
			'XulyTin', " 
			CREATE TABLE IF NOT EXISTS `XulyTin` ( 
				`ID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`ID`),
				`Xulytin` VARCHAR(40) NULL
			) CHARSET utf8mb4"
		);

		setupTable(
			'TinBao', " 
			CREATE TABLE IF NOT EXISTS `TinBao` ( 
				`ID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`ID`),
				`TenTinbao` VARCHAR(40) NULL
			) CHARSET utf8mb4"
		);

		setupTable(
			'Ketqua', " 
			CREATE TABLE IF NOT EXISTS `Ketqua` ( 
				`ID` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`ID`),
				`Ketqua` VARCHAR(40) NULL
			) CHARSET utf8mb4"
		);

		setupTable(
			'STCN', " 
			CREATE TABLE IF NOT EXISTS `STCN` ( 
				`IDSTCN` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`IDSTCN`),
				`Sodangki` VARCHAR(40) NULL,
				UNIQUE `Sodangki_unique` (`Sodangki`),
				`Ngaydangki` DATETIME NULL,
				`Ngaylap` DATETIME NULL,
				`CBLap` VARCHAR(40) NULL,
				`DVLap` INT UNSIGNED NULL,
				`CBQuanly` VARCHAR(40) NULL,
				`DVQuanly` INT UNSIGNED NULL,
				`Doituong` INT UNSIGNED NULL,
				`Status` VARCHAR(40) NULL
			) CHARSET utf8mb4"
		);
		setupIndexes('STCN', ['DVLap','DVQuanly','Doituong',]);

		setupTable(
			'STCNSTT', " 
			CREATE TABLE IF NOT EXISTS `STCNSTT` ( 
				`IDSTT` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`IDSTT`),
				`Phanloai` VARCHAR(40) NULL,
				`Danhmuc` VARCHAR(40) NULL,
				`Heloai` VARCHAR(40) NULL,
				`IDSTCN` INT UNSIGNED NULL
			) CHARSET utf8mb4"
		);
		setupIndexes('STCNSTT', ['IDSTCN',]);

		setupTable(
			'DOITUONG', " 
			CREATE TABLE IF NOT EXISTS `DOITUONG` ( 
				`IDDoituong` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`IDDoituong`),
				`Hovaten` VARCHAR(40) NULL,
				`Ngaysinh` DATETIME NULL,
				`CCCD` VARCHAR(40) NULL,
				UNIQUE `CCCD_unique` (`CCCD`),
				`TATS` VARCHAR(40) NULL
			) CHARSET utf8mb4"
		);



		// save MD5
		@file_put_contents($setupHash, $thisMD5);
	}


	function setupIndexes($tableName, $arrFields) {
		if(!is_array($arrFields) || !count($arrFields)) return false;

		foreach($arrFields as $fieldName) {
			if(!$res = @db_query("SHOW COLUMNS FROM `$tableName` like '$fieldName'")) continue;
			if(!$row = @db_fetch_assoc($res)) continue;
			if($row['Key']) continue;

			@db_query("ALTER TABLE `$tableName` ADD INDEX `$fieldName` (`$fieldName`)");
		}
	}


	function setupTable($tableName, $createSQL = '', $arrAlter = '') {
		global $Translation;
		$oldTableName = '';
		ob_start();

		echo '<div style="padding: 5px; border-bottom:solid 1px silver; font-family: verdana, arial; font-size: 10px;">';

		// is there a table rename query?
		if(is_array($arrAlter)) {
			$matches = [];
			if(preg_match("/ALTER TABLE `(.*)` RENAME `$tableName`/i", $arrAlter[0], $matches)) {
				$oldTableName = $matches[1];
			}
		}

		if($res = @db_query("SELECT COUNT(1) FROM `$tableName`")) { // table already exists
			if($row = @db_fetch_array($res)) {
				echo str_replace(['<TableName>', '<NumRecords>'], [$tableName, $row[0]], $Translation['table exists']);
				if(is_array($arrAlter)) {
					echo '<br>';
					foreach($arrAlter as $alter) {
						if($alter != '') {
							echo "$alter ... ";
							if(!@db_query($alter)) {
								echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
								echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
							} else {
								echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
							}
						}
					}
				} else {
					echo $Translation['table uptodate'];
				}
			} else {
				echo str_replace('<TableName>', $tableName, $Translation['couldnt count']);
			}
		} else { // given tableName doesn't exist

			if($oldTableName != '') { // if we have a table rename query
				if($ro = @db_query("SELECT COUNT(1) FROM `$oldTableName`")) { // if old table exists, rename it.
					$renameQuery = array_shift($arrAlter); // get and remove rename query

					echo "$renameQuery ... ";
					if(!@db_query($renameQuery)) {
						echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
						echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
					} else {
						echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
					}

					if(is_array($arrAlter)) setupTable($tableName, $createSQL, false, $arrAlter); // execute Alter queries on renamed table ...
				} else { // if old tableName doesn't exist (nor the new one since we're here), then just create the table.
					setupTable($tableName, $createSQL, false); // no Alter queries passed ...
				}
			} else { // tableName doesn't exist and no rename, so just create the table
				echo str_replace("<TableName>", $tableName, $Translation["creating table"]);
				if(!@db_query($createSQL)) {
					echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
					echo '<div class="text-danger">' . $Translation['mysql said'] . db_error(db_link()) . '</div>';

					// create table with a dummy field
					@db_query("CREATE TABLE IF NOT EXISTS `$tableName` (`_dummy_deletable_field` TINYINT)");
				} else {
					echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
				}
			}

			// set Admin group permissions for newly created table if membership_grouppermissions exists
			if($ro = @db_query("SELECT COUNT(1) FROM `membership_grouppermissions`")) {
				// get Admins group id
				$ro = @db_query("SELECT `groupID` FROM `membership_groups` WHERE `name`='Admins'");
				if($ro) {
					$adminGroupID = intval(db_fetch_row($ro)[0]);
					if($adminGroupID) @db_query("INSERT IGNORE INTO `membership_grouppermissions` SET
						`groupID`='$adminGroupID',
						`tableName`='$tableName',
						`allowInsert`=1, `allowView`=1, `allowEdit`=1, `allowDelete`=1
					");
				}
			}
		}

		echo '</div>';

		$out = ob_get_clean();
		if(defined('APPGINI_SETUP') && APPGINI_SETUP) echo $out;
	}
