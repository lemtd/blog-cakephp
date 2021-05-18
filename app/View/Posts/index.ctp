<div class="container" id="hello">
    <h1>Blog CakePHP: Hello!</h1>
</div>

<div class="container" id="index">
    <nav class="navbar navbar-light bg-light">
        <?php echo $this->Form->create('Properties', array('type' => 'post', 'class' => 'form-inline'));
            echo $this->Form->input('Search', array(
                'between'=>'<label for="search" class="main_search"></label><br>',
                "placeholder" => "Search",
                'label'=>false,
                'class' => 'form-control mr-sm-2',
                'id' => 'caixa',
                'type' => 'search',
                'aria-label' => 'Search'
            ));
        ?>
        <?php echo $this->Form->input('Filter', array(
                'options' => array('Disabled', 'Abled'),
                'empty' => 'All',
                'label' => false,
                'id' => 'filter'
            ));
        ?>
        <br>
        <br>

        <?php echo $this->Form->button('Submit', array(
                'class'=>'btn btn-outline-success my-2 my-sm-0',
                'type' => 'submit'
            ));
            echo $this->Form->end();
        ?>
    </nav>
</div>
<br>
<div class="container" id="posts">
    <h2>POSTS</h2>
    <table class="table table-hover" id="table_container">
        <br><br>
        <?php if ($this->Session->read('Auth.User')) { ?>
            <tr>
                <th id="title_table">Title</th>
                <th id="action_table">Status</th>
                <?php if ($this->Session->read('Auth.User')) { ?>
                    <th id="action_table">Action</th>
                <?php } ?>
            </tr>
        <?php } ?>
        <?php $i = 0; foreach ($posts as $post): ?>
            <?php if ($this->Session->read('Auth.User')) { ?>
                <tr>
                    <td>
                        <div data-toggle="collapse" data-target="#demo-<?php echo $i; ?>"><?php echo $post['Post']['title']; ?></div>
                        <div id="demo-<?php echo $i; $i++; ?>" class="collapse">
                            <?php echo $post['Post']['body']; ?>
                        </div>
                    </td>

                    <td>
                        <?php if($post['Post']['status'] == TRUE) { ?>
                            <?php echo $this->Html->image('test-pass-icon.png', array('alt' => 'Abled')) ?>
                        <?php } else { ?>
							<?php echo $this->Html->image('test-fail-icon.png', array('alt' => 'Disabled')) ?>
                        <?php } ?>
                    </td>
                    <td>
                        <?php echo $this->Form->create('Actions', array('type' => 'post', 'class' => 'form-inline')); ?>
						<button><a href="/Posts/edit/<?php echo $post['Post']['id']; ?>">Edit</a></button>
						<button><a href="/Posts/delete/<?php echo $post['Post']['id']; ?>">Delete</a></button>
                        <?php echo $this->Form->end(); ?>
                    </td>
                </tr>
			<?php } else { ?>
				<tr>
                    <div class="panel panel-default">
                        <?php if($post['Post']['status'] == TRUE) { ?>
                            <div class="panel-heading">
                                <?php echo $post['Post']['title']; echo $this->Html->tag('span', 'Abled', array('id' => 'abled')); ?>
                            </div>
                            <div class="panel-body"><?php echo $post['Post']['body']; ?></div>
                        <?php } else { ?>
                            <div class="panel-heading">
                                <?php echo $post['Post']['title']; echo $this->Html->tag('span', 'Disabled', array('id' => 'disabled')); ?>
                            </div>
                            <div class="panel-body"><?php echo $post['Post']['body']; ?></div>
                        <?php } ?>
                    </div>
            	</tr>
			<?php } ?>
        <?php endforeach; ?>
    </table>
</div>
