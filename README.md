# Captcha-maker
*a simple and lightweight online captcha maker inspired by [the-art-of-web](http://www.the-art-of-web.com/php/captcha/)*

## HOW TO USE:

Create your image with a width of 120 and a height of 30 *You can edit the width and size in captcha.php*

				<img id="captchaImg" src="" width="120" height="30" border="1" alt="CAPTCHA">

Using Javascript with onclick function event
				
				function generateCaptcha(){
					document.getElementById('captchaImg').src = 'captcha.php?' + Math.random();
					return false;
				}

Making it more simple using JQuery:

				$('#captchaImg').attr('src','captcha.php?' + Math.random());

The $SESSION variable in the captcha.php which holds the string of the generated captcha
	
				$_SESSION['captcha_text']