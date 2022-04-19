<?php 

class Model_Clientes extends CI_Model
 {

 	function __construct()
 	{
 		parent::__construct();
 		$this->load->database();
 	}


	// TRAE TODOS LOS PRODUCTOS DE MI TABLA `PRODUCTOS`
	
	public function get_all_productos()
	{
	$query = $this->db->query("SELECT * FROM producto");
	return $query->result();
	}
	
	// TREA UN PRODUCTO EN ESPECIFICO
	
	public function get_one_productos($id)
	{
	$query = $this->db->query("SELECT * FROM producto WHERE id_producto = $id");
	return $query->row();
	}
	
	// INSERTA LOS DATOS EN LA BASE DE DATOS

	public  function insertarProductos($cantidad, $precio)
	{
	$arrayDatos = array(
		'cantidad'   => $cantidad,
		'precio' => $precio,
		
	);

	$this->db->insert('producto', $arrayDatos);
	}

	// BORRA DATOS DE LA TABLA

	public function deleteUsuario($id)
	{
		 $this->db->where('id_producto', $id);
		 $this->db->delete('producto');
	}

	// UPDATE

	public function update($id)
	{
		$arrayDatos = array(
		'cantidad'   => $cantidad,
		'precio' => $precio,
		
	);

		$this->db->where('id_producto', $id);
	   $this->db->update('producto', $arrayDatos);
	}

}