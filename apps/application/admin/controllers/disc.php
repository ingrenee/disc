<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Disc extends CI_Controller {

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
	public function index()
	{
		
		$this->agregar();
		}
		

		public function editar()
		{
		
		$id=$this->uri->segment(3);
		$empleador_ID=get_current_user_id();
		
		$this->form_validation->set_rules('titulo', 'titulo', 'required');
		$this->form_validation->set_rules('empresa', 'empresa', 'required');
		$this->form_validation->set_rules('empresa_descripcion', 'Descripcion de empresa', 'required');


		if ($this->form_validation->run() == FALSE)
		{
			$w['empleador_ID']=$empleador_ID;
			$w['ID']=$id;
			$data['root']=$this->db->where($w)->limit(1)->get('operacion')->row_array();
			
			$data['content']=$this->load->view('disc/editar',$data, true);
		}
		else
		{
			$i['titulo']=$this->input->post('titulo');
			$i['empresa']=$this->input->post('empresa');
			$i['empresa_descripcion']=$this->input->post('empresa_descripcion');
			$i['empleador_ID']=get_current_user_id(); 
			
			$i['modificado']=date('Y-m-d H:i:s');
			$w['empleador_ID']=$empleador_ID;
			$w['ID']=$id;
			
			
			$this->db->where($w)->update('operacion',$i);
			redirect(ci_site_url('/').'disc/listar/1');

		}
		
		
		
		$this->load->view('template', $data);
			}

		public function agregar()
		{
		
		
		$this->form_validation->set_rules('titulo', 'titulo', 'required');
		$this->form_validation->set_rules('empresa', 'empresa', 'required');
		$this->form_validation->set_rules('empresa_descripcion', 'Descripcion de empresa', 'required');


		if ($this->form_validation->run() == FALSE)
		{
			$data['content']=$this->load->view('disc/agregar',array(), true);
		}
		else
		{
			$i['titulo']=$this->input->post('titulo');
			$i['empresa']=$this->input->post('empresa');
			$i['empresa_descripcion']=$this->input->post('empresa_descripcion');
			$i['empleador_ID']=get_current_user_id(); 
			$i['creado']=date('Y-m-d H:i:s');
			$i['modificado']=date('Y-m-d H:i:s');
			
			
			$this->db->insert('operacion',$i);
			redirect(ci_site_url('/').'disc/listar/2');

		}
		
		
		
		$this->load->view('template', $data);
			}
			
			function listar()
			{
				$w['empleador_ID']=get_current_user_id();
				
				$data['root']=$this->db->where($w)->get('operacion');
				$data['sql']=$this->db->last_query();
				$data['content']=$this->load->view('disc/listar',$data, true);
					$this->load->view('template', $data);
				}
				
				
				
				function resultados()
				{
					$w['form.operacion_ID']=$this->uri->segment(3);
					
					

					
					$w['form.empleador_ID']=get_current_user_id();


					$data['ope']=$this->db->where('ID',$w['form.operacion_ID'])
					->where('empleador_ID',$w['form.empleador_ID'])
					->get('operacion')->row_array();
										
					$form=$this->db->select('ID')->where($w)->get('form')->row_array();
					
					
					$this->db->select('form.*,usuarios.email, usuarios.nombres, usuarios.paterno, usuarios.materno, usuarios.telefono, usuarios.celular, usuarios.dni, form.creado  as f_creado');
					$this->db->where($w);
$this->db->from('form');
$data['root']=$this->db->join('usuarios', 'usuarios.ID = form.usuarios_ID')->get();


				$data['content']=$this->load->view('disc/resultados',$data, true);	
					$this->load->view('template', $data);
					
					
					}
			
}