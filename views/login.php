<?php

if (isset($_POST['submit'])) {
	$log = new UsersController();
    $log->auth();
}


?>

<div class="container">
	<div class="row my-4">
		<div class="col-md-6 mx-auto">
			<?php include('./views/includes/alerts.php')?>
		    <div class="card">
		    	<div class="card-header">
		    		<h3 class="text-center">Login</h3>
		    	</div>
		    	<div class="card-body bg-light">
		    		<form method="post" class="mr-1" action="home">
		    			<div class="form-group">
		    				<input type="text" name="username"
		    				placeholder="Pseudo" class="form-control">
		    			</div>
		    			&nbsp;
                    	<div class="form-group">
	    				<input type="password" name="password"
	    				placeholder="Mot de Passe" class="form-control">
	    				</div>
	    				&nbsp;
                        <div class="form-group">
                    		<button name="submit" class="btn btn-sm btn-primary">Connexion</button>
                        </div>
	    			
	    				
		    		</form>
		    	</div>
		    	<div class="card-footer">
		    		<a href="<?php echo BASE_URL;?>register" class="btn btn-link">Inscription</a>
		    	</div>
		    </div>
		</div>
	</div>
</div>

