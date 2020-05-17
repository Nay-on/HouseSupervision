<!doctype html>
<html lang="en">

	<?php
		include('include/head.php');
	?>

	<body onload="init()">

	<!-- DEBUT DU MENU -->
	
	<?php
		session_start();
		error_reporting(0);
		if($_SESSION['username'] != ""){ ?>
			<!-- CODE ICI -->
			<div class="spacetop">
			<?php include('include/tuto.php'); ?>
			</div>
			<!-- LOGOUT -->
			<?php
			    if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                }
				if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:index");
                   }
                }
			?>
			
			<!-- FIN CODE -->
			
	<?php } else { ?>
		<button id="btnAnouncement" type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
			Login
		</button>
	<?php } ?>
	
			<!-- Modal -->
				<?php include('include/login.php'); ?>
	
    <!-- Optional JavaScript -->
	<script>
		function init() {
			<?php
				if(isset($_GET['erreur'])){
				$err = $_GET['erreur'];
				if($err==1 || $err==2)
				?>
				$('#login').modal('show');
				<?php }
				
				if($_SESSION['username'] == ""){
					?> $('#login').modal('show'); <?php
				}
			?>
			if(getCookie("night") == "true"){
				document.body.style.backgroundColor  = "#636e72";
			}
			if(getCookie("night") == "false"){
				document.body.style.backgroundColor  = "white";
			}
		}
	</script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
  </body>
</html>