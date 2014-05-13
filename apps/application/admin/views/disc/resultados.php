<div class="row">
						<div class="col-lg-12">
								<h1 class="page-header"><a href="<?PHP echo ci_site_url('disc/listar/');?>">DISC</a> / Resultados</h1>
						</div>
                        <div class="col-lg-12" style="margin-bottom:20px;">
                        <a href="<?PHP echo ci_site_url('disc/listar/');?>" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-list-alt"></span> &nbsp; Listar test's</a>
                        </div>
                        <div class="col-lg-12">
                        <table width="468" class="table table-hover dataTable no-footer  table-bordered">
                       <tr> <th width="74" align="right">Test:</th><td width="382"><?PHP echo $ope['titulo'];?></td></tr>
                       <tr> <th align="right">Cod. Test:</th><td><?PHP echo $ope['ID'];?></td></tr>
                       <tr> <th align="right">Empresa:</th><td><?PHP echo $ope['empresa'];?></td></tr>
                       
                        </table>
                        </div>
						<!-- /.col-lg-12 --> 
				</div>

<div class="row">
		<div class="col-lg-12">
				<div class="panel panel-default">
						<div class="panel-heading"> Lista de candidatos que han enviado el formulario. </div>
						<div class="panel-body">
						
				
<table class="table table-striped table-bordered table-hover dataTable no-footer">
										<thead>
										<th>Candidato</th>
										<th>Email</th>
                                        <th>Perfil</th>
										
										
										<th></th>
																			
										</thead>
										
										
										<?PHP

									foreach ($root->result_array() as $k => $v):
										?>
										
										<tr>
										<td>
										
										
										<?PHP echo $v['nombres'];?>, <?PHP echo $v['paterno'];?> <?PHP echo $v['materno'];?> <span class="celular">(<?PHP echo $v['telefono'];?>/<?PHP echo $v['celular'];?>)</span>
                                        <div class="creado"><?PHP echo $v['creado'];?></div>
                                        </td>
                                        <td><?PHP echo $v['email'];?></td>
										<td><?PHP echo $v['perfil_disc'];?></td>
										
										<td>
                                        <div class="" style="display:none;">
                                        <div class="detalles-resumen" id="detalles_<?PHP echo $v['ID'];?>">
                                        <div class="content">
										<?PHP echo ($v['resumen']);?>
                                        </div>
                                        </div>
                                        </div>
                                        <a class="btn btn-default btn-sm resumen" href="#detalles_<?PHP echo $v['ID'];?>"><span class="glyphicon glyphicon-eye-open"></span>  &nbsp;Resumen</a></td>
					
										
										</tr>
										<?PHP endforeach;?>
								</table>
						</div>
				</div>
		</div>
</div>
