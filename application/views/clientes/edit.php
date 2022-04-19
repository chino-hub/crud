



<div class="d-flex justify-content-center mt-5">
	<form name="formulario" method="POST" action="<?php echo base_url('clientes/editar/').'/'.$datosUsuario->id_cliente?>" class="col-md-5 ">
 		<div class="form-group">
 		  	<label for="exampleInputEmail1">Nombre</label>
 		  	<input type="text" class="form-control" name="nombre-cliente" value="<?php echo $datosUsuario->nombre?>" aria-describedby="emailHelp">
 		</div>
 		<div class="form-group">
 		  	<label for="exampleInputEmail1">Apellido</label>
 		  	<input type="text" class="form-control" value="<?php echo $datosUsuario->apellido ?>" name="apellido-cliente" aria-describedby="emailHelp">
 		</div>
 		<div class="form-group">
 		  	<label for="exampleInputEmail1">Direccion de email</label>
 		  	<input type="email" class="form-control" value="<?php echo $datosUsuario->email ?>"  name="email-cliente" aria-describedby="emailHelp">
 		</div>
 		<button type="submit" class="btn btn-primary">Cargar</button>
	</form>
</div>