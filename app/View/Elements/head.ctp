<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('estilizando');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->Html->script('jquery.min');
		echo $this->Html->script('bootstrap');
	?>
</head>