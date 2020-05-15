<!doctype html>
<html lang="en">

  	<?php
		include('include/head.php');
	?>

	<body onload="init()">
	
		<!-- Alert -->
		<div>
			<span class="a">
				<div>
					<?php while($alert = $comp2->fetch()) {
						$idcompoAlert = $alert['id'];
						if($alert['action1state'] == 1){
							$sql = "UPDATE component SET action1state = 0 WHERE id = $idcompoAlert";
							if(mysqli_query($db, $sql)){
								?>
									<Script type="text/javascript">var notification = alertify.notify('Action <?php echo $alert['nameAction1'] ?> has been launch', 'success', 8);</Script>
								<?php
							}
						}
						if($alert['action2state'] == 1){
							$sql = "UPDATE component SET action2state = 0 WHERE id = $idcompoAlert";
							if(mysqli_query($db, $sql)){
								?>
									<Script type="text/javascript">var notification = alertify.notify('Action <?php echo $alert['nameAction2'] ?> has been launch', 'success', 8);</Script>
								<?php
							}
						}
						if($alert['action3state'] == 1){
							$sql = "UPDATE component SET action3state = 0 WHERE id = $idcompoAlert";
							if(mysqli_query($db, $sql)){
								?>
									<Script type="text/javascript">var notification = alertify.notify('Action <?php echo $alert['nameAction3'] ?> has been launch', 'success', 8);</Script>
								<?php
							}
						}
						if($alert['action4state'] == 1){
							$sql = "UPDATE component SET action4state = 0 WHERE id = $idcompoAlert";
							if(mysqli_query($db, $sql)){
								?>
									<Script type="text/javascript">var notification = alertify.notify('Action <?php echo $alert['nameAction4'] ?> has been launch', 'success', 8);</Script>
								<?php
							}
						}
					} ?>
				</div>
			</span>
		</div>

		
		<?php
			session_start();
			error_reporting(0);
			if($_SESSION['username'] == ""){
				header("location:index.php");
			}
		?>

	<!-- Modal -->

		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Computer</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				
				<!-- Add computer form -->
				
				<form action="addcomputer.php" method="post">
					<p>
						<label for="ip">Name : </label>
						<input class="form-control" type="text" name="name" id="name">
					</p>
					<p>
						<label for="ip">@Mac : </label>
						<input class="form-control" type="text" name="mac" id="mac">
					</p>
					<p>
						<label for="ip">(optional) @Ip : </label>
						<input class="form-control" type="text" name="ip" id="ip">
					</p>
					
				
				</div>
			  <div class="modal-footer">
				<input class="btn btn-primary" type="submit" value="Submit" >
				</form>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
	
	
		<div class="modal fade" id="moddalComponent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add Component</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				
				<!-- Add component form -->
				
				<form action="addcomponent.php" method="post">
					<p>
						<label for="ip">Name : </label><br>
						<input class="form-control" type="text" name="name" id="name">
					</p>
					<label for="ip">type : </label><br>
					<select name="type" class="form-control">
						<option>Lightbulb</option>
						<option>Outlet</option>
						<option>Phone</option>
						<option>Router</option>
						<option>Electronics</option>
						<option>Camera</option>
						<option>Other</option>
					</select><br>
					<label for="brand">Brand : </label><br>
					<select name="brand" class="form-control">
						<option>Lifx</option>
						<option>Lifx-RGB</option>
						<option>YeeLight</option>
						<option>other</option>
					</select><br>
					
					<p>
						<label for="ip">Action 1 name : </label><br>
						<input class="form-control" type="text" name="action1" id="action1"><br>
						<label for="ip">Action 1 IFTTT name : </label><br>
						<input class="form-control" type="text" name="linkcp" id="linkcp"><br>
					</p>
					<p>
						<label for="ip">Action 2 name : </label><br>
						<input class="form-control" type="text" name="action2" id="action2"><br>
						<label for="ip">Action 3 IFTTT name : </label><br>
						<input class="form-control" type="text" name="linkcp2" id="linkcp2"><br>
					</p>
					<p>
						<label for="ip">Action 3 name : </label><br>
						<input class="form-control" type="text" name="action3" id="action3"><br>
						<label for="ip">Action 3 IFTTT name : </label><br>
						<input class="form-control" type="text" name="linkcp3" id="linkcp3"><br>
					</p>
					<p>
						<label for="ip">Action 4 name : </label><br>
						<input class="form-control" type="text" name="action4" id="action4"><br>
						<label for="ip">Action 4 IFTTT name : </label><br>
						<input class="form-control" type="text" name="linkcp4" id="linkcp4"><br>
					</p>
					
				
				</div>
			  <div class="modal-footer">
				<input class="btn btn-primary" type="submit" value="Submit" >
				</form>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>		
	</br>

		<!-- pc list -->
		
