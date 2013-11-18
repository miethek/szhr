<nav class="navbar-inverse sidebar">
	<div class="navbar-inner">
	<ul class="nav nav-stacked" id="sidebar-menu">
	<li>
		<a href="zgloszenia" class="menu-content hasChild sidebar-item  dropdown-open"><i class="icon-edit icon-large"></i> <span>Zgłoszenia</span></a>
		<ul class="nav nav-stacked sub-nav  submenu-content dropdown-close ">	
			<li><a href="<?php echo base_url(); ?>zgloszenia" class="menu-list sidebar-item <?php if($current == 'zgloszenia') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Zgłoszenia</span></a></li>
			<li><a href="#" class="menu-list sidebar-item <?php if($current == 'weryfikacja') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Do weryfikacji</span></a></li>
			<li><a href="<?php echo base_url(); ?>losowanie" class="menu-list sidebar-item <?php if($current == 'losowanie') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Losowanie</span></a></li>
			<li><a href="<?php echo base_url(); ?>zwyciezcy" class="menu-list sidebar-item <?php if($current == 'zwyciezcy') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Zwycięzcy</span></a></li>
		</ul>	
	</li>	
	<li>
		<a href="raporty" class="menu-menus hasChild dropdown-open sidebar-item"><i class="icon-bar-chart icon-large"></i><span>Raporty</span></a>	
		<ul class="nav nav-stacked sub-nav  submenu-content dropdown-close">	
			<li><a href="<?php echo base_url(); ?>raport" class="menu-list sidebar-item  <?php if($current == 'raport') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Wszystkie</span></a></li>
			<li><a href="<?php echo base_url(); ?>raport/dzis" class="menu-list sidebar-item  <?php if($current == 'raport_dzis') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Dziś</span></a></li>
			<li><a href="<?php echo base_url(); ?>raport/tydzien" class="menu-list sidebar-item  <?php if($current == 'raport_week') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Ostatni tydzień</span></a></li>
			<li><a href="<?php echo base_url(); ?>raport/miesiac" class="menu-list sidebar-item  <?php if($current == 'raport_miesiac') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Ostatni miesiąc</span></a></li>
			<li><a href="<?php echo base_url(); ?>raport/okres" class="menu-list sidebar-item  <?php if($current == 'raport_okres') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Wybierz okres</span></a></li>
		</ul>	
	
	</li>

	<li>
		<a href="uzytkownicy" class="menu-users hasChild dropdown-open sidebar-item"><i class="icon-user icon-large"></i> <span>Użytkownicy</span></a>
		<ul class="nav nav-stacked sub-nav  submenu-content dropdown-close">	
			<li><a href="<?php echo base_url(); ?>uzytkownicy" class="menu-list sidebar-item  <?php if($current == 'uzytkownicy') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Lista</span></a></li>
			<li><a href="<?php echo base_url(); ?>dodaj_uzytkownika" class="menu-list sidebar-item  <?php if($current == 'dodaj') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Dodaj</span></a></li>
		</ul>	
	</li>
	
	<li>
		<a href="logs" class="menu-content hasChild sidebar-item  dropdown-open"><i class="icon-sitemap icon-large"></i> <span>Logi</span></a>
		<ul class="nav nav-stacked sub-nav  submenu-content dropdown-close">	
			<li><a href="<?php echo base_url(); ?>logi" class="menu-list sidebar-item  <?php if($current == 'logi') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Wszystkie</span></a></li>
			<li><a href="<?php echo base_url(); ?>logi_okres" class="menu-list sidebar-item  <?php if($current == 'logi_okres') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Okres</span></a></li>
		</ul>	
	</li>
	
		
	<li>
		<a href="email" class="menu-content hasChild sidebar-item  dropdown-open"><i class="icon-envelope icon-large"></i> <span>E-maile</span></a>
		<ul class="nav nav-stacked sub-nav  submenu-content dropdown-close">	
			<li><a href="<?php echo base_url(); ?>email" class="menu-list sidebar-item  <?php if($current == 'email') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Wszystkie</span></a></li>			
		</ul>	
	</li>
	
	<li>
		<a href="ustawienia" class="menu-settings hasChild dropdown-open sidebar-item"><i class="icon-cog icon-large"></i> <span>Ustawienia</span></a>
		<ul class="nav nav-stacked sub-nav  submenu-content dropdown-close">	
			<li><a href="<?php echo base_url(); ?>ustawienia/konkurs" class="menu-list sidebar-item <?php if($current == 'konkurs') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Konkurs</span></a></li>
			<li><a href="<?php echo base_url(); ?>ustawienia/profil" class="menu-list sidebar-item <?php if($current == 'profil') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Profil</span></a></li>
			<li><a href="<?php echo base_url(); ?>ustawienia/zmien_haslo" class="menu-list sidebar-item <?php if($current == 'zmien_haslo') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Zmień hasło</span></a></li>
			<li><a href="<?php echo base_url(); ?>ustawienia/usun_konto" class="menu-list sidebar-item <?php if($current == 'usun_konto') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Usuń konto</span></a></li>
		</ul>	
	</li>
	
		<li>
		<a href="emails" class="menu-content hasChild sidebar-item  dropdown-open"><i class="icon-question-sign icon-large"></i> <span>Pomoc</span></a>
		<ul class="nav nav-stacked sub-nav  submenu-content dropdown-close">	
			<li><a href="<?php echo base_url(); ?>pomoc" class="menu-list sidebar-item  <?php if($current == 'pomoc') echo 'current'; ?>"><i class="icon-white icon-large"></i> <span>Kontakt</span></a></li>			
		</ul>	
	</li>
	
	</ul>


	</div>
</nav>	
