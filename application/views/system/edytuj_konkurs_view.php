		<?php $this->load->view('admin/sidebar_view'); ?>
		<div id="push"></div>
		<div id="content-container" class="container-fluid">
			<div class="row-fluid">
				<div id="content" class="clearfix">
					<div id="breadcrumb-container" class="span12 visible-desktop">
						<div class="breadcrumb">
							<a href="<?php echo base_url().'admin'; ?>">Admin</a>
							<span class="divider">/</span>
							Ustawienia
							<span class="divider">/</span>
							<?php 
								echo anchor(base_url().'ustawienia/konkurs','Konkurs');
							?>
							
						</div>
					</div>
					<div id="inner-content" class="span12">
						<div class="row-fluid">
							<div class="span12">
								<div class="row-fluid">
									<div class="span12">
										<div class="edit_form">
										<h3>Konfiguracja konkursu</h3>
										<?php
											if (validation_errors()) echo '<div id="flashMessage" class="error">'.validation_errors().'</div>';
											if ($error) echo '<div id="flashMessage" class="success">'.$error.'</div>';
													
												if($query->result()){		
										
														$row = $query->row();	
														/*if($current == 'profil') echo form_open(base_url().'ustawienia/konkurs');
														else */
														echo form_open(base_url().'ustawienia/konkurs/');
														echo '																
														<div class="input input-prepend">';
														$data = array(
															'name'        => 'id_konkurs',
															'value'       => $row->id_konkurs,									
															'type' => 'hidden',															
														);
														echo form_input($data);
														
														echo 'Nazwa konkursu:';
														$data = array(
															'name'        => 'nazwa',
															'value'       => $row->nazwa,									
															'class'		  => 'span10',		
															'placeholder'		  => 'Nazwa *',																								
															'id' => 'nazwa',
															'type' => 'text'
														);
														echo form_input($data);
														echo '		
														</div>
														Wymagane pola:<br/><br/>
														<div class="input input-prepend cs_checkbox">							
																<input type="checkbox" name="imie" '; if($row->imie == 'on') echo 'checked ';
																echo '>
																<label>Imię</label>
																';																
															echo '
														</div>
														<div class="input input-prepend cs_checkbox">							
																<input type="checkbox" name="nazwisko" '; if($row->nazwisko == 'on') echo 'checked ';
																echo '>
																<label>Nazwisko</label>
																';																
															echo '
														</div>
														<div class="input input-prepend cs_checkbox">							
																<input type="checkbox" name="plec" '; if($row->plec == 'on') echo 'checked ';
																echo '>
																<label>Płeć</label>
																';																
															echo '
														</div>
														<div class="input input-prepend cs_checkbox">							
																<input type="checkbox" name="adres" '; if($row->adres == 'on') echo 'checked ';
																echo '>
																<label>Adres</label>
																';																
															echo '
														</div>
														
														<div class="input input-prepend cs_checkbox">							
																<input type="checkbox" name="kod_pocztowy" '; if($row->kod_pocztowy == 'on') echo 'checked ';
																echo '>
																<label>Kod pocztowy</label>
																';																
															echo '
														</div>
														
														<div class="input input-prepend cs_checkbox">							
																<input type="checkbox" name="miasto" '; if($row->miasto == 'on') echo 'checked ';
																echo '>
																<label>Miasto</label>
																';																
															echo '
														</div>
														<div class="input input-prepend cs_checkbox">							
																<input type="checkbox" name="email" '; if($row->email == 'on') echo 'checked ';
																echo '>
																<label>E-mail</label>
																';																
															echo '
														</div>
														<div class="input input-prepend cs_checkbox">							
																<input type="checkbox" name="telefon" '; if($row->telefon == 'on') echo 'checked ';
																echo '>
																<label>Telefon</label>
																';																
															echo '
														</div>
														<div class="input input-prepend cs_checkbox">							
																<input type="checkbox" name="kod" '; if($row->kod == 'on') echo 'checked ';
																echo '>
																<label>Kod z opakowania</label>
																';																
															echo '
														</div>
														<div class="input input-prepend cs_checkbox">							
																<input type="checkbox" name="paragon" '; if($row->paragon == 'on') echo 'checked ';
																echo '>
																<label>Paragon</label>
																';																
															echo '
														</div>
														<div class="input input-prepend cs_checkbox">							
																<input type="checkbox" name="slogan" '; if($row->slogan == 'on') echo 'checked ';
																echo '>
																<label>Slogan reklamowy</label>
																';																
															echo '
														</div>
														<div class="input input-prepend cs_checkbox">							
																<input type="checkbox" name="regulamin" '; if($row->regulamin == 'on') echo 'checked ';
																echo '>
																<label>Regulamin</label>
																';																
															echo '
														</div>
														<div class="input input-prepend">';
							
														/*$data = array(
															'name'        => 'regulamin_tresc',
															'value'       => $this->input->post('regulamin_tresc'),									
															'class'		  => 'span10',		
															'placeholder'		  => 'Wpisz treść regulaminu...',																		
															'rows' => 5
															
														);*/
														//echo form_textarea($data);
														echo  '<textarea placeholder="Wpisz treść regulaminu..." class="span10" rows="5" name="regulamin_tresc">'.$row->regulamin_tresc.'</textarea>';
														echo '		
														</div>
														<div class="input input-prepend cs_checkbox">							
																<input type="checkbox" name="checkbox1" '; if($row->checkbox1 == 'on') echo 'checked ';
																echo '>
																<label>Checkbox 1</label>
																';																
															echo '
														</div>
														<div class="input input-prepend">';							
														/*$data = array(
															'name'        => 'checkbox1_tresc',
															'value'       => $this->input->post('checkbox1_tresc'),									
															'class'		  => 'span10',		
															'placeholder'		  => 'Wpisz treść...',																		
															'rows' => 5
															
														);
														echo form_textarea($data,'adsadasd');*/
														echo  '<textarea placeholder="Wpisz treść..." class="span10" rows="5" name="checkbox1_tresc">'.$row->checkbox1_tresc.'</textarea>';
														
														echo '		
														</div>
														<div class="input input-prepend cs_checkbox">							
																<input type="checkbox" name="checkbox2" '; if($row->checkbox2 == 'on') echo 'checked ';
																echo '>
																<label>Checkbox 2</label>
																';																
															echo '
														</div>
														<div class="input input-prepend">';
							
														/*$data = array(
															'name'        => 'checkbox2_tresc',
															'value'       => $this->input->post('checkbox2_tresc'),									
															'class'		  => 'span10',		
															'placeholder'		  => 'Wpisz treść...',																		
															'rows' => 5
															
														);
														echo form_textarea($data);*/
														echo  '<textarea placeholder="Wpisz treść..." class="span10" rows="5" name="checkbox2_tresc">'.$row->checkbox2_tresc.'</textarea>';
														echo '		
														</div>
														<div class="input input-prepend cs_checkbox">							
																<input type="checkbox" name="checkbox3" '; if($row->checkbox3 == 'on') echo 'checked ';
																echo '>
																<label>Checkbox 3</label>
																';																
															echo '
														</div>
														<div class="input input-prepend">';
							
														/*$data = array(
															'name'        => 'checkbox3_tresc',
															'value'       => $this->input->post('checkbox3_tresc'),									
															'class'		  => 'span10',		
															'placeholder'		  => 'Wpisz treść...',																		
															'rows' => 5
															
														);
														echo form_textarea($data);*/
														echo  '<textarea placeholder="Wpisz treść..." class="span10" rows="5" name="checkbox3_tresc">'.$row->checkbox3_tresc.'</textarea>';
														echo '		
														</div>
														<div class="input input-prepend cs_checkbox">							
																<input type="checkbox" name="captcha" '; if($row->captcha == 'on') echo 'checked ';
																echo '>
																<label>Captcha</label>
																';																
															echo '
														</div>
														
														
														
														
														
														
														
														<div class="input clear">';
														
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
										<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.switchButton.js"></script>
	
	<script type="text/javascript">
      $(function() {
       $("input[type=checkbox]").switchButton({
			width: 40,
			height: 20,
			button_width: 20,
			on_label: 'I',
			off_label: 'O',
			clear: false  
			
			
		});

      })
    </script>
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