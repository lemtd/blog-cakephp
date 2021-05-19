<div class="container" id="edit-post-box">
    <?php echo $this->Form->create('Post');?>
    <fieldset>
		<legend id="edit-post"><?php echo 'Edit Post'; ?></legend><br>
			<?php echo $this->Form->input('title', array('id' => 'title', 'between' => '<br>')); ?><br>
			<?php echo $this->Form->input('body', array('rows' => '3', 'id' => 'body', 'between' => '<br>')); ?><br>
			<?php echo $this->Form->input('status', array(
						'options' => array('Disabled', 'Abled'),
						'between' => '<br>'
					));
			?>
		</fieldset><br><br><br>
	<button id="edit-post-back"><?php echo $this->Html->link('Back', array('action' => '../Posts/index')); ?></button>
	<div id="edit-post-submit"><?php echo $this->Form->end('Save Post'); ?></div><br><br>
</div>
