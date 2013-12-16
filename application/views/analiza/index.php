<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>   <link href="<?PHP echo base_url(); ?>/html/css/style.css"rel="stylesheet" type="text/css"/>
        <link href="../../../html/css/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?PHP echo base_url(); ?>/html/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>/html/js/init.js"></script>
</head>

<body>

<div class="resultado">
<h1><?PHP echo $perfil;?></h1>
    <div class="row">
        <div class="label">
        Emociones
        </div>
        <div class="texto">
        <?PHP echo $data['e']?>
        </div>
    
    </div>


<div class="row">
    <div class="label">
    Meta
    </div>
    <div class="texto">
    <?PHP echo $data['m']?>
    </div>

</div>


<div class="row">
    <div class="label">
    Juzga a los demas por
    </div>
    <div class="texto">
    <?PHP echo $data['j']?>
    </div>

</div>


<div class="row">
    <div class="label">
Influye en los demas mediante:
    </div>
    <div class="texto">
    <?PHP echo $data['i']?>
    </div>

</div>


<div class="row">
    <div class="label">
    Su valor para la organizacion:
    </div>
    <div class="texto">
    <?PHP echo $data['s']?>
    </div>

</div>

<div class="row">
    <div class="label">
    Abusa de 
    </div>
    <div class="texto">
    <?PHP echo $data['a']?>
    </div>

</div>




<div class="row">
    <div class="label">
    Bajo presion
    </div>
    <div class="texto">
    <?PHP echo $data['b']?>
    </div>

</div>



<div class="row">
    <div class="label">
    Teme
    </div>
    <div class="texto">
    <?PHP echo $data['t']?>
    </div>

</div>



<div class="row">
    <div class="label">

    </div>
    <div class="texto">
    <?PHP echo $data['o1']?>
    </div>

</div>


<div class="row">
    <div class="label">

    </div>
    <div class="texto">
    <?PHP echo $data['o2']?>
    </div>

</div>



<div class="row">
    <div class="label">

    </div>
    <div class="texto">
    <?PHP echo $data['o3']?>
    </div>

</div>







</div>
</body>
</html>