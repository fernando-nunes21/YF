<?php
	require_once "bankConnection.php";
	if(!empty($_POST['submit'])){
		$query = "SELECT * FROM Musics Where musicname LIKE '%".$_POST['search']."%'";
	}
	else{
		$query = "SELECT * FROM Musics ORDER BY idMusics DESC";
	}
	
	$result = mysqli_query($dataBase,$query) or die(mysqli_error($dataBase));
?>

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="../css/style.css" rel='stylesheet' type='text/css' />
	<link href="../css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/icon-font.css" type='text/css' />
	<script src="../js/jquery-2.1.4.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/bootstrap.js"></script>

<div id="page-wrapper">
				<div class="inner-content">
					<div class="music-browse">
						<div class="browse">
							<div class="tittle-head two">
								<h3 class="tittle">Recem Adicionadas! <span class="new">NOVIDADES</span></h3>
								<div class="clearfix"> </div>
							</div>
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
										<div class="browse-inner">
											<?php
												while($row = mysqli_fetch_array($result)){
													$imageMusic = $row['imagefile'];
													$musicFile = $row['filename'];
													$musicName = $row['musicname'];

											?>
											<div class="col-md-3 artist-grid">
												<a href="../audioPlayer.php?filename=<?php echo $musicFile; ?>" target="audioPlayer"><img src="../images/albuns/<?php echo $imageMusic; ?>" title="allbum-name">
												<a href="../audioPlayer.php?filename=<?php echo $musicFile; ?>" target="audioPlayer"><i class="glyphicon glyphicon-play-circle"></i></a>
												<a class="art" href="../audioPlayer.php?filename=<?php echo $musicFile; ?>" target="audioPlayer"><?php echo $musicName; ?></a>
											</div>
											<?php
												}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>