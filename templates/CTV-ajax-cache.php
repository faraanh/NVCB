<?php
	$rdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'CTV';

		/* data for selected record, or defaults if none is selected */
		var data = {
			LoaiCTV: <?php echo json_encode(['id' => $rdata['LoaiCTV'], 'value' => $rdata['LoaiCTV'], 'text' => $jdata['LoaiCTV']]); ?>,
			DVSD: <?php echo json_encode(['id' => $rdata['DVSD'], 'value' => $rdata['DVSD'], 'text' => $jdata['DVSD']]); ?>,
			CBSD: <?php echo json_encode(['id' => $rdata['CBSD'], 'value' => $rdata['CBSD'], 'text' => $jdata['CBSD']]); ?>,
			DVLap: <?php echo json_encode(['id' => $rdata['DVLap'], 'value' => $rdata['DVLap'], 'text' => $jdata['DVLap']]); ?>,
			CBLap: <?php echo json_encode(['id' => $rdata['CBLap'], 'value' => $rdata['CBLap'], 'text' => $jdata['CBLap']]); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for LoaiCTV */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'LoaiCTV' && d.id == data.LoaiCTV.id)
				return { results: [ data.LoaiCTV ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for DVSD */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'DVSD' && d.id == data.DVSD.id)
				return { results: [ data.DVSD ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for CBSD */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'CBSD' && d.id == data.CBSD.id)
				return { results: [ data.CBSD ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for DVLap */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'DVLap' && d.id == data.DVLap.id)
				return { results: [ data.DVLap ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for CBLap */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'CBLap' && d.id == data.CBLap.id)
				return { results: [ data.CBLap ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

