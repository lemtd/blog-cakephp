<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<?php echo $this->element('head'); ?>
<body>
	<nav class="navbar navbar-default" id="menu">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li><?php echo $this->Html->link('Home', array('action' => '../Posts/index', 'class' => 'active')); ?></li>
				<?php if ($this->Session->read('Auth.User')) { ?>
					<li><?php echo $this->Html->link('Add Post', array('action' => '../Posts/add')); ?></li>
					<li><?php echo $this->Html->link('Logout', array('action' => '../Users/logout')); ?></li>
				<?php } else { ?>
					<li><?php echo $this->Html->link('Register', array('action' => '../Users/add')); ?></li>
					<li><?php echo $this->Html->link('Login', array('action' => '../Users/login')); ?></li>
				<?php } ?>
			</ul>
		</div>
	</nav>
	<div id="container">
		<div id="content">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<br><br><br><br>
		<div class="container" id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'https://cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
	<?php echo $this->element('footer'); ?>
</body>
</html>
