
<div class="row">
<div class="large-12 columns">
<h1>Prueba de selecci&oacute;n</h1>
</div>

</div>


<div class="row">

<div class="large-12 columns">
<h3>Empresa:</h3>
<h2>
<?PHP echo $root['empresa'];?>
</h2>
</div>

<div class="large-12 columns">
<p> <?PHP echo $root['empresa_descripcion'];?></p>
</div>

</div>

<div class="row">
<div class="large-12 columns">
<h2>1.  Datos generales.</h2>
<p>A continuacion ingrese los datos solicitados.</p>
</div>
</div>

<form method="post" action="">
  <div class="row">
    <div class="large-12 columns">
      <label>Nombre completo
       <input name="nombres" type="text" id="nombres" placeholder="" />
      </label>
      <?php echo form_error('nombres', '<div class="error">', '</div>'); ?>
    </div>
  </div>
  <div class="row">
    <div class="large-6 columns">
      <label>Apellido paterno:
        <input name="paterno" type="text" id="paterno" placeholder=" " />
              
      </label>
      
      <?php echo form_error('paterno', '<div class="error">', '</div>'); ?>
    </div>
    <div class="large-6 columns">
      <label>Apellido materno:
        <input name="materno" type="text" id="materno" placeholder=" " />
      </label>
            <?php echo form_error('materno', '<div class="error">', '</div>'); ?>
    </div>
    
  </div>
  <div class="row">
    <div class="large-6 columns">
     <label>DNI:
        <input name="dni" type="text" id="dni" placeholder=" " />
      </label>
      <?php echo form_error('dni', '<div class="error">', '</div>'); ?>
    </div>
  </div>
  <div class="row">
    <div class="large-6 columns">
      <label>Género</label>
      <input type="radio" name="genero" value="m" id="pokemonRed"><label for="pokemonRed">Masculino</label>
      <input type="radio" name="genero" value="f" id="pokemonBlue"><label for="pokemonBlue">Femenino</label>
    
    <?php echo form_error('genero', '<div class="error">', '</div>'); ?>
    </div>
    
  </div>
  
  
  <div class="row">
    <div class="large-6 columns">
      <label>Correo electronico:
        <input name="email" type="text" id="email" placeholder=" " />
      </label>
      
      <?php echo form_error('email', '<div class="error">', '</div>'); ?>
    </div>
  </div>
    <div class="row">
    <div class="large-6 columns">
      <label>Celular/Telefono:
        <input name="celular" type="text" id="celular" placeholder=" " />
      </label>
      
      <?php echo form_error('celular', '<div class="error">', '</div>'); ?>
    </div>
  </div>
  
  <div class="row">
  <div class="large-6 columns">
  <button type="submit">Continuar</button>
  
  
  </div>
  </div>
  <input name="id" type="hidden" id="id" value="<?PHP echo $id;?>">
</form>