<div class="sepleft specetop">
	<div id="accordion" style="margin: 0px 0 15px 0;">
		<div class="card" id="card1">
			<div class="card-header" id="headingOne">
				<h5 class="mb-0">
					<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						Computer
					</button>
				</h5>
			</div>
			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				<div class="card-body">
					<?php while($a = $pc->fetch()) { ?>
					<div class="centre">
						<div class="card" style="width: 18rem;">
							<br>
							<i class="fas fa-desktop fa-7x"></i>
							<div class="card-body interli">
								<h5 class="card-title"><?php echo $a['name'] ?></h5>
								<p class="card-text"><?php echo $a['ip'] ?></p>
								<p class="card-text"><?php echo $a['mac'] ?></p>
								
								<div class="btn-group noline">
								  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
								  </button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="wol.php?mac=<?php echo $a['mac'] ?>">Turn On</a>
										<a class="dropdown-item" href="#">Turn Off</a>
										<a class="dropdown-item" href="#">ETA</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="removeComputer.php?rm=<?php echo $a['id'] ?>">Remove <?php echo $a['name'] ?></a>
									</div>
								</div>
							</div>
						</div>			
					</div>
					<?php } ?>
					<div class="centre">
						<div class="add">
							<div class="card" style="width: 18rem;">
								<br>
								<a data-toggle="modal" data-toggle="modal" data-target="#exampleModal">
									<i class="fas fa-plus fa-7x" style="opacity: 0.50;padding:59px;"></i>
								</a>
								<div class="card-body">
									<h5 class="card-title"></h5>
									<p class="card-text"></p>
								</div>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</div>
		
			<!-- Component -->
			<span class="a">
				<div class="sepleft">

				<div id="accordion2" style="margin: 0px 0 15px 0;">
	<div class="card" id="card2">
		<div class="card-header" id="headingTwo">
			<h5 class="mb-0">
				<button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
					Component
				</button>
			</h5>
		</div>
		<div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion2">
			<div class="card-body">
					<?php while($b = $comp->fetch()) { ?>
					<div class="centre">
						<div class="card" style="width: 18rem;">
							<br>
							<?php 
							switch ($b['type']) {
								case 'Lightbulb':
									?><i class="fas fa-lightbulb fa-7x"></i><?php
									break;
								case 'Outlet':
									 ?><i class="fas fa-plug fa-7x"></i><?php
									break;
								case 'Router':
									 ?><i class="fas fa-network-wired fa-7x"></i><?php
									break;
								case 'Phone':
									 ?><i class="fas fa-mobile fa-7x"></i><?php
									break;
								case 'Electronics':
									 ?><i class="fas fa-microscope fa-7x"></i><?php
									break;
								case 'Camera':
									 ?><i class="fas fa-video fa-7x"></i><?php
									break;
								case 'Other':
									?><i class="fas fa-network-wired fa-7x"></i><?php
									break;
							}
							?>
							<div class="card-body">
								<h5 class="card-title"><?php echo $b['name'] ?></h5>
								<p class="card-text"><?php echo $b['type'] ?></p>
								<div class="btn-group">
								  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
								  </button>
								  <div class="dropdown-menu">
									<!-- link1 -->
									<?php  if($b['nameAction1'] != ''){ ?>
									<a class="dropdown-item <?php if($b['link'] == '') echo disabled ?>" href="ifttt.php?link=<?php echo $b['link'] ?>&id=<?php echo $b['id'] ?>&action=1" ><?php echo $b['nameAction1']; if($b['link'] == '') echo " (no Ifttt action found)"?></a>
									<?php } ?>
									<!-- link2 -->
									<?php  if($b['nameAction2'] != ''){ ?>
									<a class="dropdown-item <?php if($b['link'] == '') echo disabled ?>" href="ifttt.php?link=<?php echo $b['link2'] ?>&id=<?php echo $b['id'] ?>&action=2"><?php echo $b['nameAction2']; if($b['link'] == '') echo " (no Ifttt action found)" ?></a>
									<?php } ?>
									<!-- link3 -->
									<?php  if($b['nameAction3'] != ''){ ?>
									<a class="dropdown-item <?php if($b['link'] == '') echo disabled ?>" href="ifttt.php?link=<?php echo $b['link3'] ?>&id=<?php echo $b['id'] ?>&action=3"><?php echo $b['nameAction3']; if($b['link'] == '') echo " (no Ifttt action found)" ?></a>
									<?php } ?>
									<!-- link4 -->
									<?php  if($b['nameAction4'] != ''){ ?>
									<a class="dropdown-item <?php if($b['link'] == '') echo disabled ?>" href="ifttt.php?link=<?php echo $b['link4'] ?>&id=<?php echo $b['id'] ?>&action=4"><?php echo $b['nameAction4']; if($b['link'] == '') echo " (no Ifttt action found)" ?></a>
									<?php } ?>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item " href="removeComponent.php?rm=<?php echo $b['id'] ?>">Remove <?php echo $b['name'] ?></a>
								  </div>
								</div>

								<!-- Modal lumi -->
								<?php if($b['type'] == "Lightbulb" && 0) { ?>
									<form>
											<div class="d-flex justify-content-center my-4">
												<span class="font-weight-bold text-primary ml-2" style="margin-right: 16px;">Brightness </span>
												<div class="w-75">
														<input type="range" class="custom-range" id="range" min="1" max="100">
												</div>
												<span class="font-weight-bold text-primary ml-2 valueSpan2"></span>
											</div>
											<?php if($b['brand'] == "Lifx") {?>
											<div class="d-flex justify-content-center my-4">
												<span class="font-weight-bold text-primary ml-2" style="margin-right: 48px;">Kelvin </span>
												<div class="w-75">
														<input type="range" class="custom-range" id="range2" min="1500" max="6000">
												</div>
												<span class="font-weight-bold text-primary ml-2 valueSpan1"></span>
											</div>
											<?php } ?>
											<?php if($b['brand'] == "Lifx-RGB") {?>
											<div style=" text-align: left;">
												<span class="font-weight-bold text-primary ml-2" style="margin-right: 190px;">Color </span>
												<input type="color" id="head" name="color" value="#0984e3">
											</div>
											<?php } ?>
									</form>
								<?php }?>
							</div>
						</div>
					</div>
					<?php } ?>
					<div class="centre">
						<div class="add">
							<div class="card" style="width: 18rem;">
								<br>
								<a data-toggle="modal" data-target="#moddalComponent">
									<i class="fas fa-plus fa-7x" style="opacity: 0.50;padding:51px;"></i>
								</a>
								<div class="card-body">
									<h5 class="card-title"></h5>
									<p class="card-text"></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</span>
		</div>
	</div>
	
    <!-- Optional JavaScript -->
	<script>
		function init() {
			if(getCookie("night") == "true"){
				document.body.style.backgroundColor  = "#636e72";
				document.getElementById("collapseOne").style.backgroundColor = "#636e72";
				document.getElementById("card1").style.border = "0px solid rgba(0,0,0,.125)";
				
				document.getElementById("collapseTwo").style.backgroundColor = "#636e72";
				document.getElementById("card2").style.border = "0px solid rgba(0,0,0,.125)";
			}
		}
	</script>
	
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>	
	<!--<Script type="text/javascript">var notification = alertify.notify('sample', 'success', 8);</Script>-->
	
  </body>
</html>