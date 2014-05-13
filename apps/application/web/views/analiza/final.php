<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<link href="<?PHP echo base_url('');?>/html/foundation/css/foundation.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="row">
<div class="large-12 columns">
<div class="ficha_final">
<h1>Tu formulario ha sido enviado.</h1>
<table>
<tr><td>Codigo de formulario:</td><td><?PHP echo $form_ID; ?></td></tr>
<tr><td>Nombres:</td><td><?PHP echo $usuario['nombres'];?>,<?PHP echo $usuario['paterno'];?> <?PHP echo $usuario['materno'];?></td></tr>
<tr><td>Email:</td><td><?PHP echo $usuario['email'];?></td></tr>
<tr><td>Registrado a las:</td><td><?PHP echo $info['creado'];?></td></tr>
</table>
</div>
</div>
</div>
</body>
</html>
