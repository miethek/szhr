		<?php $this->load->view('admin/sidebar_view'); ?>
		<div id="push"></div>
		<div id="content-container" class="container-fluid">
			<div class="row-fluid">
				<div id="content" class="clearfix">
					<div id="breadcrumb-container" class="span12 visible-desktop">
						<div class="breadcrumb">
							<a href="<?php echo base_url().'admin'; ?>">Admin</a>
							<span class="divider">/</span>
							<a href="<?php echo base_url().'admin/profil'; ?>">Ustawienia</a>
							<span class="divider">/</span>
							Zmiana hasła
						</div>
					</div>
					<div id="inner-content" class="span12">
						<div class="row-fluid">
							<div class="span12">
								<div class="row-fluid">
									<div class="span12">
										<div class="edit_form">
										<?php
											if (validation_errors()) echo '<div id="flashMessage" class="error">'.validation_errors().'</div>';
											if ($error) echo '<div id="flashMessage" class="success">'.$error.'</div>';
													
												if($query->result()){		
										
														$row = $query->row();	
															
														echo form_open(base_url().'ustawienia/usun_konto');
														echo '
														<div class="input input-prepend">';
							
														$data = array(
															'name'        => 'login',
															'value'       => $row->login,									
															'class'		  => 'span10',			
															'title' => 'Login (tylko do odczytu)',															
															'id' => 'login',
															'type' => 'text',
															'readonly' => 'readonly'
														);
														echo form_input($data);
														echo '		
														</div>
														<div class="input input-prepend"> ';
														$data = array(
																	'name'        => 'current_password',																	
																	'class'		  => 'span10',		
																	'placeholder' => 'Aktualne hasło *',
																	
																	'title' => 'Podaj aktualne hasło',
																	'id' => 'current_password',
																	'type' => 'password'
																);
																echo form_input($data);
															echo '
														</div>
													
														<div class="input">';
														
														$data = array(
															'name'        => 'submit',
															'value'       => 'Usuń',
															'class'		  => 'btn btn-success',		
														);
														echo form_submit($data);
														echo form_close();
														echo '		
														</div>';
														 
													}
										echo '<div id="flashMessage" class="error">
												<b>Uwaga!!!</b> po usunięciu konta zostaniesz wylogowany a konto zostanie zdeaktywowane.
											</div>';
										?>
										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>