<?php
	$rdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'BL3';

		/* data for selected record, or defaults if none is selected */
		var data = {
			IDCTV: <?php echo json_encode(['id' => $rdata['IDCTV'], 'value' => $rdata['IDCTV'], 'text' => $jdata['IDCTV']]); ?>,
			CBPhanloai: <?php echo json_encode(['id' => $rdata['CBPhanloai'], 'value' => $rdata['CBPhanloai'], 'text' => $jdata['CBPhanloai']]); ?>,
			CHPhanloai: <?php echo json_encode(['id' => $rdata['CHPhanloai'], 'value' => $rdata['CHPhanloai'], 'text' => $jdata['CHPhanloai']]); ?>,
			Phanloai: <?php echo json_encode(['id' => $rdata['Phanloai'], 'value' => $rdata['Phanloai'], 'text' => $jdata['Phanloai']]); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for IDCTV */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'IDCTV' && d.id == data.IDCTV.id)
				return { results: [ data.IDCTV ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for CBPhanloai */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'CBPhanloai' && d.id == data.CBPhanloai.id)
				return { results: [ data.CBPhanloai ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for CHPhanloai */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'CHPhanloai' && d.id == data.CHPhanloai.id)
				return { results: [ data.CHPhanloai ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for Phanloai */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Phanloai' && d.id == data.Phanloai.id)
				return { results: [ data.Phanloai ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

