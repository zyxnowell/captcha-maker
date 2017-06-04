<?php

	// set the image size
	$image = @imagecreatetruecolor(120, 30) or die("Cannot Initialize new GD image stream");
	// set colors to the image
	$background = imagecolorallocate($image, 102, 255, 178);
	imagefill($image, 0, 0, $background);

	$linecolor = imagecolorallocate($image, 170,170,170); 

	$textcolor1 = imagecolorallocate($image, 75,75,75); 
	$textcolor2 = imagecolorallocate($image, 162,65,8); 
	
	//draw random lines on canvas
	for($i=0; $i < 10; $i++) {
	    imagesetthickness($image, rand(1,3));
	    imageline($image, 0, rand(0,30), 120, rand(0,30), $linecolor);
	}

	session_start();

	// using a mixture of TTF fonts
	$fonts = array();
	$fonts[] = "fonts/Nonserif.ttf";
	$fonts[] = "fonts/MixSerif.ttf";

	// generate random text
	$text = "";
    $possible = "abcdefghijklmnopqrstuvwxyz0123456789";
    $possibleLen = strlen($possible);

    for($i=15; $i < 96; $i+=20){
    	$randText = $possible[rand(0, $possibleLen - 1)];
        $text .= $randText;
        $textcolor = (rand() % 2) ? $textcolor1 : $textcolor2;
        imagettftext($image, 18, rand(-10,10), $i, rand(25, 15), $textcolor, $fonts[array_rand($fonts)], $randText);
    }

	// record text in a session variable
	$_SESSION['captcha_text'] = $text;

	// display image and clean up
	header('Content-type: image/png');
	imagepng($image);
	imagedestroy($image);

?>