<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Documento sin título</title>
        <link href="<?PHP echo base_url(); ?>/html/css/style.css"rel="stylesheet" type="text/css"/>
        <link href="../../../html/css/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?PHP echo base_url(); ?>/html/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>/html/js/init.js"></script>
        <script>

        </script>
    </head>

    <body>

        <div class="page">

		<div class="info"  id="info">Info</div>
<form method="post" action="" id="test-disc" >
            <div class="main">
                <?PHP foreach ($t as $k => $v):
                    ?>
                    <div id="item-<?PHP echo $k;?>" class="item class-<?PHP echo $k % 2; ?>">
                        <ul class="block">
                            
                            <li>
                                <span>&nbsp;</span>
                                <label>Mas</label><label>Menos</label>
                            </li>
                            <?PHP foreach ($v as $kk => $vv):
                                ?>
                                <li>
                                    <span>
                                        <?PHP echo $kk; ?>
                                    </span>
                                    <label>
                                        <input type="radio" class="radio <?PHP echo $vv . '1'; ?> mas<?PHP echo $k ?> mas<?PHP echo $k . $vv ?>" data-group="menos<?PHP echo $k ?>" data-c="menos<?PHP echo $k . $vv ?>" name="kmas[<?PHP echo $k ?>]" value="1">
                                    </label><label>
                                        <input type="radio"  class="radio <?PHP echo $vv . '2'; ?> menos<?PHP echo $k ?> menos<?PHP echo $k . $vv ?>" data-group="mas<?PHP echo $k ?>" data-c="mas<?PHP echo $k . $vv ?>" name="kmenos[<?PHP echo $k ?>]" value="2">
                                    </label>
                                </li>
                            <?PHP endforeach; ?>
                       </ul>
                    </div>
                <?PHP endforeach; ?>
            </div>
			
			<input name="Botón" type="button" onclick="enviar()" value="Botón">
			</form>
			
        </div>
    </body>
</html>