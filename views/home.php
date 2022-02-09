<?php
if (isset($_POST['find'])) {
	$data = new EmployesController();
	$employes = $data->findEmployes();
}else{
	$data = new EmployesController();
	$employes = $data->getAllEmployes();
}



?>

<div class="container">
	<div class="row my-4">
		<div class="col-md-10 mx-auto">
			<?php include('./views/includes/alerts.php')?>
		    <div class="card">
		    	<div class="card-body bg-light">
		    		<a href="<?php echo BASE_URL;?>add" class="btn btn-sm btn-primary mr-2 mb-2" >
		    			<i class="fas fa-plus"></i>
		    		</a>
		    		<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2" >
		    			<i class="fas fa-home"></i>
		    		</a>
		    		<a href="<?php echo BASE_URL;?>logout"class="btn btn-sm btn-link mr-2 mb-2" title="Déconnexion">
		    			<i class="fas fa-user mr-2">  <?php echo $_SESSION['username']?></i>
		    		</a>
		    		<form method="post" class="float-right mb-2 d-flex flex-row">
		    			<input type="text" name="search" class="form-control" placeholder="Recherche">
		    			&nbsp;
		    			<button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
		    		</form>
					<table class="table table-hover">
						  <thead>
						    <tr>
						      <th scope="col">Nom et Prenom</th>
						      <th scope="col">Matricule</th>
						      <th scope="col">Departement</th>
						      <th scope="col">Poste</th>
						      <th scope="col">Date Embouche</th>
						      <th scope="col">Statut</th>
						      <th scope="col">Action</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php foreach ($employes as $employe):?>
						    <tr>
						      <th scope="row"><?php echo $employe['nom'].' '.$employe['prenom'] ?></th>
						      <td><?php echo $employe['matricule'] ?></td>
						      <td><?php echo $employe['depart'] ?></td>
						      <td><?php echo $employe['poste'] ?></td>
						      <td><?php echo $employe['date_emb'] ?></td>
						      <td>
						       <?php echo $employe['statut'] 
						             ?
						             '<span class="badge bg-success">Active</span>'
						             :
					             	 '<span class="badge bg-danger">Resilié</span>';       
						      ;?></td>
						      <td class="d-flex flex-row">
						      	<form method="post" class="mr-1" action="update">
						      		<input type="hidden" name="id" value="<?php echo $employe['id'];?>">
						      		<button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
						      	</form> 
                                  &nbsp;
						      	<form method="post" class="mr-1" action="delete">
						      		<input type="hidden" name="id" value="<?php echo $employe['id'];?>">
						      		<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						      	</form>
						      </td>
						    </tr>
						   <?php endforeach;?>
						  </tbody>
           			 </table>
		    	</div>
		    </div>
		</div>
	</div>
</div>

