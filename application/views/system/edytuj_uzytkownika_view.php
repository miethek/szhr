		<?php $this->load->view('admin/sidebar_view'); ?>
		<div id="push"></div>
		<div id="content-container" class="container-fluid">
			<div class="row-fluid">
				<div id="content" class="clearfix">
					<div id="breadcrumb-container" class="span12 visible-desktop">
						<div class="breadcrumb">
							<a href="<?php echo base_url().'admin'; ?>">Admin</a>
							<span class="divider">/</span>
							<?php 
								if($current == 'profil'){
									echo 'Ustawienia';
								} else
								echo anchor(base_url().'uzytkownicy','Użytkownicy');
							?>
							<span class="divider">/</span>
							<?php 
								if($current == 'profil'){
									echo anchor(base_url().'ustawienia/profil','Profil');
								} else echo 'Edytuj użytkownika';
								
							?>
							
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
														if($current == 'profil') echo form_open(base_url().'ustawienia/profil');
														else echo form_open(base_url().'edytuj_uzytkownika/'.$row->id_user);
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
														<div class="input input-prepend">';
							
														$data = array(
															'name'        => 'imie',
															'value'       => $row->imie,									
															'class'		  => 'span10',		
															'placeholder' => 'Imię *',									
															'title' => 'Podaj imię',
															'id' => 'imie',
															'type' => 'text'
														);
														echo form_input($data);
														echo '		
														</div>
														<div class="input input-prepend"> ';
							
																$data = array(
																	'name'        => 'nazwisko',
																	'value'       => $row->nazwisko,									
																	'class'		  => 'span10',		
																	'placeholder'		  => 'Nazwisko *',
																	
																	'title' => 'Podaj nazwisko',
																	'id' => 'nazwisko',
																	'type' => 'text'
																);
																echo form_input($data);
															echo '
														</div>
														<div class="input input-prepend">';
							
														$data = array(
															'name'        => 'email',
															'value'       => $row->email,									
															'class'		  => 'span10',		
															'placeholder'		  => 'E-mail *',									
															'title' => 'Podaj adres e-mail',
															'id' => 'imie',
															'type' => 'text'
														);
														echo form_input($data);
														echo '		
														</div>
														<div class="input">';
														
														$data = array(
															'name'        => 'submit',
															'value'       => 'Zapisz',
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
				</div>
			</div>
		</div>
	</div>