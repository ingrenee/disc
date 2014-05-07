<div class="row">
						<div class="col-lg-12">
								<h1 class="page-header">Listar Prueva DISC</h1>
						</div>
						<!-- /.col-lg-12 --> 
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
										<th>empresa</th>
										<th> Info </th>
										<th>Direccion/url</th>
										<th></th>
																				<th></th>
										</thead>
										
										
										<?PHP

									foreach ($root->result_array() as $k => $v):
										?>
										
										<tr>
										<td><?PHP echo $v['titulo'];?></td>
										<td><?PHP echo $v['empresa'];?></td>
										<td><span class="date creado"><?PHP echo $v['creado'];?></span>
										<span class="date modificado"><?PHP echo $v['modificado'];?></span></td>
										<td><span class="url">
										<input value="<?PHP echo site_url('apps/disc/psico-'.($v['ID']))?>" type="text"></span></td>
										<td><a href="<?PHP echo ci_site_url('disc/editar/'.$v['ID']);?>">editar</a></td>
										<td><a href="<?PHP echo ci_site_url('disc/resultados/'.$v['ID']);?>">Ver resultados</a></td>
										
										</tr>
										<?PHP endforeach;?>
								</table>
						</div>
				</div>
		</div>
</div>
