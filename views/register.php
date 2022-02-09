<?php

if (isset($_POST['submit'])) {
	$creatuser = new UsersController();
    $creatuser->register();
}


?>

<div class="container">
	<div class="row my-4">
		<div class="col-md-6 mx-auto">
		    <div class="card">
		    	<div class="card-header">
		    		<h3 class="text-center">Inscription</h3>
		    	</div>
		    	<div class="card-body bg-light">
		    		<form method="post" class="mr-1" action="">
		    			<div class="form-group">
		    				<input type="text" name="fullname"
		    				placeholder="Nom & Prenom" class="form-control">
		    			</div>
		    			&nbsp;
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
                    		<button name="submit" class="btn btn-sm btn-primary">Inscrire</button>
                        </div>
		    		</form>
		    	</div>
		    	<div class="card-footer">
		    		<a href="<?php echo BASE_URL;?>login" class="btn btn-link">Connexion</a>
		    	</div>
		    </div>
		</div>
	</div>
</div>

