<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title> Test DISC </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Documento sin título</title>
        <link href="<?PHP echo base_url(); ?>/html/css/style.css"rel="stylesheet" type="text/css"/>
        <link href="../../../html/css/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?PHP echo base_url(); ?>/html/js/jquery-1.10.2.min.js"></script>
        <script src="<?PHP echo base_url('');?>/html/js/jquery.validate.pack.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>/html/js/init.js"></script>
        <script>

        </script>
    </head>

    <body>

        <div class="page form">
		<div class="main">
       
        
        <div class=" info_user item-f class-0">
         <div class="fila">
         <h1 class="title">Test DISC</h1>
         </div>
        <div class="fila">Candidato: <?PHP echo $usuario['nombres'];?>, <?PHP echo $usuario['paterno'];?>  <?PHP echo $usuario['materno'];?></div>
        
        <div class="fila">Email: <?PHP echo $usuario['email'];?></div>
        
        <div class="fila">
        <div class="pagination">
        <?PHP foreach ($t as $k => $v):
                    ?>
                    <a href="#item-<?PHP echo $k;?>" class="pag-item-<?PHP echo $k;?>"><?PHP echo $k+1;?></a> 
                    <?PHP endforeach;?>
        </div>
        </div>
        
        
        </div>
        
        </div>
        
		<div class="info"  id="info">Info</div>
        
        <div class="instrucciones">
        <p><strong>Instrucciones:</strong> En cada uno de los 28 grupos de palabras, escoja la palabra que más lo(a) represente y márquela en la columna MAS  y escoja una palabra que menos lo(a) represente y márquela en la columna MENOS.</p>
        </div>
        
        
<form method="post" action="<?PHP echo site_url('analiza/index');?>" id="test-disc" >
            <div class="main">
            
       
            
         
                <?PHP foreach ($t as $k => $v):
                    ?>
                    <div id="item-<?PHP echo $k;?>" class="item class-<?PHP echo $k % 2; ?>">
                    <span class="index-contador"><?PHP echo $k+1;?></span>
                    
                    
                      <ul class="block">
                            
                            <li>
                                <span class="index">&nbsp;</span>
                                <label>M&aacute;s</label><label>Menos</label>
                            </li>
                            <?PHP foreach ($v as $kk => $vv):
                                ?>
                                <li>
                                    <span>
                                        <?PHP echo $kk; ?>
                                    </span>
                                    <label>
                                        <input type="radio" id="mas-<?PHP echo $k+1;?>-<?PHP echo $vv;?>" class="radio <?PHP echo $vv . '1'; ?> mas<?PHP echo $k ?> mas<?PHP echo $k . $vv ?>" data-group="menos<?PHP echo $k ?>" data-c="menos<?PHP echo $k . $vv ?>" name="kmas[<?PHP echo $k ?>]" value="1">
                                    </label><label>
                                        <input type="radio" id="menos-<?PHP echo $k+1;?>-<?PHP echo $vv;?>"  class="radio <?PHP echo $vv . '2'; ?> menos<?PHP echo $k ?> menos<?PHP echo $k . $vv ?>" data-group="mas<?PHP echo $k ?>" data-c="mas<?PHP echo $k . $vv ?>" name="kmenos[<?PHP echo $k ?>]" value="2">
                                    </label>
                                </li>
                            <?PHP endforeach; ?>
                       </ul>
                    </div>
                <?PHP endforeach; ?>
            </div>
            <div class="hidden">
			<input type="text" name="d1" value="" id="d1">
  			<input type="text" name="d2" value="" id="d2">
            
            <input type="text" name="i1" value="" id="i1">
  			<input type="text" name="i2" value="" id="i2">
            
            <input type="text" name="s1" value="" id="s1">
  			<input type="text" name="s2" value="" id="s2">
            
            <input type="text" name="c1" value="" id="c1">
  			<input type="text" name="c2" value="" id="c2"> 
			
			     <input type="text" name="neg_n" value="" id="neg_n">
  			<input type="text" name="pos_n" value="" id="pos_n">            
            
            </div>
			<p>
			  <input name="Botón" type="button" onclick="enviar()" class="boton" value="Enviar test">
    </p>
			<p>&nbsp;</p>
</form>
			
        </div>
    </body>
</html>