<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.2.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.2.min.js"></script>

</head>
<body>
	<p><img id="captchaImg" src="" width="120" height="30" border="1" alt="CAPTCHA"></p>
	<button id="genCaptcha" type="button">Generate Captcha</button>
</body>

<script type="text/javascript">
	$(function() {
		$('#genCaptcha').on('click', function() {
			$('#captchaImg').attr('src','captcha.php?' + Math.random());
		});
	});
</script>
</html>