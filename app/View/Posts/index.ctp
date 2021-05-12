<div class="container">
    <table class="table table-hover" id="table_container">

    <nav class="navbar navbar-light bg-light">
        <?php echo $this->Form->create('Properties', array('type' => 'post', 'class' => 'form-inline'));
            echo $this->Form->input('Search', array(
                'between'=>'<label for="search" class="main_search"></label><br>',
                "placeholder" => "Search",
                'label'=>false,
                'class' => 'form-control mr-sm-2',
                'type' => 'search',
                'aria-label' => 'Search'
            ));
        ?>
        <br>
        <?php echo $this->Form->button('Submit', array(
                'class'=>'btn btn-outline-success my-2 my-sm-0',
                'type' => 'submit'
            ));
            echo $this->Form->end();
        ?>
    </nav>
    <br><br>

        <tr>
            <th id="title_table">Title</th>
            <?php if ($this->Session->read('Auth.User')) { ?>
                <th id="action_table">Action</th>
            <?php } ?>
        </tr>

        <?php $i = 0; foreach ($posts as $post): ?>
            <tr>
                <td>
                    <div data-toggle="collapse" data-target="#demo-<?php echo $i; ?>"><?php echo $post['Post']['title']; ?></div> 
                    <div id="demo-<?php echo $i; $i++; ?>" class="collapse">
                        <?php echo $post['Post']['body']; ?>
                    </div> 
                </td>
                <?php if ($this->Session->read('Auth.User')) { ?>
                    <td>
                        <?php echo $this->Form->postLink('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
                        <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $post['Post']['id']),  array('confirm' => 'Are you sure?')); ?>
                    </td>
                <?php } ?>
            </tr>
        <?php endforeach; ?>
    </table>
</div>