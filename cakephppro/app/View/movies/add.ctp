<div class="movies form">
<?php
echo $this->Form->create('Movie');
echo $this->Form->inputs(array('title', 'genre', 'rating', 'format', 'length'));
echo $this->Form->hidden('username', array('type'=>'text',  'label' => 'Username','value'=>$this->Session->read('username')));

echo $this->Form->end('Add');
?>
</div>

<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link('List of bikash store', array('action' => 'index'));?></li>


    </ul>
</div>