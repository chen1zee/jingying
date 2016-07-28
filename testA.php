<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript">
		$.ajax({
			url: 'test.php',
			type: 'GET',
			dataType: 'json',
			success:function (data) {
				console.log(data);
				 /* body... */ 
			}
		})
		.done(function() {
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	</script>
</body>
</html>