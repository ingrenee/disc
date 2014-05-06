<div class="row">
						<div class="col-lg-12">
								<h1 class="page-header">Editar Prueva DISC</h1>
						</div>
						<!-- /.col-lg-12 --> 
				</div>

<div class="row">
		<div class="col-lg-12">
				<div class="panel panel-default">
						<div class="panel-heading"> 1. Editar Informacion general </div>
						<div class="panel-body">
								<div class="row">
										<div class="col-lg-6">
												<form method="post">
														<div class="form-group">
																<label> *Titulo: </label>
																<input name="titulo" class="form-control" id="titulo" placeholder="<?PHP echo date('Y-m-d H:m');?>" value="<?PHP echo $root['titulo']?>">
																<?php echo form_error('titulo', '<div class="alert alert-danger">', '</div>'); ?>
														</div>
														<div class="form-group">
																<label> *Nombre de empresa </label>
																<input name="empresa" value="<?PHP echo $root['empresa']?>" class="form-control" id="empresa" value="" >
																<?php echo form_error('empresa', '<div class="alert alert-danger">', '</div>'); ?>
																<p>Esta informacion se mortrara en el formulario del  candidato</p>
														</div>
														
														<div class="form-group">
																<label> *Descripcion de empresa </label>
																<textarea name="empresa_descripcion" class="form-control" id="empresa_descripcion"><?PHP echo $root['empresa_descripcion']?></textarea>
																<?php echo form_error('empresa_descripcion', '<div class="alert alert-danger">', '</div>'); ?>
														</div>
														
														
																<div class="form-group">
															
															<button type="submit" class="btn btn-primary">Actualizar</button>
														</div>
														
												</form>
										</div>
								</div>
						</div>
				</div>
		</div>
</div>
