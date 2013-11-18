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
							<a href="<?php echo base_url().'zwyciezcy'; ?>">Zwycięzcy</a>
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
												<th>Data zgłoszenia</th>
												<th>Wylosowany</th>
												<th>Data losowania</th>
												<th>Losujący</th>
												
												</tr>		
											</thead>
											<tbody>
												
												<?php
													if($query->result()){						  
														 foreach ($query->result() as $row ): 							  
														  
														  echo '<tr>
															<td>'.$row->id_zgloszenia.'</td>
															<td>'.$row->imie.' '.$row->nazwisko.'</td>
															<td>'.$row->email.'</td>
															<td>'.$row->slogan.'</td>
															<td>'.$row->date_create.'</td>
															<td>'; if($row->winner) echo 'tak'; echo '</td>
															<td>'.$row->data_losowania.'</td>
															<td>'.$row->kto_losowal.'</td>
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