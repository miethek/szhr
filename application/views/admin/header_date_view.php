<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl-pl" dir="ltr" lang="pl-pl">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width">
	<title><?php echo $title; ?></title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/croogo-bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/croogo-bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
	
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/html5.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/jquery_005.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/jquery_004.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/jquery_006.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/superfish.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/supersubs.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/jquery_002.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/jquery_003.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/thickbox-compressed.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/underscore-min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/admin.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/choose.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/croogo-bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/wysiwyg_002.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/wysiwyg.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo/nodes.js"></script>	

	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-timepicker-addon.js"></script>
	
	<script type="text/javascript">
		$(function() {
			$('#date_start').datepicker({
				inline: true,
				showOn: "button",
				buttonImage: "images/calendar.png",
				buttonImageOnly: true,
				changeMonth: true,
				changeYear: true,
				firstDay: 1,
				closeText: 'Zamknij',
				prevText: '&#x3c;Prev',
				nextText: 'Next&#x3e;',
				currentText: 'Dziś',
				monthNames: ['Styczeń','February','March','April','May','June','July','August','September','November','October','December'],
				monthNamesShort: ['Sty','Lut','Mar','Kwi','Maj','Cze','Lip','Sie','Wrz','Paź','Lis','Gru'],
				dayNames: ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'],
				dayNamesShort: ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'],
				dayNamesMin: ['Nd','Pn','Wt','Śr','Cz','Pt','Sb'],
				weekHeader: 'Tydzień',
				dateFormat: 'yy-mm-dd',
 				maxDate: '<?php echo date('Y-m-d'); ?>',
				firstDay: 1,
				isRTL: false,
				showMonthAfterYear: false,
				yearSuffix: '',
				showOtherMonths: true,
				onClose: function( selectedDate ) {
 						$( "#date_end" ).datepicker( "option", "minDate", selectedDate );
 				}
			});
			$('#date_end').datepicker({
				inline: true,
				showOn: "button",
				buttonImage: "images/calendar.png",
				buttonImageOnly: true,
				changeMonth: true,
				changeYear: true,
				firstDay: 1,
				closeText: 'Zamknij',
				prevText: '&#x3c;Prev',
				nextText: 'Next&#x3e;',
				currentText: 'Dziś',
				monthNames: ['Styczeń','February','March','April','May','June','July','August','September','November','October','December'],
				monthNamesShort: ['Sty','Lut','Mar','Kwi','Maj','Cze','Lip','Sie','Wrz','Paź','Lis','Gru'],
				dayNames: ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'],
				dayNamesShort: ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'],
				dayNamesMin: ['Nd','Pn','Wt','Śr','Cz','Pt','Sb'],
				weekHeader: 'Tydzień',
				dateFormat: 'yy-mm-dd',
				maxDate: '<?php echo date('Y-m-d'); ?>',
				firstDay: 1,
				isRTL: false,
				showMonthAfterYear: false,
				yearSuffix: '',
				showOtherMonths: true,
					onClose: function( selectedDate ) {
 						$( "#date_start" ).datepicker( "option", "maxDate", selectedDate );
 					}
			});
		});
	</script>
	
</head>

<body>

		<div id="wrap">
			<header class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<span class="brand"><?php echo anchor(base_url().'admin','SZHR - Panel administracyjny'); ?></span>
			<div class="nav-collapse collapse" style="height: 0px; ">
				<ul class="nav pull-right">
					<li>
						<a href="#">
							Jesteś zalogowany jako: <?php echo login(); ?>						</a>
					</li>
					<li>
						<?php echo anchor(base_url().'admin/logout','Wyloguj się'); ?>	
					</li>
				</ul>
							</div>
		</div>
	</div>
</header>