<?php
	$rdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'STCN';

		/* data for selected record, or defaults if none is selected */
		var data = {
			DVLap: <?php echo json_encode(['id' => $rdata['DVLap'], 'value' => $rdata['DVLap'], 'text' => $jdata['DVLap']]); ?>,
			DVQuanly: <?php echo json_encode(['id' => $rdata['DVQuanly'], 'value' => $rdata['DVQuanly'], 'text' => $jdata['DVQuanly']]); ?>,
			Doituong: <?php echo json_encode(['id' => $rdata['Doituong'], 'value' => $rdata['Doituong'], 'text' => $jdata['Doituong']]); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for DVLap */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'DVLap' && d.id == data.DVLap.id)
				return { results: [ data.DVLap ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for DVQuanly */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'DVQuanly' && d.id == data.DVQuanly.id)
				return { results: [ data.DVQuanly ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for Doituong */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'Doituong' && d.id == data.Doituong.id)
				return { results: [ data.Doituong ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

