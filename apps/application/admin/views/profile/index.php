<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Perfil</h1>
  </div>
</div>
<div class="col-lg-12">
<div class="panel panel-default">
  <div class="panel-heading"> Actualizar informacion </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-6">
        <form method="post">
          <div class="form-group">
            <label> Nombres </label>
            <input name="nombres" class="form-control" id="nombres"  value="<?PHP echo $current_user->first_name;?>">
            <?php echo form_error('nombres', '<div class="alert alert-danger">', '</div>'); ?> </div>
            
            
            
            <div class="form-group">
            <button type="submit"> Actualizar </button>
            </div>
            
        </form>
      </div>
    </div>
  </div>
</div>
