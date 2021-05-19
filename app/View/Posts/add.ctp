<div class="container" id="add-post-box">
    <?php echo $this->Form->create('Post', array('novalidate' => true));?>
    <fieldset>
		<legend id="add-post"><?php echo 'Add Post'; ?></legend><br>
			<?php echo $this->Form->input('title', array('id' => 'title', 'between' => '<br>')); ?><br>
			<?php echo $this->Form->input('body', array('rows' => '3', 'id' => 'body', 'between' => '<br>')); ?><br>
			<?php echo $this->Form->input('status', array(
						'options' => array('Disabled', 'Abled'),
						'between' => '<br>'
					));
			?>
		</fieldset><br><br><br>
	<button id="add-post-back"><?php echo $this->Html->link('Back', array('action' => '../Posts/index')); ?></button>
	<div id="add-post-submit"><?php echo $this->Form->end('Save Post'); ?></div><br><br>
</div>
