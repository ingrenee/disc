<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Init extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($id)
	{
		
		
		
		$this->form_validation->set_rules('nombres', 'Nombres', 'required');
		$this->form_validation->set_rules('paterno', 'Apellido paterno', 'required');
		$this->form_validation->set_rules('materno', 'Apellido materno', 'required');
		$this->form_validation->set_rules('celular', 'número celular/telefono', 'required|min_length[9]|max_length[15]|numeric');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('dni', 'dni', 'required|min_length[8]|max_length[8]|numeric');
		$this->form_validation->set_rules('genero', 'genero', 'required');		

$w['ID']=$id;
			$data['root']=$this->db->where($w)->limit(1)->get('operacion')->row_array();
		if ($this->form_validation->run() == FALSE)
		{
			
			
			
			$data['id']=$id;
			$data['content']=$this->load->view('init/index',$data, true);
		}
		else
		{
			$n['nombres']=$this->input->post('nombres');
			$n['paterno']=$this->input->post('paterno');
			$n['materno']=$this->input->post('materno');
			$n['email']=$this->input->post('email');
			$n['genero']=$this->input->post('genero');
			$n['celular']=$this->input->post('celular');
			$n['dni']=$this->input->post('dni');
			
			/* verificar  si existe*/
			$flag=$this->verifica($n['dni'],$n['email']);
			
			if(!$flag):
			/* si no existe */
				 $this->db->insert('usuarios', $n);
				 $usuario_ID= $this->db->insert_id();
			else:
			
			     $usuario_ID=$flag;			
			endif;

			/**/

			$operacion['usuario_ID']=$usuario_ID;
			$operacion['id']=$id;
			$operacion['empleador_ID']=$data['root']['empleador_ID'];
			
			
			$this->session->set_userdata('operacion',  $operacion);




			redirect(site_url('/').'disc/');

		}
		
		
		
		$this->load->view('template', $data);

	}
	
	function verifica($dni, $email)
	{$w['dni']=$dni;
	$w['email']=$email;
		$t=$this->db->where($w)->get('usuarios');
		
		$num=$t->num_rows();
		
		if($num<=0):
		return false;
		else:
		$temp=$t->row_array();
		
		return $temp['ID'];
		
		endif;
		
		}
}