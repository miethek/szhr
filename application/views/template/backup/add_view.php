		<div id="main" class="container-fluid">
			<div class="row-fluid">
				<div id="install" class="span12">
				
					<?php 
						$add_form = array(
							'id' => 'databaseForm',
							
						
						);						
						echo form_open(base_url(),$add_form);
					?>

				
					<div class="install">
					
						<?php 
						
// 						      echo $image;
						if (validation_errors() || $error) echo '<div id="flashMessage" class="error">'.validation_errors().$error.'</div>';	?>
						
						<h2>Wypełnij formularz</h2>
						
						<div class="input input-prepend">
							<?php
								$data = array(
									'name'        => 'imie',
									'value'       => $this->input->post('imie'),
									'data-original-title' => '',
									'class'		  => 'span10',		
									'placeholder'		  => 'Imię i nazwisko *',
									'data-placement' => 'right',
									'data-trigger' => 'focus',
									'data-title' => 'Podaj swoje imię i nazwisko',
									'id' => 'imie',
									'type' => 'text'
								);
								echo form_input($data);
							?>		
						</div>
						<div class="input input-prepend">
							<?php
								$data = array(
									'name'        => 'email',
									'value'       => $this->input->post('email'),
									'data-original-title' => '',
									'class'		  => 'span10',		
									'placeholder'		  => 'E-mail *',
									'data-placement' => 'right',
									'data-trigger' => 'focus',
									'data-title' => 'Podaj swój adres mailowy',
									'id' => 'email',
									'type' => 'text'
								);
								echo form_input($data);
							?>	
						</div>
						<div class="input input-prepend">
							<?php
								$data = array(
									'name'        => 'telefon',
									'value'       => $this->input->post('telefon'),
									'data-original-title' => '',
									'class'		  => 'span10',		
									'placeholder'		  => 'Telefon',
									'data-placement' => 'right',
									'data-trigger' => 'focus',
									'data-title' => 'Podaj swój numer telefonu',
									'id' => 'telefon',
									'type' => 'text'
								);
								echo form_input($data);
							?>							
						</div>
						<div class="input input-prepend">
							<?php
								$data = array(
									'name'        => 'kod',
									'value'       => $this->input->post('kod'),
									'data-original-title' => '',
									'class'		  => 'span10',		
									'placeholder'		  => 'Kod z opakowania *',
									'data-placement' => 'right',
									'data-trigger' => 'focus',
									'data-title' => 'Przepisz kod z opakowania produktu',
									'id' => 'kod',
									'type' => 'text'
								);
								echo form_input($data);
							?>							
						</div>
						<div class="input input-prepend">
							<?php
								$data = array(
									'name'        => 'slogan',
									'value'       => $this->input->post('slogan'),
									'data-original-title' => '',
									'class'		  => 'span10',		
									'placeholder'		  => 'Slogan reklamowy *',
									'data-placement' => 'right',
									'data-trigger' => 'focus',
									'data-title' => 'Wprowadź wymyślony przez Ciebie slogan reklamowy',
									'id' => 'slogan',
									'type' => 'text'
								);
								echo form_input($data);
							?>			
						</div>
						<?php echo $recaptcha_html; ?> 
						<div class="input required">
							* Pola wymagane
						</div>
						
					</div>
					<div class="form-actions">
						<div class="input submit">	
							<?php
								$data = array(
									'name'        => 'submit',
									'value'       => 'Wyślij',
									'class'		  => 'btn btn-success',		
								);
								echo form_submit($data);
								echo form_close()
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>