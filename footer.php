<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
	#footer
	{
		width: 100%;
	}
</style>
</head>
<body>
	<div id="footer">
		<div id="unreal">
			footer to show
		</div>
		<div id="real" style="display:none;">
			tarun here
		</div>
	</div>
</body>
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#unreal').click(function(){
				$('#real').fadeIn();
				$('#unreal').fadeOut();
		});
	});
</script>
</html>