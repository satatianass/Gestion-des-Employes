<?php

if (isset($_POST['submit'])) {
	$newEmploye = new EmployesController();
    $newEmploye->addEmploye();
}


?>

<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
		    <div class="card">
		    	<div class="card-header">Ajouter un employé</div>
		    	<div class="card-body bg-light">
		    		<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2" >
		    			<i class="fas fa-home"></i>
		    		</a>
					<form method="post">
						<div class="form-group">
							<label for="Nom">Nom*</label>
							<input type="text" name="nom" class="form-control" placeholder="Nom">
						</div>
						<div class="form-group">
							<label for="Prenom">Prenom*</label>
							<input type="text" name="prenom" class="form-control" placeholder="Prenom">
						</div>
						<div class="form-group">
							<label for="Matricule">Matricule*</label>
							<input type="text" name="matricule" class="form-control" placeholder="Matricule">
						</div>
						<div class="form-group">
							<label for="Departement">Département*</label>
							<input type="text" name="depart" class="form-control" placeholder="Département">
						</div>
						<div class="form-group">
							<label for="Poste">Poste*</label>
							<input type="text" name="poste" class="form-control" placeholder="Poste">
						</div>
						<div class="form-group">
							<label for="date_emb">Date Emauche*</label>
							<input type="date" name="date_emb" class="form-control">
						</div>
						<div class="form-group">
							<label for="Statut">Statut*</label>
							<select class="form-control" name="statut">
								<option value="1">Active</option>
								<option value="0">Résilie</option>
							</select>
						</div>
						&nbsp;
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Valider</button>
						</div>

					</form>
		    	</div>
		    </div>
		</div>
	</div>
</div>

