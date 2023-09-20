<?php
// This script and data application were generated by AppGini 23.13
// Download AppGini for free from https://bigprof.com/appgini/download/

	include_once(__DIR__ . '/lib.php');
	@include_once(__DIR__ . '/hooks/LoaiCTV.php');
	include_once(__DIR__ . '/LoaiCTV_dml.php');

	// mm: can the current member access this page?
	$perm = getTablePermissions('LoaiCTV');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'LoaiCTV';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`LoaiCTV`.`IDLoaiCTV`" => "IDLoaiCTV",
		"`LoaiCTV`.`Loai`" => "Loai",
		"`LoaiCTV`.`Ten`" => "Ten",
		"`LoaiCTV`.`Ghichu`" => "Ghichu",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => '`LoaiCTV`.`IDLoaiCTV`',
		2 => 2,
		3 => 3,
		4 => 4,
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`LoaiCTV`.`IDLoaiCTV`" => "IDLoaiCTV",
		"`LoaiCTV`.`Loai`" => "Loai",
		"`LoaiCTV`.`Ten`" => "Ten",
		"`LoaiCTV`.`Ghichu`" => "Ghichu",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`LoaiCTV`.`IDLoaiCTV`" => "ID",
		"`LoaiCTV`.`Loai`" => "Loai",
		"`LoaiCTV`.`Ten`" => "Ten",
		"`LoaiCTV`.`Ghichu`" => "Ghichu",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`LoaiCTV`.`IDLoaiCTV`" => "IDLoaiCTV",
		"`LoaiCTV`.`Loai`" => "Loai",
		"`LoaiCTV`.`Ten`" => "Ten",
		"`LoaiCTV`.`Ghichu`" => "Ghichu",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = [];

	$x->QueryFrom = "`LoaiCTV` ";
	$x->QueryWhere = '';
	$x->QueryOrder = '';

	$x->AllowSelection = 1;
	$x->HideTableView = ($perm['view'] == 0 ? 1 : 0);
	$x->AllowDelete = $perm['delete'];
	$x->AllowMassDelete = (getLoggedAdmin() !== false);
	$x->AllowInsert = $perm['insert'];
	$x->AllowUpdate = $perm['edit'];
	$x->SeparateDV = 1;
	$x->AllowDeleteOfParents = 0;
	$x->AllowFilters = 1;
	$x->AllowSavingFilters = (getLoggedAdmin() !== false);
	$x->AllowSorting = 1;
	$x->AllowNavigation = 1;
	$x->AllowPrinting = 1;
	$x->AllowPrintingDV = 1;
	$x->AllowCSV = 1;
	$x->RecordsPerPage = 10;
	$x->QuickSearch = 1;
	$x->QuickSearchText = $Translation['quick search'];
	$x->ScriptFileName = 'LoaiCTV_view.php';
	$x->TableTitle = 'LoaiCTV';
	$x->TableIcon = 'table.gif';
	$x->PrimaryKey = '`LoaiCTV`.`IDLoaiCTV`';

	$x->ColWidth = [150, 150, 150, 150, ];
	$x->ColCaption = ['ID', 'Loai', 'Ten', 'Ghichu', ];
	$x->ColFieldName = ['IDLoaiCTV', 'Loai', 'Ten', 'Ghichu', ];
	$x->ColNumber  = [1, 2, 3, 4, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/LoaiCTV_templateTV.html';
	$x->SelectedTemplate = 'templates/LoaiCTV_templateTVS.html';
	$x->TemplateDV = 'templates/LoaiCTV_templateDV.html';
	$x->TemplateDVP = 'templates/LoaiCTV_templateDVP.html';

	$x->ShowTableHeader = 1;
	$x->TVClasses = "";
	$x->DVClasses = "";
	$x->HasCalculatedFields = false;
	$x->AllowConsoleLog = false;
	$x->AllowDVNavigation = true;

	// hook: LoaiCTV_init
	$render = true;
	if(function_exists('LoaiCTV_init')) {
		$args = [];
		$render = LoaiCTV_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: LoaiCTV_header
	$headerCode = '';
	if(function_exists('LoaiCTV_header')) {
		$args = [];
		$headerCode = LoaiCTV_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once(__DIR__ . '/header.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/header.php');
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: LoaiCTV_footer
	$footerCode = '';
	if(function_exists('LoaiCTV_footer')) {
		$args = [];
		$footerCode = LoaiCTV_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once(__DIR__ . '/footer.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/footer.php');
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}
