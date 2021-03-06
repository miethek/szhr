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
	
	<style>
		@media (max-width: 767px) {
			h1, h2, h3 { font-size: 20px }
			#main { padding: 100px 20px; }
		}

		#wrap {
			padding: 0px; 
		}
		#main {
			max-width: 500px; margin: 42px auto; padding: 60px 0; 
		}
		#install { 
			background: white; background-clip: padding-box;
			box-shadow: rgba(200,200,200,1) 0 4px 18px;
			moz-box-shadow: rgba(200,200,200,1) 0 4px 18px;
			-webkit-box-shadow: rgba(200,200,200,1) 0 4px 18px;
		}
		#flashMessage {
			margin: 10px; color: #B94A48;
		}
		.install { padding: 20px 20px 0 20px; }
		.install .input { margin: 0 0 5px 0; padding: 10px;}
		.input select { margin-bottom: 0; }
		.install blockquote { background: #eee; padding: 10px; margin-bottom: 0px; border-radius: 4px; }
		.input .error-message { font-size: 14px; }
		.form-actions { text-align: right;  margin-bottom: 0px; }
	
		form {
			margin: 0px; 
		}
	</style>
	
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/croogo-bootstrap.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-timepicker-addon.js"></script>
	
	<script type="text/javascript">
		$(function() {
			$('#paragon').datepicker({
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
			});
		});
	</script>
	<script>
		$(function() {
			$( document ).tooltip({
				position: {			
					at: "right+5 top-15"	
				}
			});
		});
	</script>

	
</head>

<body>

	<div id="wrap" class="install">
		<header class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<span class="brand"><?php echo anchor(base_url(),'System zgłaszania haseł reklamowych'); ?></span>
				</div>
			</div>
		</header>