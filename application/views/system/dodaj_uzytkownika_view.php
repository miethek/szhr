		<?php $this->load->view('admin/sidebar_view'); ?>
		<div id="push"></div>
		<div id="content-container" class="container-fluid">
			<div class="row-fluid">
				<div id="content" class="clearfix">
					<div id="breadcrumb-container" class="span12 visible-desktop">
						<div class="breadcrumb">
							<a href="<?php echo base_url().'admin'; ?>">Admin</a>
							<span class="divider">/</span>
							<a href="<?php echo base_url().'uzytkownicy'; ?>">Użytkownicy</a>
							<span class="divider">/</span>
							<a href="<?php echo base_url().'dodaj_uzytkownika'; ?>">Dodaj użytkownika</a>
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
													
															
														echo form_open(base_url().'dodaj_uzytkownika');
														echo '
														<div class="input input-prepend">';
							
														$data = array(
															'name'        => 'login',
															'value'       => $this->input->post('login'),									
															'class'		  => 'span10',			
															'placeholder'		  => 'Login *',	
															'title' => 'Wprowadź login użytkownika',															
															'id' => 'login',
															'type' => 'text',
															
														);
														echo form_input($data);
														echo '		
														</div>
														<div class="input input-prepend">';
							
														$data = array(
															'name'        => 'imie',
															'value'       => $this->input->post('imie'),									
															'class'		  => 'span10',		
															'placeholder'		  => 'Imię *',									
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
																	'value'       => $this->input->post('nazwisko'),									
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
															'value'       => $this->input->post('email'),									
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
															'name'        => 'save',
															'value'       => 'Zapisz',
															'class'		  => 'btn btn-success',		
														);
														echo form_submit($data);
														echo form_close();
														echo '		
														</div>';
														 
													
										echo '<div id="flashMessage" class="info">
												Po wypełnieniu formularza zostanie wysłana wiadomość na podany adres e-mail zawierająca tymczasowe hasło użytkownika.
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