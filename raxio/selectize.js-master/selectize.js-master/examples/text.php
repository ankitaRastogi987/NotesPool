<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Selectize.js Demo</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
		<!--[if IE 8]><script src="js/es5.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		
		<script src="../dist/js/standalone/selectize.js"></script>
		<script src="js/index.js"></script>
	</head>
    <body>
		<div id="wrapper">
			

			<div class="demo">
				<h2>&lt;select&gt;</h2>
				<div class="control-group">
					<label for="select-beast">Beast:</label>
					<select id="select-beast" class="demo-default" placeholder="Select a person...">
						<option value="">Select a person...</option>
						<option value="4">Thomas Edison</option>
						<option value="1">Nikola</option>
						<option value="3">Nikola Tesla</option>
						<option value="5">Arnold Schwarzenegger</option>
					</select>
				</div>
				
			</div>

			
			</div>
		</div>
		<script>
				$('#select-beast').selectize({
					create: true,
					sortField: {
						field: 'text',
						direction: 'asc'
					},
					dropdownParent: 'body'
				});
				</script>
	</body>
</html>
