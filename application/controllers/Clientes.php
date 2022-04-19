<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Clientes');
    }

	public function index()
	{
		 $data['contenido'] = 'clientes/index';
		 $data['listClientes'] = $this->Model_Clientes->get_all_clients();
        $this->load->view('plantilla', $data);
	}

	// OBTENGO LOS DATOS DEL FORMULARIO
	 public function obtener()
	{
		$_POST = $this->input->post();
		if($_POST){
			$nombre   = $_POST['nombre-cliente'];
			$apellido = $_POST['apellido-cliente'];
			$email    = $_POST['email-cliente'];
			$this->Model_Clientes->insertarCliente($nombre, $apellido, $email);
			redirect('');
		}
	}

	public function eliminarCliente($id = NULL)
	{
		if ($id != NULL) {
			$this->Model_Clientes->deleteUsuario($id);
			redirect('');
		}
	}

	public function editarCliente($id = NULL)
	{
		if ($id != NULL) {
			$data['datosUsuario'] = $this->Model_Clientes->get_one_client($id);
			$data['contenido'] = 'clientes/edit';
			$this->load->view('plantilla', $data);
		}else
		{
			redirect('');
		}
	}

	public function editar($id)
	{
		$this->Model_Clientes->update($id);
		redirect('');
	}

}
