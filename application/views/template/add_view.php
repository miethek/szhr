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
				if($query->result()){		
								
						$row = $query->row();
								

						if (validation_errors() || $error) echo '<div id="flashMessage" class="error">'.validation_errors().$error.'</div>';	
						echo '
						<h2>Wypełnij formularz</h2>';
														$data = array(
															'name'        => 'id_konkurs',
															'value'       => $row->id_konkurs,									
															'type' => 'hidden',															
														);
														echo form_input($data);
						
						if($row->imie == 'on'){
						echo '
						<div class="input input-prepend">';							
								$data = array(
									'name'        => 'imie',
									'value'       => $this->input->post('imie'),									
									'class'		  => 'span10',		
									'placeholder'		  => 'Imię *',									
									'title' => 'Podaj swoje imię',									
									'type' => 'text'
								);
								echo form_input($data);
						echo '			
						</div>';
						}
						
						if($row->nazwisko == 'on'){
						echo '
						<div class="input input-prepend">';							
								$data = array(
									'name'        => 'nazwisko',
									'value'       => $this->input->post('nazwisko'),									
									'class'		  => 'span10',		
									'placeholder'		  => 'Nazwisko *',									
									'title' => 'Podaj swoje nazwisko',
									'type' => 'text'
								);
								echo form_input($data);
						echo '
						</div>';
						}
						if($row->plec == 'on'){
						echo '
						<div class="input input-prepend">';
							
								$options = array(''=>' - ', 'K' =>'Kobieta','M' =>'Mężczyzna');
								echo form_dropdown('plec', $options, $this->input->post('plec'),'title = "Podaj swoją płeć"');
						echo '
						</div>';
						}
						
						if($row->adres == 'on'){
						echo '
						<div class="input input-prepend">';
								$data = array(
									'name'        => 'adres',
									'value'       => $this->input->post('adres'),									
									'class'		  => 'span10',		
									'placeholder'		  => 'Adres *',									
									'title' => 'Podaj adres do korespondencji (ulica, nr domu/mieszkania)',
									'type' => 'text'
								);
								echo form_input($data);
						echo '
						</div>';
						}
						
						if($row->kod_pocztowy == 'on'){
						echo '
						<div class="input input-prepend">';
								$data = array(
									'name'        => 'kod1',
									'value'       => $this->input->post('kod1'),
									'class'		  => 'span10 kod1',	
									'maxlength'	=> 2,									
									'placeholder'		  => '00',
									'title' => 'Podaj swój kod pocztowy',
									'id' => 'kod1',
								);
								echo form_input($data);
								$data = array(
									'name'        => 'kod2',
									'value'       => $this->input->post('kod2'),
									'maxlength'	=> 3,
									'class'		  => 'span10 kod2',	
									
									'placeholder'		  => '000',
									'title' => 'Podaj swój kod pocztowy',
									'id' => 'kod1',
								);
								echo form_input($data);
						echo '
						</div>';
						}
						
						if($row->miasto == 'on'){
						echo '
						<div class="input input-prepend">';

								$data = array(
									'name'        => 'miasto',
									'value'       => $this->input->post('miasto'),									
									'class'		  => 'span10',		
									'placeholder'		  => 'Miasto *',
									'title' => 'Podaj swoje miasto',
									'type' => 'text'
								);
								echo form_input($data);
						echo '
						</div>';
						}
						
						if($row->email == 'on'){
						echo '						
						<div class="input input-prepend">';
							
								$data = array(
									'name'        => 'email',
									'value'       => $this->input->post('email'),
									'data-original-title' => '',
									'class'		  => 'span10',		
									'placeholder'		  => 'E-mail *',																		
									'title' => 'Podaj swój adres mailowy',
									'type' => 'text'
								);
								echo form_input($data);
						echo '
						</div>';
						}
						
						if($row->telefon == 'on'){
						echo '
						<div class="input input-prepend">';
							
								$data = array(
									'name'        => 'telefon',
									'value'       => $this->input->post('telefon'),
									'data-original-title' => '',
									'class'		  => 'span10',		
									'placeholder'		  => 'Telefon *',
									
							
									'title' => 'Podaj swój numer telefonu',
							
									'type' => 'text'
								);
								echo form_input($data);
						echo '
						</div>';
						}
						
						if($row->kod == 'on'){
						echo '
						<div class="input input-prepend">';
							
								$data = array(
									'name'        => 'kod',
									'value'       => $this->input->post('kod'),
									'data-original-title' => '',
									'class'		  => 'span10',		
									'placeholder'		  => 'Kod z opakowania *',
							
									'title' => 'Przepisz kod z opakowania produktu',
							
									'type' => 'text'
								);
								echo form_input($data);
						echo '
						</div>';
						}
						
						if($row->paragon == 'on'){
						echo '
						<div class="input input-prepend">';
							
								$data = array(
									'name'        => 'paragon',
									'value'       => $this->input->post('paragon'),
									'data-original-title' => '',
									'class'		  => 'span10 date',		
									'placeholder'		  => 'Data wystawienia paragonu *',
									
									'data-trigger' => 'focus',
									'title' => 'Podaj datę z paragonu',
									'id' => 'paragon',
									'type' => 'text'
								);
								echo form_input($data);
						echo '
						</div>';
						}
						
						if($row->slogan == 'on'){
						echo '
						<div class="input input-prepend">';
							
								$data = array(
									'name'        => 'slogan',
									'value'       => $this->input->post('slogan'),
									'data-original-title' => '',
									'class'		  => 'span10',		
									'placeholder'		  => 'Slogan reklamowy *',
									'title' => 'Wprowadź wymyślony przez Ciebie slogan reklamowy',
									'type' => 'text'
								);
								echo form_input($data);
						echo '
						</div>';
						}
						
						if($row->regulamin == 'on'){
						echo '
						<div class="input input-prepend">';
							
								$data = array(
									'name'        => 'regulamin',
									'value'       => 1,
									'data-original-title' => '',
									'class'		  => 'span10',											
									

									'type' => 'checkbox',
									'' =>set_checkbox('regulamin', '1')
								);
								echo form_input($data);								
						echo '
						<div class="check_content">Akceptuję <span id="regulamin_content"> regulamin </span></div>
						</div>';
						}
						
						if($row->checkbox1 == 'on'){
						echo '
						<div class="input input-prepend">';
							
								$data = array(
									'name'        => 'checkbox1',
									'value'       => 1,
									'data-original-title' => '',
									'class'		  => 'span10',											

									'type' => 'checkbox',
									'' =>set_checkbox('checkbox1', '1')
								);
								echo form_input($data);								
							echo '
							<div class="check_content">
								'.$row->checkbox1_tresc.'
							</div>
						</div>';
						}
						
						if($row->checkbox2 == 'on'){
						echo '
						<div class="input input-prepend">';
							
								$data = array(
									'name'        => 'checkbox2',
									'value'       => 1,
									'data-original-title' => '',
									'class'		  => 'span10',											
									'type' => 'checkbox',
									'' =>set_checkbox('checkbox2', '1')
								);
								echo form_input($data);								
							echo '
							<div class="check_content">
								'.$row->checkbox2_tresc.'
							</div>
						</div>';
						}
						
						if($row->checkbox3 == 'on'){
						echo '
						<div class="input input-prepend">';
							
								$data = array(
									'name'        => 'checkbox3',
									'value'       => 1,							
									'class'		  => 'span10',											
									'type' => 'checkbox',
									'' =>set_checkbox('checkbox3', '1')
								);
								echo form_input($data);								
							echo '
							<div class="check_content">
								'.$row->checkbox3_tresc.'
							</div>
						</div>';
						}
						
						if($row->captcha == 'on'){
						echo $recaptcha_html;
						}
						
						echo '
						<div class="input required">
							* Pola wymagane
						</div>
						
					</div>
					<div class="form-actions">
						<div class="input submit">	';
							
								$data = array(
									'name'        => 'submit',
									'value'       => 'Wyślij',
									'class'		  => 'btn btn-success',		
								);
								echo form_submit($data);
								echo form_close();
							echo '
						</div>
					</div>';
					
					if($row->regulamin == 'on'){
					echo '
					<div id="dialog" title="Regulamin konkursu">
						<p>'.$row->regulamin_tresc.'</p>
					</div>
					<script type="text/javascript">
						$("#dialog").dialog({ 
							autoOpen: false,
							width: 500,
							modal: true,
							buttons: {
								Ok: function() {
									$( this ).dialog( "close" );
								}
							}
						});
							
						$("#regulamin_content").click(function() {
							$("#dialog").dialog("open");
						});		
					</script>
					';
					}
				} else echo '<h2>Brak aktywnego konkursu<br/><br/></h2></div>';
					?>
				</div>
			</div>
		</div>
	</div>