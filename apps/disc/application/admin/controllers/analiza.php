<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Analiza extends CI_Controller {

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
		
		$d1=$this->input->post('d1');
		$d2=$this->input->post('d2');
		
		$i1=$this->input->post('i1');
		$i2=$this->input->post('i2');
		
		$s1=$this->input->post('s1');
		$s2=$this->input->post('s2');
		
		$c1=$this->input->post('c1');
		$c2=$this->input->post('c2');
		
		$neg_n=(int)$this->input->post('neg_n');
		$pos_n=(int)$this->input->post('pos_n');								
		
		
		//diferencias
		
		$dif_d=$d1-$d2;
		$dif_i=$i1-$i2;
		$dif_s=$s1-$s2;
		$dif_c=$c1-$c2;						
		
		//comprobar
		$disc_pos=$d1+$i1+$s1+$c1+$pos_n;
		$disc_neg=$d2+$i2+$s2+$c2 + $neg_n;		
		
		
		
$seg_d=$this->segmentos_d($dif_d);
$seg_i=$this->segmentos_i($dif_i);		
$seg_s=$this->segmentos_s($dif_s);
$seg_c=$this->segmentos_c($dif_c);


$codigo=$seg_d.$seg_i.$seg_s.$seg_c;

		
		$r=$this->db->where('codigo',$codigo)->get('disc_codigos')->result_array();
		
		
		
		$data=$this->db->where('perfil',strtolower($r[0]['perfil']))->get('disc_data')->result_array();
		

		foreach($data as $k => $v):
		$tmp[$v['bloque']]=$v['descripcion'];
		endforeach;
		
		
		$data['data']=$tmp;
		$data['perfil']=$r[0]['perfil'];
		$this->load->view('analiza/index',$data);
		
//		 echo $disc_pos.'**'.$disc_neg;
		
		
		
					
		

	}
	
	
	function segmentos_d($v)
	{
		$s['-8']=1;
		$s['-9']=1;
		$s['-10']=1;
		$s['-11']=1;
		$s['-12']=1;
		$s['-13']=1;
		$s['-14']=1;
		$s['-15']=1;
		$s['-16']=1;
		$s['-17']=1;
		$s['-18']=1;
		$s['-19']=1;
		$s['-20']=1;
		$s['-21']=1;
		$s['-22']=1;
		$s['-23']=1;
		$s['-24']=1;
		$s['-25']=1;
		$s['-26']=1;
		$s['-27']=1;
		$s['-28']=1;
		

		$s['-4']=2;
		$s['-5']=2;
		$s['-6']=2;
		$s['-7']=2;
		
		
		$s['-1']=3;
		$s['-2']=3;
		$s['-3']=3;
		
		$s['1']=4;
		$s['0']=4;
		
		$s['2']=5;
		$s['3']=5;
		$s['4']=5;


		$s['5']=6;
		$s['6']=6;
		$s['7']=6;
		$s['8']=6;
		
		$s['9']=7;
		$s['10']=7;
		$s['11']=7;
		$s['12']=7;
		$s['13']=7;
		$s['14']=7;
		$s['15']=7;
		$s['16']=7;
		$s['17']=7;
		$s['18']=7;
		$s['19']=7;
		$s['20']=7;				
		$s['21']=7;				
		$s['22']=7;				
		$s['23']=7;				
		$s['24']=7;				
		$s['25']=7;				
		$s['26']=7;																
		$s['27']=7;																		
		$s['28']=7;																				

		
	return $s[$v];	
		
		}
		
		
		
		function segmentos_i($v)
	{
		$s['-8']=1;
		$s['-9']=1;
		$s['-10']=1;
		$s['-11']=1;
		$s['-12']=1;
		$s['-13']=1;
		$s['-14']=1;
		$s['-15']=1;
		$s['-16']=1;
		$s['-17']=1;
		$s['-18']=1;
		$s['-19']=1;
		$s['-20']=1;
		$s['-21']=1;
		$s['-22']=1;
		$s['-23']=1;
		$s['-24']=1;
		$s['-25']=1;
		$s['-26']=1;
		$s['-27']=1;
		$s['-28']=1;
		

		$s['-4']=2;
		$s['-5']=2;
		$s['-6']=2;
		$s['-7']=2;
		
		
	
		$s['-2']=3;
		$s['-3']=3;
		
		$s['1']=4;
		$s['0']=4;
		$s['-1']=4;
		
		$s['2']=5;
		$s['3']=5;
		
		$s['4']=6;
		$s['5']=6;
		$s['6']=6;
		
		$s['7']=7;
		$s['8']=7;
		
		$s['9']=7;
		$s['10']=7;
		$s['11']=7;
		$s['12']=7;
		$s['13']=7;
		$s['14']=7;
		$s['15']=7;
		$s['16']=7;
		$s['17']=7;
		$s['18']=7;
		$s['19']=7;
		$s['20']=7;				
		$s['21']=7;				
		$s['22']=7;				
		$s['23']=7;				
		$s['24']=7;				
		$s['25']=7;				
		$s['26']=7;																
		$s['27']=7;																		
		$s['28']=7;																				

		
	return $s[$v];	
		
		}
		
		
		
	function segmentos_s($v)
	{
		

		$s['-11']=1;
		$s['-12']=1;
		$s['-13']=1;
		$s['-14']=1;
		$s['-15']=1;
		$s['-16']=1;
		$s['-17']=1;
		$s['-18']=1;
		$s['-19']=1;
		$s['-20']=1;
		$s['-21']=1;
		$s['-22']=1;
		$s['-23']=1;
		$s['-24']=1;
		$s['-25']=1;
		$s['-26']=1;
		$s['-27']=1;
		$s['-28']=1;
	
		
			
		
		


		$s['-7']=2;
		$s['-8']=2;
		$s['-9']=2;
		$s['-10']=2;						
		
		
	
		$s['-4']=3;
		$s['-5']=3;
		$s['-6']=3;		
		
		
		$s['-1']=4;
		$s['-2']=4;
		$s['-3']=4;
		
		$s['0']=5;
		$s['1']=5;
		$s['2']=5;		
		
		$s['3']=6;
		$s['4']=6;
		$s['5']=6;
		$s['6']=6;
		$s['7']=6;
		

		$s['8']=7;
		$s['9']=7;
		$s['10']=7;
		$s['11']=7;
		$s['12']=7;
		$s['13']=7;
		$s['14']=7;
		$s['15']=7;
		$s['16']=7;
		$s['17']=7;
		$s['18']=7;
		$s['19']=7;
		$s['20']=7;				
		$s['21']=7;				
		$s['22']=7;				
		$s['23']=7;				
		$s['24']=7;				
		$s['25']=7;				
		$s['26']=7;																
		$s['27']=7;																		
		$s['28']=7;																				

		
	return $s[$v];	
		
		}		
		
		
		
		
		
		
		
		
				
	function segmentos_c($v)
	{
		$s['-6']=1;
		$s['-7']=1;
		$s['-8']=1;		
		$s['-9']=1;
		$s['-10']=1;
		$s['-11']=1;
		$s['-12']=1;
		$s['-13']=1;
		$s['-14']=1;
		$s['-15']=1;
		$s['-16']=1;
		$s['-17']=1;
		$s['-18']=1;
		$s['-19']=1;
		$s['-20']=1;
		$s['-21']=1;
		$s['-22']=1;
		$s['-23']=1;
		$s['-24']=1;
		$s['-25']=1;
		$s['-26']=1;
		$s['-27']=1;
		$s['-28']=1;
	
		
			
		
		


		$s['-3']=2;
		$s['-4']=2;
		$s['-5']=2;

		
		
	
		$s['-1']=3;
		$s['-2']=3;

		
		
		$s['0']=4;
		$s['1']=4;
		$s['2']=4;
		
		$s['3']=5;
		$s['4']=5;

		
		$s['5']=6;
		$s['6']=6;
		$s['7']=6;
		$s['8']=6;

		


		$s['9']=7;
		$s['10']=7;
		$s['11']=7;
		$s['12']=7;
		$s['13']=7;
		$s['14']=7;
		$s['15']=7;
		$s['16']=7;
		$s['17']=7;
		$s['18']=7;
		$s['19']=7;
		$s['20']=7;				
		$s['21']=7;				
		$s['22']=7;				
		$s['23']=7;				
		$s['24']=7;				
		$s['25']=7;				
		$s['26']=7;																
		$s['27']=7;																		
		$s['28']=7;																				

		
	return $s[$v];	
		
		}		
		
		
		
		
		
		
		
		
		
		
		
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

/*
1.		c,z,e,t
2.		e,z,c,t
3.		c,e,z,t
4.		c,e,t,z
5.		z,e,c,t
6.		t,c,e,z
7.		c,e,z,t



8. 		c,e,t,z
9. 		e,t,c,z
10 		z,c,t,e
11		e,t,z,c
12 		c,t,e,z
13		z,t,c,e
14		e,t,z,c

15		c,e,z,t
16		e,z,t,c
17		c,t,z,e
18		t,z,e,c
19		z,c,t,e
20		c,t,e,z
21		e,t,c,z

22		c,e,z,t
23		c,e,z,t
24		c,t,z,e
25		z,e,t,n
26		c,e,z,t
27		z,t,c,e
28		e,z,c,t

*/