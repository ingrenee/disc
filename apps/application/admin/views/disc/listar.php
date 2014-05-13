<div class="row">
						<div class="col-lg-12">
								<h1 class="page-header">Test's registrados</h1>
						</div>
						<!-- /.col-lg-12 --> 
                        
                        <div class="col-lg-12" style="margin-bottom:20px;">
                        <a href="<?PHP echo ci_site_url('disc/agregar/');?>" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-plus"></span> &nbsp; Agregar test</a>
                        </div>
                        
                        
                        
				</div>

<div class="row">
		<div class="col-lg-12">
				<div class="panel panel-default">
						<div class="panel-heading"> Listado </div>
						<div class="panel-body">
						
					<?PHP if($this->uri->segment(3)==2):?>
					<div class="alert alert-success" id=""> Se agrego una nueva operacion </div>
					<?PHP endif;?>
					<?PHP if($this->uri->segment(3)==1):?>
					<div class="alert alert-success"> Se actualizo correctamente </div>
					<?PHP endif;?>
<table class="table table-striped table-bordered table-hover dataTable no-footer">
										<thead>
										<th>Operacion</th>
										<th>Empresa</th>
										<th> Info </th>
										<th>Direccion/url<br />
<span class="url-info">Copia esta direcci&oacute;n y env&iacute;ala a tus candidatos</span></th>
										<th></th>
																				<th></th>
										</thead>
										
										
										<?PHP

									foreach ($root->result_array() as $k => $v):
										?>
										
										<tr>
										<td><?PHP echo $k+1; ?>. <?PHP echo $v['titulo'];?></td>
										<td><?PHP echo $v['empresa'];?></td>
										<td><span class="date creado"><strong>Creado: </strong>
									    <?PHP 
										
										
										$tmp=explode(' ',$v['creado']);
										echo $tmp[0];
										?></span>
										<span class="date modificado"><strong>Modificado:</strong>
<?PHP $tmp=explode(' ',$v['modificado']);
										 echo $tmp[0];
										
										?></span></td>
										<td><span class="url">
										<input class="url-input" value="<?PHP echo site_url('apps/psico-'.($v['ID']))?>" type="text"></span></td>
										<td><a class="btn btn-default btn-sm" href="<?PHP echo ci_site_url('disc/editar/'.$v['ID']);?>"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; editar</a></td>
										<td><a  class="btn btn-default btn-sm"href="<?PHP echo ci_site_url('disc/resultados/'.$v['ID']);?>"><span class="glyphicon glyphicon-user"></span> &nbsp; Ver candidatos</a></td>
										
										</tr>
										<?PHP endforeach;?>
								</table>
						</div>
				</div>
		</div>
</div>
