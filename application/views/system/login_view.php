		<div id="main" class="container-fluid">
			<div class="row-fluid">
				<div id="install" class="span12">
				
					<?php 
						$add_form = array(
							'id' => 'databaseForm',
							
						
						);						
						echo form_open('admin',$add_form);
					?>

				
					<div class="install">
					
						<?php 
						
// 						      echo $image;
						if (validation_errors() || $error) echo '<div id="flashMessage" class="error">'.validation_errors().$error.'</div>';	?>
						
						<h2>Panel administracyjny</h2>
						
						<div class="input input-prepend">
							<?php
								$data = array(
									'name'        => 'login',
									'value'       => $this->input->post('login'),
									'data-original-title' => '',
									'class'		  => 'span10',		
									'placeholder'		  => 'Użytkownik',
									'id' => 'login',
									'type' => 'text'
								);
								echo form_input($data);
							?>		
						</div>
						<div class="input input-prepend">
							<?php
								$data = array(
									'name'        => 'password',
// 									'value'       => $this->input->post('email'),
									'data-original-title' => '',
									'class'		  => 'span10',		
									'placeholder'		  => 'Hasło',
									'id' => 'password',
									'type' => 'password'
								);
								echo form_input($data);
							?>	
						</div>
	
						
					</div>
					<div class="form-actions">
						<div class="input submit">	
							<?php
								$data = array(
									'name'        => 'submit',
									'value'       => 'Zaloguj się',
									'class'		  => 'btn btn-success',		
								);
								echo form_submit($data);
								echo form_close();
								
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>