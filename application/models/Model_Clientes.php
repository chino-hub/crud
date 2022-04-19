<?php 

class Model_Clientes extends CI_Model
 {

 	function __construct()
 	{
 		parent::__construct();
 		$this->load->database();
 	}


	// TRAE TODOS LOS CLIENTES DE MI TABLA `CLIENTES`
	
	public function get_all_clients()
	{
	$query = $this->db->query("SELECT * FROM clientes");
	return $query->result();
	}
	
	// TREA UN CLIENTE EN ESPECIFICO
	
	public function get_one_client($id)
	{
	$query = $this->db->query("SELECT * FROM clientes WHERE id_cliente = $id");
	return $query->row();
	}
	
	// INSERTA LOS DATOS EN LA BASE DE DATOS

	public  function insertarCliente($nombre, $apellido, $email)
	{
	$arrayDatos = array(
		'nombre'   => $nombre,
		'apellido' => $apellido,
		'email'    => $email
	);

	$this->db->insert('clientes', $arrayDatos);
	}

	// BORRA DATOS DE LA TABLA

	public function deleteUsuario($id)
	{
		 $this->db->where('id_cliente', $id);
		 $this->db->delete('clientes');
	}

	// UPDATE

	public function update($id)
	{
		$arrayDatos = array(
		'nombre'   => $_POST['nombre-cliente'],
		'apellido' => $_POST['apellido-cliente'],
		'email'    => $_POST['email-cliente']
	);

		$this->db->where('id_cliente', $id);
	   $this->db->update('clientes', $arrayDatos);
	}

}