
<?php

if ( function_exists( 'date_default_timezone_set' ) ) {
    date_default_timezone_set('Asia/Jakarta');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Kukode.com</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- CSS Unify -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify-core.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify-components.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/unify-globals.css">
 	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
 	 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
 	 <!-- syntaxhighlight plugin -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugin/syntax/styles/shCore.css">
   	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugin/syntax/styles/shThemeDefault.css">

    
</head>
<body style="background-image: url('<?php echo base_url()?>assets/img/bata.png');">
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	  <!-- Brand -->
	  <a class="navbar-brand" href="<?php echo base_url()?>">K_C0de</a>

	  <!-- Toggler/collapsibe Button -->
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <!-- Navbar links -->
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url()?>">Home</a>
	      </li>
	      <!--<li class="nav-item">
	      	<a class="nav-link" href="<?php //echo base_url()?>kontak">Kontak</a>
	      </li>-->
	    </ul>
	  </div> 
	</nav>
	 

	<div class="container-fluid">
		<?php $this->load->view($main) ?>
	</div>
	
	 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	
	
	  <script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip(); 
		});
	</script>
	

</body>
</html>