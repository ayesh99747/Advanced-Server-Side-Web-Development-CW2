<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--	CSS files -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<nav class="navbar navbar-light bg-light">

			<div class="container">
				<a class="navbar-brand"
				   href="<?php echo base_url() ?>index.php/Contact/">
					<img src="\cw2\assets\logos\Logo.svg" alt="Phonebook Logo" width="100" height="100">
					Phonebook
				</a>
			</div>

			<ul class="nav nav-pills justify-content-end ">
				<li class="nav-item">
					<a class="nav-link"
					   href="<?php echo base_url() ?>index.php/Contact/addNewContactForm"
					>Add New Contact</a>
				</li>
			</ul>
		</nav>
	</div>
</div>
<br>
<div class="container">
	<?php $this->load->view($main_view); ?>
</div>

</body>
</html>

