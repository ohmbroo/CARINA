<?php

// glob function like e.keyCode_56;
// for loop to process each image individually;
// for loop uses over 99% less memory, using 1 image at a time;

$image_files = glob('R8/*.png');

foreach ($image_files as $image_file) {
	$image = new Imagick($image_file);
	// process here
	}

?>

