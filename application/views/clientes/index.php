


<div class="flex-container d-flex justify-content-around aling-items-center">
	<!-- FORMULARIO DE CLIENTES (NOMBRE, APELLIDO, EMAI) -->

	<form name="formulario" method="POST" action="<?php echo base_url('clientes/obtener/') ?>" class="col-md-5 ">
 		<div class="form-group">
 		  	<label for="exampleInputEmail1">Nombre</label>
 		  	<input type="text" class="form-control" name="nombre-cliente" aria-describedby="emailHelp">
 		</div>
 		<div class="form-group">
 		  	<label for="exampleInputEmail1">Apellido</label>
 		  	<input type="text" class="form-control" name="apellido-cliente" aria-describedby="emailHelp">
 		</div>
 		<div class="form-group">
 		  	<label for="exampleInputEmail1">Direccion de email</label>
 		  	<input type="email" class="form-control" name="email-cliente" aria-describedby="emailHelp">
 		</div>
 		<button type="submit" class="btn btn-primary">Cargar</button>
	</form>
	
	<!-- TABLA DE CLIENTES -->
	
	<table class="table col-md-5 mt-5 ">
  <thead  style="background-color:#666; color:#fff;">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col"><center>Email</center></th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($listClientes as $value) { ?>
         <tr>
      		<td> <?php echo $value->id_cliente; ?> </td>
      		<td> <?php echo $value->nombre; ?> </td>
      		<td> <?php echo $value->apellido; ?> </td>
      		<td> <?php echo $value->email; ?> </td>
      		<td>
      			<a href="<?php echo base_url("clientes/eliminarCliente")."/".$value->id_cliente?>">Eliminar</a>
      			<a href="<?php echo base_url("clientes/editarCliente")."/".$value->id_cliente?>">Modificar</a>
      		</td>
      		
         </tr>
      <?php } ?>
  </tbody>
	</table>
</div>