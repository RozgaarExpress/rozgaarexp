<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="./js/jquery.form.js"></script>
<html>
<head>
	<title>Test Knowledge</title>
</head>
<body>
<form action="submit.php" method="POST" id="uploadform" enctype="multipart/form-data">
  	<input type="file" name="profileimage" id="photoimg" />
  	<input type="button" value="Upload" name="Upload" id="Upload" />
</form>
<div id="targetLayer"></div>
</body>
<script type="text/javascript">
$(document).ready(function (){
	$('#Upload').on('click', function(){	
	$("#uploadform").ajaxForm({target: '#targetLayer'}).submit();
	});
});
</script>
</html>