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
							Wygrana
						</div>
					</div>
					<div id="inner-content" class="span12">
						<div class="row-fluid">
							<div class="span12">
								<div class="row-fluid">
									<div class="span12">
		
					<div class="winner">						
						
						<h2>Zwycięzca</h2>
						
						<p class="success_box">
						
						<?php
								if($query->result()){					  
														 foreach ($query->result() as $row ): 							  
														  $los_id = $row->id_zgloszenia;
														  echo 'W wyniku losowania zwycięzcą ';
															if($row->plec == 'K') echo 'została Pani:';
															else echo 'został Pan:';
															
															echo '<br/><br/>
														  
															<b>'.$row->imie.' '.$row->nazwisko.'</b><br/><br/>
															tel: '.$row->telefon.'<br/>
															email: '.$row->email.'<br/>
															adres: '.$row->adres.'<br/>
															kod pocztowy: '.$row->kod1.' -'.$row->kod2.'<br/>
															miasto: '.$row->miasto.'<br/><br/>
															Ze sloganem:<br/>
															<b>"'.$row->slogan.'"</b><br/><br/>';	
															
															echo anchor('losowanie','Losuj ponownie').' lub sprawdź kto '.anchor('zwyciezcy','wygrał').' do tej pory';
							
														 endforeach;
													}?>
						
																					
							
						
						
						</p>
						
					</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				&nbsp;
			</div>
		</div>
	</div>