<?php
	$music = null;
	if(!empty($_GET['filename'])){
		$music = $_GET['filename'];
	}
?>

<audio autoplay id="audio-player"  controls="controls">
	<source src="media/<?php echo $music; ?>" type="audio/mpeg"></source>
	<source src="media/<?php echo $music; ?>" type="audio/ogg"></source>
</audio>
