		<nav class="navbar-inverse sidebar">
			<div class="navbar-inner">
				<ul class="nav nav-stacked" id="sidebar-menu">
					<li><a href="<?php echo base_url().'zgloszenia'; ?>" class="menu-content hasChild dropdown-close sidebar-item <?php if($current == 'zgloszenia') echo 'current'; ?>"><span>Zgłoszenia</span></a></li>
					<li><a href="<?php echo base_url().'losowanie'; ?>" class="menu-content hasChild dropdown-close sidebar-item <?php if($current == 'losowanie') echo 'current'; ?>"><span>Losowanie</span></a></li>
					<li><a href="<?php echo base_url().'ustawienia'; ?>" class="menu-content hasChild dropdown-close sidebar-item <?php if($current == 'ustawienia') echo 'current'; ?>"><span>Ustawienia</span></a></li>
				</ul>
			</div>

		</nav>	