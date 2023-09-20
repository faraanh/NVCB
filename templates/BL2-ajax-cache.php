<?php
	$rdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'BL2';

		/* data for selected record, or defaults if none is selected */
		var data = {
			IDBL3: <?php echo json_encode(['id' => $rdata['IDBL3'], 'value' => $rdata['IDBL3'], 'text' => $jdata['IDBL3']]); ?>,
			Tinbao: <?php echo json_encode(['id' => $rdata['Tinbao'], 'value' => $rdata['Tinbao'], 'text' => $jdata['Tinbao']]); ?>,
			Xylytin: <?php echo json_encode(['id' => $rdata['Xylytin'], 'value' => $rdata['Xylytin'], 'text' => $jdata['Xylytin']]); ?>,
			Ketqua: <?php echo json_encode(['id' => $rdata['Ketqua'], 'value' => $rdata['Ketqua'], 'text' => $jdata['Ketqua']]); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for IDBL3 */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'IDBL3' && d.id == data.IDBL3.id)
				return { results: [ data.IDBL3 ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for Tinbao */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Tinbao' && d.id == data.Tinbao.id)
				return { results: [ data.Tinbao ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for Xylytin */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Xylytin' && d.id == data.Xylytin.id)
				return { results: [ data.Xylytin ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for Ketqua */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Ketqua' && d.id == data.Ketqua.id)
				return { results: [ data.Ketqua ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

