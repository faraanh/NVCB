<?php
// This script and data application were generated by AppGini 23.13
// Download AppGini for free from https://bigprof.com/appgini/download/

/*
	ajax-callable script that returns code for either a combo drop-down or an auto-complete
	drop-down, based on number of items.

	REQUEST parameters:
	===============
	t: table name
	f: lookup field name
	id: selected id
	p: page number (default = 1)
	s: search term
	o: 0 (default) for text-only or 1 for full options list, applicable only for radio lookups
	text: selected text
	filterer_[filterer]: name of filterer field to be used to filter the drop-down contents
				must be one of the filteres defined for the concerned field
	ut: 0 (default) returns all results, 1 returns unique texts (useful only if we don't care about ids, only text)
	json: 0 (default) returns HTML output for radio lookups, 1 forces json results for all including radio lookups
*/

	$start_ts = microtime(true);

	// how many results to return per call, in case of json output
	$results_per_page = 50;

	include_once(__DIR__ . '/lib.php');

	handle_maintenance();

	// drop-downs config
	$lookups = [
		'DONVI' => [
		],
		'CanBo' => [
			'Donvi' => [
				'parent_table' => 'DONVI',
				'parent_pk_field' => 'IDDonvi',
				'parent_caption' => '`DONVI`.`Tendonvi`',
				'parent_from' => '`DONVI` ',
				'filterers' => [],
				'custom_query' => '',
				'inherit_permissions' => true,
				'list_type' => 0,
				'not_null' => false,
			],
		],
		'CTV' => [
			'LoaiCTV' => [
				'parent_table' => 'LoaiCTV',
				'parent_pk_field' => 'IDLoaiCTV',
				'parent_caption' => '`LoaiCTV`.`Ten`',
				'parent_from' => '`LoaiCTV` ',
				'filterers' => [],
				'custom_query' => '',
				'inherit_permissions' => false,
				'list_type' => 0,
				'not_null' => false,
			],
			'DVSD' => [
				'parent_table' => 'DONVI',
				'parent_pk_field' => 'IDDonvi',
				'parent_caption' => '`DONVI`.`Tendonvi`',
				'parent_from' => '`DONVI` ',
				'filterers' => [],
				'custom_query' => '',
				'inherit_permissions' => false,
				'list_type' => 0,
				'not_null' => false,
			],
			'CBSD' => [
				'parent_table' => 'CanBo',
				'parent_pk_field' => 'IDCanbo',
				'parent_caption' => '`CanBo`.`Hovaten`',
				'parent_from' => '`CanBo` LEFT JOIN `DONVI` as DONVI1 ON `DONVI1`.`IDDonvi`=`CanBo`.`Donvi` ',
				'filterers' => ['DVSD' => 'Donvi'],
				'custom_query' => 'SELECT `CanBo`.`IDCanbo`, `CanBo`.`Hovaten` FROM `CanBo` LEFT JOIN `DONVI` as DONVI1 ON `DONVI1`.`IDDonvi`=`CanBo`.`Donvi` ORDER BY 2',
				'inherit_permissions' => false,
				'list_type' => 0,
				'not_null' => false,
			],
			'DVLap' => [
				'parent_table' => 'DONVI',
				'parent_pk_field' => 'IDDonvi',
				'parent_caption' => '`DONVI`.`Tendonvi`',
				'parent_from' => '`DONVI` ',
				'filterers' => [],
				'custom_query' => '',
				'inherit_permissions' => false,
				'list_type' => 0,
				'not_null' => false,
			],
			'CBLap' => [
				'parent_table' => 'CanBo',
				'parent_pk_field' => 'IDCanbo',
				'parent_caption' => '`CanBo`.`Hovaten`',
				'parent_from' => '`CanBo` LEFT JOIN `DONVI` as DONVI1 ON `DONVI1`.`IDDonvi`=`CanBo`.`Donvi` ',
				'filterers' => ['DVLap' => 'Donvi'],
				'custom_query' => '',
				'inherit_permissions' => false,
				'list_type' => 0,
				'not_null' => false,
			],
		],
		'LoaiCTV' => [
		],
		'BL3' => [
			'IDCTV' => [
				'parent_table' => 'CTV',
				'parent_pk_field' => 'IDCTV',
				'parent_caption' => '`CTV`.`Bidanh`',
				'parent_from' => '`CTV` LEFT JOIN `LoaiCTV` as LoaiCTV1 ON `LoaiCTV1`.`IDLoaiCTV`=`CTV`.`LoaiCTV` LEFT JOIN `DONVI` as DONVI1 ON `DONVI1`.`IDDonvi`=`CTV`.`DVSD` LEFT JOIN `CanBo` as CanBo1 ON `CanBo1`.`IDCanbo`=`CTV`.`CBSD` LEFT JOIN `DONVI` as DONVI2 ON `DONVI2`.`IDDonvi`=`CTV`.`DVLap` LEFT JOIN `CanBo` as CanBo2 ON `CanBo2`.`IDCanbo`=`CTV`.`CBLap` ',
				'filterers' => [],
				'custom_query' => '',
				'inherit_permissions' => true,
				'list_type' => 0,
				'not_null' => true,
			],
			'CBPhanloai' => [
				'parent_table' => 'PhanLoai_CTV',
				'parent_pk_field' => 'ID',
				'parent_caption' => '`PhanLoai_CTV`.`Phanloai`',
				'parent_from' => '`PhanLoai_CTV` ',
				'filterers' => [],
				'custom_query' => '',
				'inherit_permissions' => false,
				'list_type' => 0,
				'not_null' => false,
			],
			'CHPhanloai' => [
				'parent_table' => 'PhanLoai_CTV',
				'parent_pk_field' => 'ID',
				'parent_caption' => '`PhanLoai_CTV`.`Phanloai`',
				'parent_from' => '`PhanLoai_CTV` ',
				'filterers' => [],
				'custom_query' => '',
				'inherit_permissions' => false,
				'list_type' => 0,
				'not_null' => false,
			],
			'Phanloai' => [
				'parent_table' => 'PhanLoai_CTV',
				'parent_pk_field' => 'ID',
				'parent_caption' => '`PhanLoai_CTV`.`Phanloai`',
				'parent_from' => '`PhanLoai_CTV` ',
				'filterers' => [],
				'custom_query' => '',
				'inherit_permissions' => false,
				'list_type' => 0,
				'not_null' => false,
			],
		],
		'PhanLoai_CTV' => [
		],
		'BL2' => [
			'IDBL3' => [
				'parent_table' => 'BL3',
				'parent_pk_field' => 'IDBL3',
				'parent_caption' => 'IF(CHAR_LENGTH(if(`BL3`.`Ngaydauki`,date_format(`BL3`.`Ngaydauki`,\'%d/%m/%Y %H:%i\'),\'\')) || CHAR_LENGTH(if(`BL3`.`Ngaycuoiki`,date_format(`BL3`.`Ngaycuoiki`,\'%d/%m/%Y %H:%i\'),\'\')), CONCAT_WS(\'\', if(`BL3`.`Ngaydauki`,date_format(`BL3`.`Ngaydauki`,\'%d/%m/%Y %H:%i\'),\'\'), \'-\', if(`BL3`.`Ngaycuoiki`,date_format(`BL3`.`Ngaycuoiki`,\'%d/%m/%Y %H:%i\'),\'\')), \'\')',
				'parent_from' => '`BL3` LEFT JOIN `CTV` as CTV1 ON `CTV1`.`IDCTV`=`BL3`.`IDCTV` LEFT JOIN `PhanLoai_CTV` as PhanLoai_CTV1 ON `PhanLoai_CTV1`.`ID`=`BL3`.`CBPhanloai` LEFT JOIN `PhanLoai_CTV` as PhanLoai_CTV2 ON `PhanLoai_CTV2`.`ID`=`BL3`.`CHPhanloai` LEFT JOIN `PhanLoai_CTV` as PhanLoai_CTV3 ON `PhanLoai_CTV3`.`ID`=`BL3`.`Phanloai` ',
				'filterers' => [],
				'custom_query' => '',
				'inherit_permissions' => true,
				'list_type' => 0,
				'not_null' => true,
			],
			'Tinbao' => [
				'parent_table' => 'TinBao',
				'parent_pk_field' => 'ID',
				'parent_caption' => '`TinBao`.`TenTinbao`',
				'parent_from' => '`TinBao` ',
				'filterers' => [],
				'custom_query' => '',
				'inherit_permissions' => false,
				'list_type' => 0,
				'not_null' => false,
			],
			'Xylytin' => [
				'parent_table' => 'XulyTin',
				'parent_pk_field' => 'ID',
				'parent_caption' => '`XulyTin`.`Xulytin`',
				'parent_from' => '`XulyTin` ',
				'filterers' => [],
				'custom_query' => '',
				'inherit_permissions' => false,
				'list_type' => 0,
				'not_null' => false,
			],
			'Ketqua' => [
				'parent_table' => 'Ketqua',
				'parent_pk_field' => 'ID',
				'parent_caption' => '`Ketqua`.`Ketqua`',
				'parent_from' => '`Ketqua` ',
				'filterers' => [],
				'custom_query' => '',
				'inherit_permissions' => false,
				'list_type' => 0,
				'not_null' => false,
			],
		],
		'XulyTin' => [
		],
		'TinBao' => [
		],
		'Ketqua' => [
		],
		'STCN' => [
			'DVLap' => [
				'parent_table' => 'DONVI',
				'parent_pk_field' => 'IDDonvi',
				'parent_caption' => '`DONVI`.`Tendonvi`',
				'parent_from' => '`DONVI` ',
				'filterers' => [],
				'custom_query' => '',
				'inherit_permissions' => false,
				'list_type' => 0,
				'not_null' => false,
			],
			'DVQuanly' => [
				'parent_table' => 'DONVI',
				'parent_pk_field' => 'IDDonvi',
				'parent_caption' => '`DONVI`.`Tendonvi`',
				'parent_from' => '`DONVI` ',
				'filterers' => [],
				'custom_query' => '',
				'inherit_permissions' => false,
				'list_type' => 0,
				'not_null' => false,
			],
			'Doituong' => [
				'parent_table' => 'DOITUONG',
				'parent_pk_field' => 'IDDoituong',
				'parent_caption' => '`DOITUONG`.`Hovaten`',
				'parent_from' => '`DOITUONG` ',
				'filterers' => [],
				'custom_query' => '',
				'inherit_permissions' => false,
				'list_type' => 0,
				'not_null' => false,
			],
		],
		'STCNSTT' => [
			'IDSTCN' => [
				'parent_table' => 'STCN',
				'parent_pk_field' => 'IDSTCN',
				'parent_caption' => 'IF(    CHAR_LENGTH(`DOITUONG1`.`Hovaten`), CONCAT_WS(\'\',   `DOITUONG1`.`Hovaten`), \'\')',
				'parent_from' => '`STCN` LEFT JOIN `DONVI` as DONVI1 ON `DONVI1`.`IDDonvi`=`STCN`.`DVLap` LEFT JOIN `DONVI` as DONVI2 ON `DONVI2`.`IDDonvi`=`STCN`.`DVQuanly` LEFT JOIN `DOITUONG` as DOITUONG1 ON `DOITUONG1`.`IDDoituong`=`STCN`.`Doituong` ',
				'filterers' => [],
				'custom_query' => '',
				'inherit_permissions' => false,
				'list_type' => 0,
				'not_null' => false,
			],
		],
		'DOITUONG' => [
		],
	];

	// XSS prevention
	$xss = new CI_Input(datalist_db_encoding);

	// receive and verify user input
	$table_name = Request::val('t');
	$field_name = Request::val('f');
	$search_id = makeSafe(from_utf8(Request::val('id')));
	$selected_text = from_utf8(Request::val('text'));
	$returnOptions = (Request::val('o') == 1 ? true : false);
	$page = intval(Request::val('p'));
	if($page < 1)  $page = 1;
	$skip = $results_per_page * ($page - 1);
	$search_term = makeSafe(from_utf8(Request::val('s')));
	$uniqueText = Request::val('ut') ? true : false;
	$forceJson = Request::val('json') ? true : false;

	$res = null;

	if(!isset($lookups[$table_name][$field_name])) die('{ "error": "Invalid table or field." }');

	// can user access the requested table?
	$perm = getTablePermissions($table_name);
	if(!$perm['access'] && !$search_id) die('{ "error": "' . addslashes($Translation['tableAccessDenied']) . '" }');

	$field = $lookups[$table_name][$field_name];

	$wheres = [];

	// search term provided?
	if($search_term) {
		$wheres[] = "{$field['parent_caption']} like '%{$search_term}%'";
	}

	// any filterers specified?
	if(is_array($field['filterers'])) {
		foreach($field['filterers'] as $filterer => $filterer_parent) {
			if($get = Request::val("filterer_{$filterer}", false))
				$wheres[] = "`{$field['parent_table']}`.`$filterer_parent`='" . makeSafe($get) . "'";
		}
	}

	// inherit permissions?
	if($field['inherit_permissions']) {
		$inherit = permissions_sql($field['parent_table']);
		if($inherit === false && !$search_id) die($Translation['tableAccessDenied']);

		if($inherit['where']) $wheres[] = $inherit['where'];
		if($inherit['from']) $field['parent_from'] .= ", {$inherit['from']}";
	}

	// single value?
	if($field['list_type'] != 2 && $search_id) {
		$wheres[] = "`{$field['parent_table']}`.`{$field['parent_pk_field']}`='{$search_id}'";
	}

	$where = '';
	if(count($wheres)) {
		$where = 'WHERE ' . implode(' AND ', $wheres);
	}

	// define the combo and return the code
	$combo = new DataCombo;
	if($field['custom_query']) {
		$qm = []; $custom_where = ''; $custom_order_by = '2';
		$combo->Query = $field['custom_query'];

		if(preg_match('/ order by (.*)$/i', $combo->Query, $qm)) {
			$custom_order_by = $qm[1];
			$combo->Query = preg_replace('/ order by .*$/i', '', $combo->Query);
		}

		if(preg_match('/ where (.*)$/i', $combo->Query, $qm)) {
			$custom_where = $qm[1];
			$combo->Query = preg_replace('/ where .*$/i', '', $combo->Query);
		}

		if($where && $custom_where) {
			$combo->Query .=  " {$where} AND ({$custom_where}) ORDER BY {$custom_order_by}";
		} elseif($custom_where) {
			$combo->Query .=  " WHERE {$custom_where} ORDER BY {$custom_order_by}";
		} else {
			$combo->Query .=  " {$where} ORDER BY {$custom_order_by}";
		}

		$query_match = [];
		preg_match('/select (.*) from (.*)$/i', $combo->Query, $query_match);

		if(isset($query_match[2])) {
			$count_query = "SELECT count(1) FROM {$query_match[2]}";
		} else {
			$count_query = '';
		}
	} else {
		$combo->Query = "SELECT " . ($field['inherit_permissions'] ? 'DISTINCT ' : '') . "`{$field['parent_table']}`.`{$field['parent_pk_field']}`, {$field['parent_caption']} FROM {$field['parent_from']} {$where} ORDER BY 2";
		$count_query = "SELECT count(1) FROM {$field['parent_from']} {$where}";
	}
	$combo->table = $table_name;
	$combo->parent_table = $field['parent_table'];
	$combo->SelectName = $field_name;
	$combo->ListType = $field['list_type'];
	if($search_id) {
		$combo->SelectedData = $search_id;
	} elseif($selected_text) {
		$combo->SelectedData = getValueGivenCaption($combo->Query, $selected_text);
	}

	if($field['list_type'] == 2 && !$forceJson) {
		$combo->Render();
		$combo->HTML = str_replace('<select ', '<select onchange="' . $field_name . '_changed();" ', $combo->HTML);

		// return response
		if($returnOptions) {
			?><span id="<?php echo $field_name; ?>-combo-list"><?php echo $combo->HTML; ?></span><?php
		} else {
			?>
				<span class="match-text" id="<?php echo $field_name; ?>-match-text"><?php echo $combo->MatchText; ?></span>
				<input type="hidden" id="<?php echo $field_name; ?>" value="<?php echo html_attr($combo->SelectedData); ?>">
			<?php
		}
	} else {
		/* return json */
		header('Content-type: application/json');

		/* if unique text (ut=1), we don't care about IDs and can group by text */
		if($uniqueText && !preg_match('/\bgroup by\b/i', $combo->Query)) {
			// do we have an order by?
			if(preg_match('/\border by\b/i', $combo->Query))
				$combo->Query = preg_replace('/\b(order by)\b/i', ' GROUP BY 2 $1', $combo->Query);
			else
				$combo->Query .= ' GROUP BY 2 ';
		}

		if(!preg_match('/ limit .+/i', $combo->Query)) {
			if(!$search_id) $combo->Query .= " LIMIT {$skip}, {$results_per_page}";
			if($search_id) $combo->Query .= " LIMIT 1";
		}

		$prepared_data = [];

		// specific caption provided and list_type is not radio?
		if(!$search_id && $selected_text) {
			$search_id = getValueGivenCaption($combo->Query, $selected_text);
			if($search_id) $prepared_data[] = ['id' => to_utf8($search_id), 'text' => to_utf8($xss->xss_clean($selected_text))];
		} else {
			/*
			 * in case we have a search term, show matches starting with it first,
			 * followed by those containing it.
			 * build a UNION query for that purpose
			 */
			if($search_term) {
				$query2 = $combo->Query;
				$query1 = str_replace(" like '%{$search_term}%'", " like '{$search_term}%'", $query2);
				$combo->Query = "({$query1}) UNION ({$query2})";
			}

			$eo = ['silentErrors' => true];

			$res = sql($combo->Query, $eo);
			while($row = db_fetch_row($res)) {
				if(empty($prepared_data) && $page == 1 && !$search_id && !$field['not_null']) {
					$prepared_data[] = ['id' => empty_lookup_value, 'text' => to_utf8("<{$Translation['none']}>")];
				}

				$prepared_data[] = ['id' => to_utf8($row[0]), 'text' => to_utf8($xss->xss_clean($row[1]))];
			}
		}

		if(empty($prepared_data)) { $prepared_data[] = ['id' => '', 'text' => to_utf8($Translation['No matches found!'])]; }

		echo json_encode([
			'results' => $prepared_data,
			'more' => ($res && db_num_rows($res) >= $results_per_page),
			'elapsed' => round(microtime(true) - $start_ts, 3),
		]);
	}

