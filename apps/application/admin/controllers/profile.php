<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

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
		$empleador_ID=get_current_user_id();
	
		$num=$this->db->where('ID',$empleador_ID)->get('empleador')->num_rows();
		
		$current_user = wp_get_current_user();
		
		
		
		
		$this->form_validation->set_rules('nombres', 'nombres', 'required');
	


		if ($this->form_validation->run() == FALSE)
		{ $data['current_user']=$current_user;
		
		
 		$data['content']=$this->load->view('profile/index',$data,true);
			
		}
		else
		{
		
		$up['first_name']=$this->input->post('nombres');
		$up['ID']=$empleador_ID;
		$user_id = wp_update_user($up );
			
			
			if ( is_wp_error( $user_id ) ) {

			redirect(ci_site_url('/').'profile/2');			

			} else {
				redirect(ci_site_url('/').'profile/index/1');
			}
		

		}
		
		
		
		$this->load->view('template',$data);
		}
}