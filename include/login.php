<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="border:10px;">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="session.php" method="post">
					<?php
						if(isset($_GET['erreur'])){
						$err = $_GET['erreur'];
						if($err==1 || $err==2)
					?>
					<div class="alert alert-danger fade in alert-dismissible fade show" role="alert">
						<strong>Wrong username or password !</strong> <a href="help.php">Help</a>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php
						}
					?>
					<p>
						<label for="username">Username : </label>
						<input type="text" name="username" id="password" class="form-control">
					</p>
					<p>
						<label for="password">Password :  </label>
						<input type="password" name="password" id="password" class="form-control">
					</p>
					</div>
					<div class="modal-footer">
					<input class="btn btn-primary" type="submit" value="Submit" >
				</form>
			</div>
		</div>
	</div>
</div>