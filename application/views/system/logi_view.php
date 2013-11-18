		<?php $this->load->view('admin/sidebar_view'); ?>
		<div id="push"></div>
		<div id="content-container" class="container-fluid">
			<div class="row-fluid">
				<div id="content" class="clearfix">
					<div id="breadcrumb-container" class="span12 visible-desktop">
						<div class="breadcrumb">
							<a href="<?php echo base_url().'admin'; ?>">Admin</a>
							<span class="divider">/</span>
							<a href="<?php echo base_url().'logi'; ?>">Logi</a>
						</div>
					</div>
					<div id="inner-content" class="span12">
						<div class="row-fluid">
							<div class="span12">
								<div class="row-fluid">
									<div class="span12">
										
										<table class="table table-striped">
											<thead>
												<tr>
												
												<th>Id</th>
												<th>Login</th>
												<th>Data</th>												
												<th>Typ</th>
												<th>IP</th>
												<th>Przeglądarka</th>
												<th>Wersja</th>
												<th>System</th>
												<th>Treść</th>
												
												</tr>		
											</thead>
											<tbody>
												
												<?php
													if($query->result()){						  
														 foreach ($query->result() as $row ): 							  
														  
														  echo '<tr>
															<td>'.$row->id_log.'</td>
															<td>'.$row->login.'</td>
															<td>'.$row->date.'</td>
															<td>'.$row->type.'</td>
															<td>'.$row->ip.'</td>
															<td>'.$row->browser.'</td>
															<td>'.$row->version.'</td>
															<td>'.$row->platform.'</td>
															<td>'.$row->content.'</td>
															</tr>';
							
							
														 endforeach;
													} else {
													  echo '<tr>
															<td colspan=6>Nie znaleziono żadnych logów</td>
														</tr>';
													}
												?>
												
												
													

												    
												
											</tbody>
										</table>
										
										<?php 
										if($current == 'logi_okres'){ 
										
											if (validation_errors()) echo '<div id="flashMessage" class="error">'.validation_errors().'</div>';
											echo '
												<div class="input input-prepend">';
								
												echo form_open(base_url().'logi_okres');
													
													$data = array(
														'name'        => 'date_start',
														'value'       => set_value('date_start','0000-00-00'),
														'data-original-title' => '',
														'class'		  => 'span10 date',		
														'placeholder'		  => 'Data start *',									
														'data-trigger' => 'focus',
														'title' => 'Podaj datę start',
														'id' => 'date_start',
														'type' => 'text'
													);
								
												echo form_input($data);
												
												echo '<br/><br/>';
												
												$data = array(
													'name'        => 'date_end',
													'value'       => set_value('date_end',date('Y-m-d')),
													'data-original-title' => '',
													'class'		  => 'span10 date',		
													'placeholder'		  => 'Data stop *',								
													'data-trigger' => 'focus',
													'title' => 'Podaj datę end',
													'id' => 'date_end',
													'type' => 'text'
												);
								
												echo form_input($data);
												echo '<br/><br/>';
												
												$data = array(
													'name'        => 'submit',
													'value'       => 'Pokaż',
													'class'		  => 'btn btn-success',		
												);
									
												echo form_submit($data);
												echo form_close();
												echo '</div>';
										}
						
						?>
									</div>
								</div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12">
								<div class="pagination_bar">
									<?php echo $this->pagination->create_links(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				&nbsp;
			</div>
		</div>
	</div>