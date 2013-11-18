		<?php $this->load->view('admin/sidebar_view'); ?>
		<div id="push"></div>
		<div id="content-container" class="container-fluid">
			<div class="row-fluid">
				<div id="content" class="clearfix">
					<div id="breadcrumb-container" class="span12 visible-desktop">
						<div class="breadcrumb">
							<a href="<?php echo base_url().'admin'; ?>">Admin</a>
							<span class="divider">/</span>
							<a href="<?php echo base_url().'admin/uzytkownicy'; ?>">Użytkownicy</a>
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
												<th>Imię i Nazwisko</th>
												<th>E-mail</th>												
												<th>Ostatnie logowanie</th>
												<th>Aktywny</th>
												<th>Akcje</th>
												
												</tr>		
											</thead>
											<tbody>
												
												<?php
													if($query->result()){						  
														 foreach ($query->result() as $row ): 							  
														  
														  echo '<tr>
															<td>'.$row->id_user.'</td>
															<td>'.$row->login.'</td>
															<td>'.$row->imie.' '.$row->nazwisko.'</td>
															<td>'.$row->email.'</td>
															<td>'.$row->date_lastlogin.'</td>
															
															<td><div class="make-switch switch-mini" data-on="success" data-off="default" data-on-label="I" data-off-label="O">
																<input type="checkbox"'; if($row->is_active == 1) echo 'checked ';
																echo '>
															</div></td>
															
															
															<td>'.anchor('admin/edytuj_uzytkownika/'.$row->id_user,'edytuj').' / '.anchor('admin/zmien_haslo_uzytkownika/'.$row->id_user,'zmień hasło').'</td>
															</tr>';
							
							
														 endforeach;
													} else {
													  echo '<tr>
															<td colspan=6>Nie znaleziono żadnych zgłoszeń</td>
														</tr>';
													}
													
													echo '															<td><div class="make-switch switch-mini" data-on="success" data-off="default" data-on-label="I" data-off-label="O">
																<input type="checkbox"'; if(1 == 1) echo 'checked ';
																echo '>
															</div></td>';
															
															
												?>
												
												
													

												    
												                
<!--                 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
                <script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-switch.js"></script>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12">
								<div class="pagination">
	
								</div>
							</div>
						</div>
					</div>
				</div>
				&nbsp;
			</div>
		</div>
	</div>