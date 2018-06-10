	<!-- Page Content -->
	<div class="container">

		<h3 class="mt-3">Últimas Atualizações</h3>
		


			<div class="">
				<div class="card">
					<div class="card-header">
						Lista das útimas atulalizações
					</div>
					<div class="card-body">
						<table class="table table-sm table-striped ">
							<thead>
								<tr>
									<th>Origem</th>
									<th>UF</th>
									<th>Região</th>
									<th>Particularidades</th>
									<th>Atualização</th>

								</tr>
							</thead>
							
							<tbody>
								<?php foreach ($novidades as $n): ?>
								<tr>
									<td><small><?php echo $n['origem']; ?></small></td>
									<td><small><?php echo $n['uf']; ?></small></td>
									<td><small><?php echo $n['regiao']; ?></small></td>
									<td class="text-center">
										
										
											<?php 
												if (!empty($n['particularidades'])){

													echo '<a href="#" data-toggle="tooltip" data-placement="top" title="'. $n['particularidades'] .'"><i class="fa fa-comment" aria-hidden="true"></i></a>';

												}else{
													
													echo ""; 
												}   

											?>
												
										
									</td>
									<td>
										<small>
											<?php 
												$data = $n['alteracao']; 
												echo date('d/m/Y - H:i', strtotime($data)); 
											?>
										</small>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>

						</table>
						<div class="text-left" >
							<a href="<?php echo base_url('home/regras'); ?>"><i class="fa fa-file-text-o" aria-hidden="true"></i> Consultar Regras</a>
						</div>
					</div>
				</div>

			</div><!--Fecha conteudo -->
		</div><!--Fecha Row -->
	</div><!--Fecha container v_content -->

