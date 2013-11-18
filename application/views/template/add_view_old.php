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
									'class'		  => 'span10',		
									'placeholder'		  => 'Imię *',
									
									'title' => 'Podaj swoje imię',
									'id' => 'imie',
									'type' => 'text'
								);
								echo form_input($data);
							?>		
						</div>
						<div class="input input-prepend">
							<?php
								$data = array(
									'name'        => 'nazwisko',
									'value'       => $this->input->post('nazwisko'),									
									'class'		  => 'span10',		
									'placeholder'		  => 'Nazwisko *',
									
									'title' => 'Podaj swoje nazwisko',
									'id' => 'nazwisko',
									'type' => 'text'
								);
								echo form_input($data);
							?>		
						</div>
						<div class="input input-prepend">
							<?php
								$options = array(''=>' - ', 'K' =>'Kobieta','M' =>'Mężczyzna');
								echo form_dropdown('plec', $options, $this->input->post('plec'),'title = "Podaj swoją płeć"');
							?>		
						</div>
						<div class="input input-prepend">
							<?php
								$data = array(
									'name'        => 'adres',
									'value'       => $this->input->post('adres'),									
									'class'		  => 'span10',		
									'placeholder'		  => 'Adres *',
									
									'title' => 'Podaj adres do korespondencji (ulica, nr domu/mieszkania)',
									'id' => 'adres',
									'type' => 'text'
								);
								echo form_input($data);
							?>		
						</div>
						<div class="input input-prepend">
							<?php
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
							?>	
						</div>
						<div class="input input-prepend">
							<?php
								$data = array(
									'name'        => 'miasto',
									'value'       => $this->input->post('miasto'),									
									'class'		  => 'span10',		
									'placeholder'		  => 'Miasto *',
									
									'title' => 'Podaj swoje miasto',
									'id' => 'miasto',
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
									
									'data-trigger' => 'focus',
									'title' => 'Podaj swój adres mailowy',
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
									'placeholder'		  => 'Telefon *',
									
									'data-trigger' => 'focus',
									'title' => 'Podaj swój numer telefonu',
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
									
									'data-trigger' => 'focus',
									'title' => 'Przepisz kod z opakowania produktu',
									'id' => 'kod',
									'type' => 'text'
								);
								echo form_input($data);
							?>							
						</div>
						<div class="input input-prepend">
							<?php
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
									
									'data-trigger' => 'focus',
									'title' => 'Wprowadź wymyślony przez Ciebie slogan reklamowy',
									'id' => 'slogan',
									'type' => 'text'
								);
								echo form_input($data);
							?>			
						</div>
						<div class="input input-prepend">
							<?php
								$data = array(
									'name'        => 'regulamin',
									'value'       => 1,
									'data-original-title' => '',
									'class'		  => 'span10',											
									
									'data-trigger' => 'focus',
									'id' => 'regulamin',
									'type' => 'checkbox',
									'' =>set_checkbox('regulamin', '1')
								);
								echo form_input($data);								
							?>			
							<div class="check_content">Akceptuję <span id="regulamin_content"> regulamin </span></div>
						</div>
						<div class="input input-prepend">
							<?php
								$data = array(
									'name'        => 'checkbox1',
									'value'       => 1,
									'data-original-title' => '',
									'class'		  => 'span10',											
									
									'data-trigger' => 'focus',
									'id' => 'checkbox1',
									'type' => 'checkbox',
									'' =>set_checkbox('checkbox1', '1')
								);
								echo form_input($data);								
							?>
							<div class="check_content">
								Wyrażam zgodę na przetwarzanie moich danych osobowych w celach marketingowych. Administratorem danych jest Danone Sp. z o.o. z siedzibą przy ul. Redutowej 9/23, 01-103 Warszawa. 
							</div>
						</div>
						<div class="input input-prepend">
							<?php
								$data = array(
									'name'        => 'checkbox2',
									'value'       => 1,
									'data-original-title' => '',
									'class'		  => 'span10',											
									
									'data-trigger' => 'focus',
									'id' => 'checkbox2',
									'type' => 'checkbox',
									'' =>set_checkbox('checkbox2', '1')
								);
								echo form_input($data);								
							?>
							<div class="check_content">
								Wyrażam zgodę na przetwarzanie moich danych osobowych przez Marketing House Sp. z o.o. z siedzibą w Warszawie, ul. Marynarska 11, kod pocztowy 02-674 Warszawa, jako administratora danych osobowych, w celu przeprowadzenia loterii promocyjnej „Loteria Głodomaniacy 2013”.
							</div>
						</div>
												<div class="input input-prepend">
							<?php
								$data = array(
									'name'        => 'checkbox3',
									'value'       => 1,
									'data-original-title' => '',
									'class'		  => 'span10',											
									
									'data-trigger' => 'focus',
									'id' => 'checkbox3',
									'type' => 'checkbox',
									'' =>set_checkbox('checkbox3', '1')
								);
								echo form_input($data);								
							?>
							<div class="check_content">
								Wyrażam zgodę na otrzymywanie informacji handlowych, w rozumieniu ustawy o świadczeniu usług drogą elektroniczną, dotyczących Danone Sp. z o.o. z siedzibą przy ul. Redutowej 9/23, 01-103 Warszawa, za pomocą środków komunikacji elektronicznej (np. e-mail, SMS, MMS).
							</div>
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
					<div id="dialog" title="Regulamin konkursu">
						<p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut molestie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermentum in, dolor. Pellentesque facilisis. Nulla imperdiet sit amet magna. Vestibulum dapibus, mauris nec malesuada fames ac turpis velit, rhoncus eu, luctus et interdum adipiscing wisi. Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non, consectetuer lobortis quis, varius in, purus. Integer ultrices posuere cubilia Curae, Nulla ipsum dolor lacus, suscipit adipiscing. Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae, dapibus risus ante sodales lectus blandit eu, tempor diam pede cursus vitae, ultricies eu, faucibus quis, porttitor eros cursus lectus, pellentesque eget, bibendum a, gravida ullamcorper quam. Nullam viverra consectetuer. Quisque cursus et, porttitor risus. Aliquam sem. In hendrerit nulla quam nunc, accumsan congue. Lorem ipsum primis in nibh vel risus. Sed vel lectus. Ut sagittis, ipsum dolor quam.</p>
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
							
						$('#regulamin_content').click(function() {
							$('#dialog').dialog('open');
						});		
					</script>
				</div>
				
			</div>
		</div>
		</div>