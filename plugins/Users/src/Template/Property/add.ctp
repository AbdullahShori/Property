<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $property
 */
?>
<?  ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Property'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Plots'), ['controller' => 'property','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Comercial'), ['controller' => 'property','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Rent'), ['controller' => 'property','action' => 'index']) ?></li>
    </ul>
</nav>
<div class="property form large-9 medium-8 columns content">
    <?= $this->Form->create($properties,array('type'=>'file')) ?>
    <fieldset>
        <legend><?= __('Add Property') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('price');
            echo $this->Form->control('location');
            echo $this->Form->control('description');
            echo $this->Form->control('room');
            echo $this->Form->control('bath');
            echo $this->Form->control('land_area');
            echo $this->Form->control('file', ['label' => false, 'class' => 'form-control', 'type' => 'file']) ;
            echo $this->Form->control('phone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
