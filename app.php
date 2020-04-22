<!doctype html>
<html lang="en">

  	<?php
		include('include/head.php');
	?>

	<body>
		<?php
		include('include/menu.php');
		?>
	
		<!-- Button trigger modal -->
		</br>
		<button type="button" class="btn btn-primary sepleft" data-toggle="modal" data-target="#exampleModal">
		Add Computer
		</button>
				<button type="button" class="btn btn-primary sepleft" data-toggle="modal" data-target="#moddalComponent">
		Add Component
		</button>
		

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
						<label for="ip">@Mac : </label>
						<input type="text" name="ip" id="ip">
					</p>
					<p>
						<label for="ip">Name : </label>
						<input type="text" name="name" id="name">
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
	</br></br>
	
	
		<div class="modal fade" id="moddalComponent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
				
				<form action="addcomponent.php" method="post">
					<p>
						<label for="ip">Name : </label>
						<input type="text" name="name" id="name">
					</p>
					<p>
						<label for="ip">IFTTT Link : </label>
						<input type="text" name="linkcp" id="linkcp">
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
		
		<!---->
		
	</br></br>
	
	

		<!-- pc list -->
		
			<span class="a"></br>
					<!--
			<ul>-->
			<div class="sepleft">
				<?php while($a = $pc->fetch()) { ?>
				<div class="centre">
					<div class="card" style="width: 18rem;">
						<i class="fas fa-desktop fa-7x"></i>
						<!--<img src="images/pc.png" class="card-img-top" alt="">-->
						<div class="card-body">
							<h5 class="card-title"><?php echo $a['name'] ?></h5>
							<p class="card-text"><?php echo $a['ip'] ?></p>
							<div class="btn-group">
							  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Actions
							  </button>
							  <div class="dropdown-menu">
								<a class="dropdown-item" href="#">Turn On</a>
								<a class="dropdown-item" href="#">Turn Off</a>
								<a class="dropdown-item" href="#">ETA</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="removeComputer.php?rm=<?php echo $a['id'] ?>">Remove <?php echo $a['name'] ?></a>
								
							  </div>
							</div>
						</div>
					</div>			
				</div>
				<!--
				<li>
					<a href="article.php?id=<?= $a['id'] ?>"><?= $a['titre'] ?></a>
						
				<?php
					session_start();
					error_reporting(0);
					if($_SESSION['username'] != ""){ ?>
					  | <a href="principale.php?edit=<?= $a['id'] ?>">Modifier</a> | <a onclick="test()" href="supprimer.php?id=<?= $a['id'] ?>">Supprimer</a>
				<?php }
				?>
				</li>
				-->
				<?php } ?>
			</div>
			<!--<ul>-->
			
			</span>
	
    <!-- Optional JavaScript -->
	
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>