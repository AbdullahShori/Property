<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Plots'), ['controller' => 'property','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Comercial'), ['controller' => 'property','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Rent'), ['controller' => 'property','action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
            echo $this->Form->control('password');
            echo $this->Form->control('city');
            echo $this->Form->checkbox('agree');
            echo " Terms & Conditions ";
        ?>
    </fieldset>
    
    <?= $this->Form->button(__('Register'),['class'=>'tee']) ?>
        <br><br><br>
        <?= $this->Html->link(__('Click Here to Login'),['controller' => 'Users','action' => 'login']) ?>
        <?= $this->Form->end() ?>
</div>
