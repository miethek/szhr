		<?php $this->load->view('admin/sidebar_view'); ?>
		<div id="push"></div>
		<div id="content-container" class="container-fluid">
			<div class="row-fluid">
				<div id="content" class="clearfix">
					<div id="breadcrumb-container" class="span12 visible-desktop">
						<div class="breadcrumb">
							<a href="<?php echo base_url().'admin'; ?>">Admin</a>
							<span class="divider">/</span>
							<a href="<?php echo base_url().'raport'; ?>">Raport</a>
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
												
												<th>Data</th>
												<th>Zgłoszenia</th>
												<th>Wylosowane</th>												
												<th>Kobiety</th>
												<th>Mężczyźni</th>												
												
												</tr>		
											</thead>
											<tbody>
												
												<?php
													if($wszystkie->result()){						  
														
														$wszystkie = $wszystkie->row();
														$wylosowane = $wylosowane->row();														
														$men = $men->row();	
														$women = $women->row();	
														
														  
														  echo '<tr>';
															if($current == 'raport') echo '<td>wszystkie</td>';
															if($current == 'raport_dzis') echo '<td>dziś ('.date('Y-m-d').')</td>';
															if($current == 'raport_week') echo '<td>ostatni tydzień (od '.date('Y-m-d',strtotime("-7 day")).')</td>';
															if($current == 'raport_miesiac') echo '<td>ostatni miesiąc (od '.date('Y-m-d',strtotime("-1 month")).')</td>';
															if($current == 'raport_okres'){ 
																
																if($this->input->post('submit'))
																	echo '<td>od '.$this->input->post('date_start').' do '.$this->input->post('date_end').'</td>';
																else echo '<td>wybierz datę</td>';
															
															};
															echo '
															<td>'; if($wszystkie) echo $wszystkie->amount; else echo '-'; echo '</td>
															<td>'; if($wylosowane) echo $wylosowane->amount; else echo '-'; echo '</td>
															<td>'; if($men) echo $men->amount; else echo '-'; echo '</td>
															<td>'; if($women) echo $women->amount; else echo '-'; echo '</td>
															

															</tr>';							
																					 
													} else {
													  echo '<tr>
															<td colspan=5>Nie znaleziono żadnych zgłoszeń</td>
														</tr>';
													}
													
													
													
													
													
													
												?>
											
												
												
													

												    
												
											</tbody>
										</table>
										
										<?php if($current == 'raport_okres'){ 
										
										if (validation_errors()) echo '<div id="flashMessage" class="error">'.validation_errors().'</div>';
										
										echo '
										<div class="input input-prepend">';
								
								echo form_open(base_url().'raport/okres');
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
							echo '							
						</div>';
						}
						
						?>
						
						
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				&nbsp;
			</div>
		</div>
	</div>