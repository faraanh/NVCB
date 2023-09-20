<?php
	define('PREPEND_PATH', '');
	include_once(__DIR__ . '/lib.php');

	// accept a record as an assoc array, return transformed row ready to insert to table
	$transformFunctions = [
		'DONVI' => function($data, $options = []) {

			return $data;
		},
		'CanBo' => function($data, $options = []) {
			if(isset($data['Donvi'])) $data['Donvi'] = pkGivenLookupText($data['Donvi'], 'CanBo', 'Donvi');

			return $data;
		},
		'CTV' => function($data, $options = []) {
			if(isset($data['Ngaydangky'])) $data['Ngaydangky'] = guessMySQLDateTime($data['Ngaydangky']);
			if(isset($data['LoaiCTV'])) $data['LoaiCTV'] = pkGivenLookupText($data['LoaiCTV'], 'CTV', 'LoaiCTV');
			if(isset($data['NgayPLgannhat'])) $data['NgayPLgannhat'] = guessMySQLDateTime($data['NgayPLgannhat']);
			if(isset($data['NgaydenhanPL'])) $data['NgaydenhanPL'] = guessMySQLDateTime($data['NgaydenhanPL']);
			if(isset($data['DVSD'])) $data['DVSD'] = pkGivenLookupText($data['DVSD'], 'CTV', 'DVSD');
			if(isset($data['CBSD'])) $data['CBSD'] = pkGivenLookupText($data['CBSD'], 'CTV', 'CBSD');
			if(isset($data['DVLap'])) $data['DVLap'] = pkGivenLookupText($data['DVLap'], 'CTV', 'DVLap');
			if(isset($data['CBLap'])) $data['CBLap'] = pkGivenLookupText($data['CBLap'], 'CTV', 'CBLap');

			return $data;
		},
		'LoaiCTV' => function($data, $options = []) {

			return $data;
		},
		'BL3' => function($data, $options = []) {
			if(isset($data['IDCTV'])) $data['IDCTV'] = pkGivenLookupText($data['IDCTV'], 'BL3', 'IDCTV');
			if(isset($data['Ngaydauki'])) $data['Ngaydauki'] = guessMySQLDateTime($data['Ngaydauki']);
			if(isset($data['Ngaycuoiki'])) $data['Ngaycuoiki'] = guessMySQLDateTime($data['Ngaycuoiki']);
			if(isset($data['CBPhanloai'])) $data['CBPhanloai'] = pkGivenLookupText($data['CBPhanloai'], 'BL3', 'CBPhanloai');
			if(isset($data['CHPhanloai'])) $data['CHPhanloai'] = pkGivenLookupText($data['CHPhanloai'], 'BL3', 'CHPhanloai');
			if(isset($data['Phanloai'])) $data['Phanloai'] = pkGivenLookupText($data['Phanloai'], 'BL3', 'Phanloai');

			return $data;
		},
		'PhanLoai_CTV' => function($data, $options = []) {

			return $data;
		},
		'BL2' => function($data, $options = []) {
			if(isset($data['IDBL3'])) $data['IDBL3'] = pkGivenLookupText($data['IDBL3'], 'BL2', 'IDBL3');
			if(isset($data['Ngaysinhhoat'])) $data['Ngaysinhhoat'] = guessMySQLDateTime($data['Ngaysinhhoat']);
			if(isset($data['Ngaybaotin'])) $data['Ngaybaotin'] = guessMySQLDateTime($data['Ngaybaotin']);
			if(isset($data['Tinbao'])) $data['Tinbao'] = pkGivenLookupText($data['Tinbao'], 'BL2', 'Tinbao');
			if(isset($data['Xylytin'])) $data['Xylytin'] = pkGivenLookupText($data['Xylytin'], 'BL2', 'Xylytin');
			if(isset($data['Ketqua'])) $data['Ketqua'] = pkGivenLookupText($data['Ketqua'], 'BL2', 'Ketqua');

			return $data;
		},
		'XulyTin' => function($data, $options = []) {

			return $data;
		},
		'TinBao' => function($data, $options = []) {

			return $data;
		},
		'Ketqua' => function($data, $options = []) {

			return $data;
		},
		'STCN' => function($data, $options = []) {
			if(isset($data['Ngaydangki'])) $data['Ngaydangki'] = guessMySQLDateTime($data['Ngaydangki']);
			if(isset($data['Ngaylap'])) $data['Ngaylap'] = guessMySQLDateTime($data['Ngaylap']);
			if(isset($data['DVLap'])) $data['DVLap'] = pkGivenLookupText($data['DVLap'], 'STCN', 'DVLap');
			if(isset($data['DVQuanly'])) $data['DVQuanly'] = pkGivenLookupText($data['DVQuanly'], 'STCN', 'DVQuanly');
			if(isset($data['Doituong'])) $data['Doituong'] = pkGivenLookupText($data['Doituong'], 'STCN', 'Doituong');

			return $data;
		},
		'STCNSTT' => function($data, $options = []) {
			if(isset($data['IDSTCN'])) $data['IDSTCN'] = pkGivenLookupText($data['IDSTCN'], 'STCNSTT', 'IDSTCN');

			return $data;
		},
		'DOITUONG' => function($data, $options = []) {
			if(isset($data['Ngaysinh'])) $data['Ngaysinh'] = guessMySQLDateTime($data['Ngaysinh']);

			return $data;
		},
	];

	// accept a record as an assoc array, return a boolean indicating whether to import or skip record
	$filterFunctions = [
		'DONVI' => function($data, $options = []) { return true; },
		'CanBo' => function($data, $options = []) { return true; },
		'CTV' => function($data, $options = []) { return true; },
		'LoaiCTV' => function($data, $options = []) { return true; },
		'BL3' => function($data, $options = []) { return true; },
		'PhanLoai_CTV' => function($data, $options = []) { return true; },
		'BL2' => function($data, $options = []) { return true; },
		'XulyTin' => function($data, $options = []) { return true; },
		'TinBao' => function($data, $options = []) { return true; },
		'Ketqua' => function($data, $options = []) { return true; },
		'STCN' => function($data, $options = []) { return true; },
		'STCNSTT' => function($data, $options = []) { return true; },
		'DOITUONG' => function($data, $options = []) { return true; },
	];

	/*
	Hook file for overwriting/amending $transformFunctions and $filterFunctions:
	hooks/import-csv.php
	If found, it's included below

	The way this works is by either completely overwriting any of the above 2 arrays,
	or, more commonly, overwriting a single function, for example:
		$transformFunctions['tablename'] = function($data, $options = []) {
			// new definition here
			// then you must return transformed data
			return $data;
		};

	Another scenario is transforming a specific field and leaving other fields to the default
	transformation. One possible way of doing this is to store the original transformation function
	in GLOBALS array, calling it inside the custom transformation function, then modifying the
	specific field:
		$GLOBALS['originalTransformationFunction'] = $transformFunctions['tablename'];
		$transformFunctions['tablename'] = function($data, $options = []) {
			$data = call_user_func_array($GLOBALS['originalTransformationFunction'], [$data, $options]);
			$data['fieldname'] = 'transformed value';
			return $data;
		};
	*/

	@include(__DIR__ . '/hooks/import-csv.php');

	$ui = new CSVImportUI($transformFunctions, $filterFunctions);
