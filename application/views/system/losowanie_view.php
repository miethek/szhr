		<?php $this->load->view('admin/sidebar_view'); ?>
		<div id="push"></div>
		<div id="content-container" class="container-fluid">
			<div class="row-fluid">
				<div id="content" class="clearfix">
					<div id="breadcrumb-container" class="span12 visible-desktop">
						<div class="breadcrumb">
							<a href="<?php echo base_url().'admin'; ?>">Admin</a>
							<span class="divider">/</span>
							<a href="<?php echo base_url().'zgloszenia'; ?>">Zgłoszenia</a>
							<span class="divider">/</span>
							<a href="<?php echo base_url().'losowanie'; ?>">Losowanie</a>
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
												<th>Imię i Nazwisko</th>
												<th>E-mail</th>
												<th>Slogan</th>
												<th>Data</th>
												<th>Wylosowany</th>
												
												</tr>		
											</thead>
											<tbody>
												
												<?php
													if($query->result()){						  
														 foreach ($query->result() as $row ): 							  
														  $los_id = $row->id_zgloszenia;
														  echo '<tr>
															<td>'.$row->id_zgloszenia.'</td>
															<td>'.$row->imie.' '.$row->nazwisko.'</td>
															<td>'.$row->email.'</td>
															<td>'.$row->slogan.'</td>
															<td>'.$row->date_create.'</td>
															<td>'; if($row->winner) echo 'tak'; echo '</td>
															</tr>';							
							
														 endforeach;
													} else {
													  echo '<tr>
															<td colspan=6>Nie znaleziono żadnych zgłoszeń</td>
														</tr>';
													}
												?>
												

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12">
								<div class="pagination_bar">
								<p> <?php
									if($query->result()){
								
									echo form_open('zglos_wygrana');
									$data = array(
									'name'        => 'los_id',
									'value'       => $los_id,									
									'type' => 	'hidden'
								);
								echo form_input($data);
								$data = array(
									'name'        => 'submit',
									'value'       => 'Zgłoś wygraną',
									'class'		  => 'btn btn-success',		
								);
								echo form_submit($data);
								echo form_close();
									}
								?>
								</p>
										
								</div>
							</div>
						</div>
					</div>
				</div>
				&nbsp;
			</div>
		</div>
	</div>