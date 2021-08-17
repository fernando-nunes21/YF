<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
										<div class="browse-inner">
											<?php
												while($row = mysqli_fetch_array($resultMusic)){
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