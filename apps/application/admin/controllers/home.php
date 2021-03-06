<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		
		if($num==0):	
		$current_user = wp_get_current_user();

		$i['ID']=$empleador_ID;
		$i['email']=		$current_user->user_email;
		$i['creado']=date('Y-m-d H:i:s');
		$this->db->insert('empleador',$i);
		endif;
		
		
		
 		$data['content']=$this->load->view('home/index',array(),true);
		$this->load->view('template',$data);
		}
}