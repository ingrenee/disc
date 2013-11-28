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
/*--------1--------*/		
$str='Entusiasta,Rápido(a),Lógico(a),Apacible
';
$num='c,z,e,t';
$t[]=$this->combina($str,$num);

/*--------2--------*/
$str='Cauteloso(a),Decidido(a),Receptivo(a),Bondadoso(a)
';
$num='e,z,c,t';

$t[]=$this->combina($str,$num);

/*--------3--------*/
$str="Amigable, 
Preciso(a),Franco(a),Tranquilo(a)
";
$num='c,e,z,t';

$t[]=$this->combina($str,$num);


/*--------4--------*/
$str="Elocuente, 
Controlado(a),Tolerante,Decisivo(a)";
$num='c,e,t,z';

$t[]=$this->combina($str,$num);



/*--------5--------*/
$str="Atrevido(a),Concienzudo(a),Comunicativo(a),Moderado(a)
";
$num='z,e,c,t';

$t[]=$this->combina($str,$num);



/*--------6--------*/
$str="Ameno(a),Ingenioso(a),Investigador(a),Acepta Riesgos
";
$num='t,c,e,z';

$t[]=$this->combina($str,$num);


/*--------7--------*/
$str="Expresivo(a),Cuidadoso(a),Dominante,Sensible
";
$num='c,e,z,t';

$t[]=$this->combina($str,$num);



/*--------8--------*/
$str="Extrovertido(a),Precavido(a),Constante,Impaciente
";
$num='c,e,t,z';

$t[]=$this->combina($str,$num);




/*--------9--------*/
$str="Discreto(a),Complaciente,Encantador(a),Insistente
";
$num='e,t,c,z';

$t[]=$this->combina($str,$num);



/*--------10--------*/
$str="Valeroso(a),Anima a los demás,Pacifico(a),Perfeccionista
";
$num='z,c,t,e';

$t[]=$this->combina($str,$num);


/*--------11--------*/
$str="Reservado(a),Atento(a),Osado(a),Alegre
";
$num='e,t,z,c';

$t[]=$this->combina($str,$num);


/*--------12--------*/
$str="Estimulante,Gentil,Perceptivo(a),Independiente
";
$num='c,t,e,z';

$t[]=$this->combina($str,$num);



/*--------13--------*/
$str="Competitivo(a),Considerado(a),Alegre,Sagaz
";
$num='z,t,c,e';

$t[]=$this->combina($str,$num);


/*--------14--------*/
$str="Meticuloso(a),Obediente ,Ideas Firmes,Alentador(a)
";
$num='e,t,z,c';

$t[]=$this->combina($str,$num);


/*--------15--------*/
$str="Popular,Reflexivo(a),Tenaz,Calmado(a)
";
$num='c,e,z,t';

$t[]=$this->combina($str,$num);




/*--------16--------*/
$str="Analítico(a),Audaz,Leal,Promotor(a)
";
$num='e,z,t,c';

$t[]=$this->combina($str,$num);



/*--------17--------*/
$str="Sociable,Paciente,Autosuficiente,Certero(a)";
$num='c,t,z,e';

$t[]=$this->combina($str,$num);



/*--------18--------*/
$str="Adaptable,Resuelto(a),Prevenido(a),Vivaz";
$num='t,z,e,c';

$t[]=$this->combina($str,$num);




/*--------19--------*/
$str="Agresivo(a),Impetuoso(a),Amistoso(a),Discerniente";
$num='z,c,t,e';

$t[]=$this->combina($str,$num);



/*--------20--------*/
$str="De trato Fácil,Compasivo(a),Cauto(a),Habla Directo";
$num='c,t,e,z';

$t[]=$this->combina($str,$num);




/*--------21--------*/
$str="Evaluador(a),Generoso(a),Animado(a),Persistente";
$num='e,t,c,z';

$t[]=$this->combina($str,$num);



/*--------22--------*/
$str="Impulsivo(a),Cuida los Detalles,Enérgico(a),Tranquilo(a)";
$num='c,e,z,t';

$t[]=$this->combina($str,$num);


/*--------23--------*/
$str="Sociable,Sistemático(a),Vigoroso(a),Tolerante";
$num='c,e,z,t';

$t[]=$this->combina($str,$num);

/*--------24--------*/
$str="Cautivador(a),Contento(a),Exigente,Apegado(a) a las normas";
$num='c,t,z,e';

$t[]=$this->combina($str,$num);


/*--------25--------*/
$str="Le agrada discutir,Metódico(a),Comedido(a),Desenvuelto(a)";
$num='z,e,t,n';

$t[]=$this->combina($str,$num);


/*--------26--------*/
$str="Jovial,Preciso(a),Directo(a),Ecuánime";
$num='c,e,z,t';

$t[]=$this->combina($str,$num);


/*--------27--------*/
$str="Inquieto(a),Amable,Elocuente,Cuidadoso(a)";
$num='z,t,c,e';

$t[]=$this->combina($str,$num);


/*--------28--------*/
$str="Prudente,Pionero(a),Espontáneo(a),Colaborador";
$num='e,z,c,t';

$t[]=$this->combina($str,$num);







$data['t']=$t;

		
		
		$this->load->view('home/index',$data);
	}
	
	function  combina($str,$num)
	{
		$t=explode(',',$str);
		$n=explode(',',$num);
		//print_r($t);
		$x[$t[0]]=$n[0];
		$x[$t[1]]=$n[1];
		$x[$t[2]]=$n[2];
		$x[$t[3]]=$n[3];
		
		 return  $x;}
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